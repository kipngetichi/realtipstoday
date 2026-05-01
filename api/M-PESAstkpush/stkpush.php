<?php
declare(strict_types=1);

// Load configuration
$config = require __DIR__ . '/config.php';

// Extract configuration
$BUSINESS_SHORT_CODE = $config['business_short_code'];
$PASSKEY = $config['passkey'];
$CONSUMER_KEY = $config['consumer_key'];
$CONSUMER_SECRET = $config['consumer_secret'];
$CALLBACK_URL = $config['callback_url'];
$ENVIRONMENT = $config['environment'];
$API_URLS = $config['api_urls'][$ENVIRONMENT];

// Amount for Golden Fixed Tips
$AMOUNT = 525;

// Validate configuration early
if ($CONSUMER_KEY === 'YOUR_CONSUMER_KEY' || $CONSUMER_SECRET === 'YOUR_CONSUMER_SECRET' || $PASSKEY === 'YOUR_PASSKEY') {
    $configError = "MPESA API credentials not configured. Please edit config.php and add your Safaricom Daraja credentials.";
}

/**
 * Generate Safaricom Access Token
 */
function getAccessToken($consumerKey, $consumerSecret, $authUrl) {
    $credentials = base64_encode($consumerKey . ':' . $consumerSecret);
    
    $headers = [
        'Authorization: Basic ' . $credentials,
        'Content-Type: application/json'
    ];
    
    $ch = curl_init($authUrl);
    curl_setopt_array($ch, [
        CURLOPT_HTTPHEADER => $headers,
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_TIMEOUT => 30,
        CURLOPT_SSL_VERIFYPEER => true
    ]);
    
    $response = curl_exec($ch);
    $httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
    $curlError = curl_error($ch);
    curl_close($ch);
    
    if ($httpCode === 200) {
        $result = json_decode($response, true);
        if (json_last_error() === JSON_ERROR_NONE && isset($result['access_token'])) {
            return $result['access_token'];
        }
    }
    
    error_log("MPESA Auth Failed: HTTP $httpCode - Error: $curlError - Response: $response");
    return null;
}

/**
 * Initiate STK Push
 */
function initiateSTKPush($phoneNumber, $amount, $accountReference, $description, $callbackUrl, $config) {
    $authUrl = $config['api_urls'][$config['environment']]['auth'];
    $stkUrl = $config['api_urls'][$config['environment']]['stk_push'];
    
    $accessToken = getAccessToken(
        $config['consumer_key'], 
        $config['consumer_secret'],
        $authUrl
    );
    
    if (!$accessToken) {
        return [
            'success' => false, 
            'message' => 'Failed to authenticate with MPESA. Please check your API credentials.'
        ];
    }
    
    // Ensure phone number is in 254 format
    $phone = preg_replace('/^0/', '254', $phoneNumber);
    $timestamp = date('YmdHis');
    $password = base64_encode($config['business_short_code'] . $config['passkey'] . $timestamp);
    
    $payload = [
        'BusinessShortCode' => $config['business_short_code'],
        'Password' => $password,
        'Timestamp' => $timestamp,
        'TransactionType' => 'CustomerPayBillOnline',
        'Amount' => (int)$amount,
        'PartyA' => $phone,
        'PartyB' => $config['business_short_code'],
        'PhoneNumber' => $phone,
        'CallBackURL' => $callbackUrl,
        'AccountReference' => $accountReference,
        'TransactionDesc' => $description
    ];
    
    $headers = [
        'Authorization: Bearer ' . $accessToken,
        'Content-Type: application/json'
    ];
    
    $ch = curl_init($stkUrl);
    curl_setopt_array($ch, [
        CURLOPT_HTTPHEADER => $headers,
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_POST => true,
        CURLOPT_POSTFIELDS => json_encode($payload),
        CURLOPT_TIMEOUT => 30,
        CURLOPT_SSL_VERIFYPEER => true
    ]);
    
    $response = curl_exec($ch);
    $httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
    $curlError = curl_error($ch);
    curl_close($ch);
    
    $result = json_decode($response, true);
    
    // Check response
    if (isset($result['ResponseCode']) && $result['ResponseCode'] === '0') {
        return [
            'success' => true,
            'message' => 'STK Push sent successfully! Please check your phone and enter your MPESA PIN to complete payment.',
            'checkoutRequestId' => $result['CheckoutRequestID'] ?? null,
            'merchantRequestId' => $result['MerchantRequestID'] ?? null
        ];
    } else {
        $errorMsg = $result['errorMessage'] ?? $result['ResponseDescription'] ?? 'Payment initiation failed. Please try again.';
        error_log("MPESA STK Push Failed: $errorMsg - Response: " . json_encode($result));
        
        return [
            'success' => false,
            'message' => "Payment failed: $errorMsg",
            'response' => $result
        ];
    }
}

// Process form submission
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['phone_number'])) {
    $phoneNumber = preg_replace('/[^0-9]/', '', $_POST['phone_number']);
    
    // Validate phone number (Kenyan formats: 07..., 01..., 2547..., 2541...)
    $isValid = preg_match('/^(07|01|254[71])[0-9]{8}$/', $phoneNumber);
    
    if (!$isValid) {
        $error = "Please enter a valid Kenyan phone number (e.g., 0712345678 or 254712345678)";
    } else {
        // Ensure phone is in 254 format for API (12 digits)
        if (strlen($phoneNumber) === 10) {
            $phoneNumber = '254' . $phoneNumber;
        }
        
        $accountReference = 'GOLDEN-FIXED-' . date('Ymd-His');
        $description = 'Payment for Golden Fixed Tips - Ksh ' . $AMOUNT;
        
        $result = initiateSTKPush(
            $phoneNumber,
            $AMOUNT,
            $accountReference,
            $description,
            $CALLBACK_URL,
            [
                'consumer_key' => $CONSUMER_KEY,
                'consumer_secret' => $CONSUMER_SECRET,
                'passkey' => $PASSKEY,
                'business_short_code' => $BUSINESS_SHORT_CODE,
                'environment' => $ENVIRONMENT,
                'api_urls' => $API_URLS
            ]
        );
        
        if ($result['success']) {
            $success = $result['message'];
            $checkoutId = $result['checkoutRequestId'] ?? null;
        } else {
            $error = $result['message'];
        }
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MPESA Payment - Golden Fixed Tips</title>
    <link rel="icon" href="data:image/svg+xml,<svg xmlns=%22http://www.w3.org/2000/svg%22 viewBox=%220 0 100 100%22><text y=%22.9em%22 font-size=%2290%22>⚽</text></svg>">
    <style>
        :root {
            --primary: #10b981;
            --primary-dark: #059669;
            --bg: #f8fbff;
            --text: #0f172a;
            --text-soft: #475569;
            --border: #e2e8f0;
            --error: #ef4444;
            --error-bg: #fef2f2;
            --success: #166534;
            --success-bg: #f0fdf5;
        }
        
        * { box-sizing: border-box; margin: 0; padding: 0; }
        
        body {
            font-family: "Segoe UI", Roboto, Arial, sans-serif;
            background: linear-gradient(180deg, var(--bg) 0%, #f3f6ff 100%);
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 2rem;
            color: var(--text);
        }
        
        .container {
            width: min(500px, 92%);
            background: white;
            border-radius: 24px;
            box-shadow: 0 20px 60px rgba(6, 10, 26, 0.12);
            padding: 3rem 2.5rem;
            border: 1px solid rgba(15, 23, 42, 0.06);
            position: relative;
            overflow: hidden;
        }
        
        .container::before {
            content: '';
            position: absolute;
            top: -50%;
            left: -50%;
            width: 200%;
            height: 200%;
            background: radial-gradient(circle, rgba(16, 185, 129, 0.04) 0%, transparent 60%);
            pointer-events: none;
        }
        
        .logo { text-align: center; margin-bottom: 2rem; position: relative; z-index: 1; }
        .logo-text { font-size: 1.8rem; font-weight: 900; color: var(--text); letter-spacing: -0.5px; }
        .logo-text span:first-child { color: var(--primary); }
        
        .title {
            font-size: 1.75rem;
            font-weight: 900;
            text-align: center;
            margin-bottom: 0.5rem;
            color: var(--text);
            line-height: 1.2;
            position: relative;
            z-index: 1;
        }
        
        .subtitle {
            text-align: center;
            color: var(--text-soft);
            margin-bottom: 2.5rem;
            font-size: 1rem;
            line-height: 1.6;
            position: relative;
            z-index: 1;
        }
        
        .amount-box {
            background: linear-gradient(135deg, var(--primary) 0%, var(--primary-dark) 100%);
            color: white;
            text-align: center;
            padding: 1.75rem;
            border-radius: 16px;
            margin-bottom: 2rem;
            box-shadow: 0 10px 30px rgba(16, 185, 129, 0.3);
            position: relative;
            z-index: 1;
        }
        
        .amount-label {
            font-size: 0.85rem;
            opacity: 0.9;
            margin-bottom: 0.25rem;
            font-weight: 600;
            text-transform: uppercase;
            letter-spacing: 0.5px;
        }
        
        .amount-value {
            font-size: 3rem;
            font-weight: 900;
            line-height: 1;
            letter-spacing: -1px;
        }
        
        .amount-value span {
            font-size: 1.25rem;
            font-weight: 600;
            opacity: 0.8;
        }
        
        .paybill-box {
            background: #f8fafc;
            border: 1px solid var(--border);
            border-radius: 12px;
            padding: 1.25rem;
            margin-bottom: 2rem;
            display: flex;
            justify-content: space-between;
            align-items: center;
            position: relative;
            z-index: 1;
        }
        
        .paybill-label {
            font-size: 0.9rem;
            color: var(--text-soft);
            font-weight: 600;
        }
        
        .paybill-number {
            font-family: 'Courier New', monospace;
            font-size: 1.4rem;
            font-weight: 900;
            color: var(--text);
            background: white;
            padding: 0.5rem 1rem;
            border-radius: 10px;
            border: 2px solid var(--border);
            letter-spacing: 0.5px;
        }
        
        .form-group { margin-bottom: 1.75rem; position: relative; z-index: 1; }
        
        .form-label {
            display: block;
            font-size: 0.9rem;
            font-weight: 700;
            color: var(--text);
            margin-bottom: 0.5rem;
        }
        
        .form-input {
            width: 100%;
            padding: 1rem 1.25rem;
            font-size: 1.1rem;
            border: 2px solid var(--border);
            border-radius: 12px;
            transition: all 0.25s ease;
            font-family: 'Courier New', monospace;
            font-weight: 600;
            background: white;
        }
        
        .form-input:focus {
            outline: none;
            border-color: var(--primary);
            box-shadow: 0 0 0 4px rgba(16, 185, 129, 0.12);
            background: #f0fdf4;
        }
        
        .form-input::placeholder {
            color: #94a3b8;
            font-weight: 500;
            font-family: "Segoe UI", Roboto, Arial, sans-serif;
        }
        
        .hint {
            font-size: 0.8rem;
            color: var(--text-soft);
            margin-top: 0.6rem;
            display: flex;
            align-items: center;
            gap: 0.4rem;
            line-height: 1.4;
        }
        
        .hint svg {
            width: 16px;
            height: 16px;
            flex-shrink: 0;
            color: var(--primary);
        }
        
        .btn-pay {
            display: block;
            width: 100%;
            padding: 1.25rem 2rem;
            font-size: 1.1rem;
            font-weight: 900;
            text-align: center;
            text-decoration: none;
            background: linear-gradient(135deg, var(--primary) 0%, var(--primary-dark) 100%);
            color: white;
            border: none;
            border-radius: 12px;
            cursor: pointer;
            transition: all 0.3s ease;
            box-shadow: 0 12px 35px rgba(16, 185, 129, 0.35);
            position: relative;
            z-index: 1;
            letter-spacing: 0.3px;
        }
        
        .btn-pay:hover {
            transform: translateY(-3px);
            box-shadow: 0 18px 45px rgba(16, 185, 129, 0.45);
        }
        
        .btn-pay:active {
            transform: translateY(-1px);
        }
        
        .btn-pay:disabled {
            opacity: 0.7;
            cursor: not-allowed;
            transform: none;
            box-shadow: none;
        }
        
        .alert {
            padding: 1rem 1.25rem;
            border-radius: 10px;
            margin-bottom: 1.75rem;
            font-weight: 600;
            display: flex;
            align-items: center;
            gap: 0.75rem;
            position: relative;
            z-index: 1;
            border: 1px solid transparent;
        }
        
        .alert-success {
            background: linear-gradient(135deg, var(--success-bg) 0%, #dcfce7 100%);
            border-color: #22c55e;
            color: var(--success);
        }
        
        .alert-error {
            background: linear-gradient(135deg, var(--error-bg) 0%, #fee2e2 100%);
            border-color: var(--error);
            color: #991b1b;
        }
        
        .alert svg {
            width: 24px;
            height: 24px;
            flex-shrink: 0;
        }
        
        .info-text {
            font-size: 0.85rem;
            color: var(--text-soft);
            text-align: center;
            margin-top: 1.75rem;
            line-height: 1.6;
            position: relative;
            z-index: 1;
        }
        
        .info-text strong {
            color: var(--text);
        }
        
        .note-box {
            background: #fefce8;
            border: 1px solid #fde047;
            border-radius: 10px;
            padding: 0.9rem 1rem;
            margin-top: 1.5rem;
            font-size: 0.8rem;
            color: #a16207;
            position: relative;
            z-index: 1;
        }
        
        .note-box strong {
            display: block;
            margin-bottom: 0.35rem;
            font-size: 0.85rem;
        }
        
        @media (max-width: 480px) {
            body { padding: 1rem; }
            .container { padding: 2rem 1.5rem; }
            .title { font-size: 1.5rem; }
            .amount-value { font-size: 2.5rem; }
            .paybill-number { font-size: 1.2rem; }
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="logo">
            <div class="logo-text"><span>Realtime</span><span>Tips</span></div>
        </div>
        
        <h1 class="title">Complete Your Payment</h1>
        <p class="subtitle">You're about to unlock <strong>Golden Fixed Tips</strong> &mdash; 45+ odds guaranteed daily.</p>
        
        <?php if (isset($configError)): ?>
            <div class="alert alert-error">
                <svg viewBox="0 0 24 24" fill="currentColor"><path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm1 15h-2v-2h2v2zm0-4h-2V7h2v6z"/></svg>
                <span><?= htmlspecialchars($configError, ENT_QUOTES, 'UTF-8') ?></span>
            </div>
        <?php endif; ?>
        
        <?php if (isset($success)): ?>
            <div class="alert alert-success">
                <svg viewBox="0 0 24 24" fill="currentColor"><path d="M9 16.17L4.83 12l-1.42 1.41L9 19 21 7l-1.41-1.41L9 16.17z"/></svg>
                <span><?= htmlspecialchars($success, ENT_QUOTES, 'UTF-8') ?></span>
            </div>
        <?php endif; ?>
        
        <?php if (isset($error)): ?>
            <div class="alert alert-error">
                <svg viewBox="0 0 24 24" fill="currentColor"><path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm1 15h-2v-2h2v2zm0-4h-2V7h2v6z"/></svg>
                <span><?= htmlspecialchars($error, ENT_QUOTES, 'UTF-8') ?></span>
            </div>
        <?php endif; ?>
        
        <div class="amount-box">
            <div class="amount-label">Amount to Pay</div>
            <div class="amount-value">Ksh <?= $AMOUNT ?> <span>/ day</span></div>
        </div>
        
        <div class="paybill-box">
            <span class="paybill-label">Paybill (Till) Number</span>
            <span class="paybill-number"><?= $BUSINESS_SHORT_CODE ?></span>
        </div>
        
        <?php if (!isset($success) && !isset($configError)): ?>
        <form method="POST" action="" id="paymentForm">
            <div class="form-group">
                <label class="form-label" for="phone_number">Your MPESA Phone Number</label>
                <input 
                    type="tel" 
                    id="phone_number" 
                    name="phone_number" 
                    class="form-input" 
                    placeholder="0712345678 or 254712345678"
                    required
                    maxlength="12"
                    autocomplete="tel"
                >
                <p class="hint">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"></circle><line x1="12" y1="16" x2="12" y2="12"></line><line x1="12" y1="8" x2="12.01" y2="8"></line></svg>
                    Enter the phone number you'll use to authorize payment via MPESA PIN
                </p>
            </div>
            
            <button type="submit" class="btn-pay" id="payBtn">
                Pay Ksh <?= $AMOUNT ?> via MPESA
            </button>
        </form>
        <?php endif; ?>
        
        <p class="info-text">
            <strong>How it works:</strong> Enter your phone number above &rarr; Click the button &rarr; You'll receive an MPESA STK push on your phone &rarr; Enter your MPESA PIN to complete payment. Tips will be sent immediately via WhatsApp/SMS.
        </p>
        
        <div class="note-box">
            <strong>🔒 Secure Payment</strong>
            This transaction is secured by Safaricom MPESA. Your payment details are never stored on our servers.
        </div>
    </div>
    
    <script>
        const phoneInput = document.getElementById('phone_number');
        const form = document.getElementById('paymentForm');
        const payBtn = document.getElementById('payBtn');
        
        if (phoneInput && form) {
            // Allow only numbers
            phoneInput.addEventListener('input', function(e) {
                let value = e.target.value.replace(/[^0-9]/g, '');
                if (value.length > 12) {
                    value = value.slice(0, 12);
                }
                e.target.value = value;
            });
            
            // Form submission
            form.addEventListener('submit', function(e) {
                const phone = phoneInput.value;
                if (phone.length < 10) {
                    e.preventDefault();
                    alert('Please enter a valid phone number');
                    phoneInput.focus();
                    return false;
                }
                payBtn.disabled = true;
                payBtn.textContent = 'Processing...';
            });
            
            // Auto-prepend 254 if local format entered on blur
            phoneInput.addEventListener('blur', function() {
                let value = this.value;
                if (value.length === 10 && (value.startsWith('07') || value.startsWith('01'))) {
                    this.value = '254' + value;
                }
            });
            
            // Re-enable button on input change
            phoneInput.addEventListener('input', function() {
                if (payBtn.disabled) {
                    payBtn.disabled = false;
                    payBtn.textContent = 'Pay Ksh <?= $AMOUNT ?> via MPESA';
                }
            });
        }
    </script>
</body>
</html>
