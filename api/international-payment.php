<?php
$year = date('Y');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="International payment guide - How to send money from Uganda and Tanzania to Kenya Airtel. Step by step instructions.">
    <title>International Payment — Realtime Tips</title>
    <link rel="icon" href="data:image/svg+xml,<svg xmlns=%22http://www.w3.org/2000/svg%22 viewBox=%220 0 100 100%22><text y=%22.9em%22 font-size=%2290%22>⚽</text></svg>">
    <style>
        :root {
            --bg-dark: #0b122b;
            --bg-light: #f3f6ff;
            --card: #ffffff;
            --accent: #10b981;
            --primary: #2563eb;
            --border: rgba(15, 23, 42, 0.10);
            --text-main: #0f172a;
            --text-soft: #475569;
            --white: #ffffff;
            --gold: #f59e0b;
            --purple: #8b5cf6;
        }

        * {
            box-sizing: border-box;
        }

        body {
            margin: 0;
            font-family: "Segoe UI", Roboto, Arial, sans-serif;
            color: var(--text-main);
            line-height: 1.6;
            background: var(--bg-light);
            min-height: 100vh;
        }

        .container {
            width: min(1100px, 92%);
            margin: 0 auto;
            padding: 2rem 0;
        }

        .hero-wrap {
            background: linear-gradient(145deg, #0f1838 0%, var(--bg-dark) 62%);
            color: var(--white);
            padding: 3rem 0;
            text-align: center;
        }

        .hero-wrap h1 {
            font-size: clamp(2rem, 5vw, 2.8rem);
            margin: 0 0 0.75rem;
            line-height: 1.2;
        }

        .hero-wrap p {
            color: rgba(255, 255, 255, 0.85);
            font-size: 1.1rem;
            margin: 0;
        }

        .country-flow {
            display: flex;
            justify-content: center;
            align-items: center;
            gap: 1.5rem;
            margin: 2rem 0 1rem;
            flex-wrap: wrap;
        }

        .country-item {
            background: var(--card);
            border-radius: 16px;
            padding: 1rem 1.5rem;
            display: flex;
            align-items: center;
            gap: 0.75rem;
            box-shadow: 0 4px 15px rgba(0,0,0,0.1);
        }

        .country-item .flag {
            font-size: 2rem;
        }

        .country-item .name {
            font-weight: 700;
            color: var(--text-main);
        }

        .country-item .code {
            font-size: 0.75rem;
            color: var(--text-soft);
        }

        .country-arrow {
            font-size: 1.5rem;
            color: var(--accent);
        }

        .section-title {
            font-size: 1.5rem;
            text-align: center;
            margin: 2.5rem 0 1.5rem;
            color: var(--text-main);
        }

        .pricing-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 1.5rem;
            margin: 1.5rem 0;
        }

        .pricing-card {
            background: var(--card);
            border-radius: 20px;
            padding: 2rem;
            border: 2px solid var(--border);
            transition: all 0.3s ease;
            cursor: pointer;
        }

        .pricing-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 15px 40px rgba(0,0,0,0.12);
        }

        .pricing-card.active {
            border-color: var(--accent);
            background: linear-gradient(135deg, #ecfdf5 0%, #d1fae5 100%);
        }

        .pricing-card.uganda {
            border-color: #ffb700;
        }

        .pricing-card.uganda:hover {
            border-color: #cc9300;
            box-shadow: 0 15px 40px rgba(255, 183, 0, 0.2);
        }

        .pricing-card.tanzania {
            border-color: #1eb53a;
        }

        .pricing-card.tanzania:hover {
            border-color: #16902e;
            box-shadow: 0 15px 40px rgba(30, 181, 58, 0.2);
        }

        .card-header {
            display: flex;
            align-items: center;
            justify-content: space-between;
            margin-bottom: 1rem;
        }

        .card-header h3 {
            margin: 0;
            font-size: 1.25rem;
            display: flex;
            align-items: center;
            gap: 0.5rem;
        }

        .card-header .flag-icon {
            font-size: 1.5rem;
        }

        .price-tag {
            background: linear-gradient(135deg, var(--accent) 0%, #059669 100%);
            color: white;
            padding: 0.4rem 0.75rem;
            border-radius: 8px;
            font-weight: 800;
            font-size: 0.9rem;
        }

        .pricing-card.uganda .price-tag {
            background: linear-gradient(135deg, #ffb700 0%, #cc9300 100%);
        }

        .pricing-card.tanzania .price-tag {
            background: linear-gradient(135deg, #1eb53a 0%, #16902e 100%);
        }

        .price-equal {
            font-size: 0.85rem;
            color: var(--text-soft);
            margin: 0.5rem 0;
        }

        .step-list {
            list-style: none;
            padding: 0;
            margin: 1rem 0 0;
        }

        .step-item {
            display: flex;
            gap: 1rem;
            padding: 0.9rem;
            background: rgba(255,255,255,0.7);
            border-radius: 10px;
            margin-bottom: 0.6rem;
            border: 1px solid var(--border);
        }

        .step-number {
            width: 28px;
            height: 28px;
            background: linear-gradient(135deg, var(--accent) 0%, #059669 100%);
            color: white;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-weight: 900;
            flex-shrink: 0;
            font-size: 0.85rem;
        }

        .pricing-card.uganda .step-number {
            background: linear-gradient(135deg, #ffb700 0%, #cc9300 100%);
        }

        .pricing-card.tanzania .step-number {
            background: linear-gradient(135deg, #1eb53a 0%, #16902e 100%);
        }

        .step-content h4 {
            margin: 0;
            font-size: 0.95rem;
            color: var(--text-main);
        }

        .step-content p {
            margin: 0.2rem 0 0;
            font-size: 0.85rem;
            color: var(--text-soft);
        }

        .payment-detail {
            background: linear-gradient(135deg, #ecfdf5 0%, #d1fae5 100%);
            border: 2px solid var(--accent);
            border-radius: 20px;
            padding: 2rem;
            text-align: center;
            margin: 2rem 0;
        }

        .payment-detail h3 {
            margin: 0 0 1rem;
            font-size: 1.3rem;
            color: #065f46;
        }

        .till-number {
            display: inline-block;
            font-family: 'Courier New', monospace;
            font-size: 2rem;
            font-weight: 900;
            color: white;
            background: linear-gradient(135deg, var(--accent) 0%, #059669 100%);
            padding: 0.75rem 1.5rem;
            border-radius: 12px;
            margin: 0.5rem 0;
            box-shadow: 0 6px 20px rgba(16, 185, 129, 0.35);
            cursor: pointer;
            transition: all 0.2s ease;
        }

        .till-number:hover {
            transform: scale(1.05);
            box-shadow: 0 8px 25px rgba(16, 185, 129, 0.45);
        }

        .copy-hint {
            font-size: 0.8rem;
            color: #065f46;
            font-weight: 600;
            margin-top: 0.5rem;
        }

        .note-box {
            background: #fffbeb;
            border: 2px solid #fbbf24;
            border-radius: 16px;
            padding: 1.5rem;
            margin: 1.5rem 0;
        }

        .note-box h4 {
            margin: 0 0 0.5rem;
            font-size: 1.1rem;
            color: #92400e;
        }

        .note-box p {
            margin: 0;
            font-size: 0.9rem;
            color: #a16207;
        }

        .note-box strong {
            color: #78350f;
        }

        .back-btn {
            display: inline-flex;
            align-items: center;
            gap: 0.5rem;
            color: var(--primary);
            text-decoration: none;
            font-weight: 600;
            margin-bottom: 1.5rem;
        }

        .back-btn:hover {
            text-decoration: underline;
        }

        .toast {
            position: fixed;
            bottom: 120px;
            left: 50%;
            transform: translateX(-50%) translateY(20px);
            background: var(--accent);
            color: white;
            padding: 14px 28px;
            border-radius: 999px;
            font-weight: 700;
            box-shadow: 0 8px 30px rgba(16, 185, 129, 0.5);
            opacity: 0;
            visibility: hidden;
            transition: all 0.3s ease;
            z-index: 10000;
        }

        @media (max-width: 768px) {
            .country-flow {
                gap: 0.75rem;
            }

            .country-item {
                padding: 0.75rem 1rem;
            }

            .country-item .flag {
                font-size: 1.5rem;
            }

            .country-arrow {
                font-size: 1rem;
            }

            .pricing-grid {
                grid-template-columns: 1fr;
            }

            .pricing-card {
                padding: 1.5rem;
            }
        }
    </style>
</head>
<body>
    <div class="hero-wrap">
        <div class="container">
            <h1>How to Pay from Uganda & Tanzania</h1>
            <p>Step-by-step guide to send money to Kenya Airtel</p>

            <div class="country-flow">
                <div class="country-item">
                    <span class="flag">🇺🇬</span>
                    <div>
                        <div class="name">Uganda</div>
                        <div class="code">Airtel Money</div>
                    </div>
                </div>
                <span class="country-arrow">→</span>
                <div class="country-item">
                    <span class="flag">🇹🇿</span>
                    <div>
                        <div class="name">Tanzania</div>
                        <div class="code">Tigo Pesa</div>
                    </div>
                </div>
                <span class="country-arrow">→</span>
                <div class="country-item">
                    <span class="flag">🇰🇪</span>
                    <div>
                        <div class="name">Kenya</div>
                        <div class="code">Airtel Money</div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <main class="container">
        <a href="home.php" class="back-btn">&larr; Back to Home</a>

        <h2 class="section-title">Select Your Mobile Network</h2>

        <div class="pricing-grid">
            <div class="pricing-card uganda active" onclick="selectMethod('uganda')">
                <div class="card-header">
                    <h3><span class="flag-icon">🇺🇬</span> Uganda</h3>
                    <span class="price-tag">UGX 15,600</span>
                </div>
                <div class="price-equal">≈ Ksh 100 / $1 USD</div>
                <ol class="step-list">
                    <li class="step-item">
                        <span class="step-number">1</span>
                        <div class="step-content">
                            <h4>Dial *185#</h4>
                            <p>Open Airtel Money menu</p>
                        </div>
                    </li>
                    <li class="step-item">
                        <span class="step-number">2</span>
                        <div class="step-content">
                            <h4>Select "Send Money"</h4>
                            <p>Choose from menu</p>
                        </div>
                    </li>
                    <li class="step-item">
                        <span class="step-number">3</span>
                        <div class="step-content">
                            <h4>Enter Number</h4>
                            <p>254739162763</p>
                        </div>
                    </li>
                    <li class="step-item">
                        <span class="step-number">4</span>
                        <div class="step-content">
                            <h4>Enter Amount</h4>
                            <p>UGX 15,600</p>
                        </div>
                    </li>
                    <li class="step-item">
                        <span class="step-number">5</span>
                        <div class="step-content">
                            <h4>Enter PIN</h4>
                            <p>Confirm payment</p>
                        </div>
                    </li>
                </ol>
            </div>

            <div class="pricing-card tanzania" onclick="selectMethod('tanzania')">
                <div class="card-header">
                    <h3><span class="flag-icon">🇹🇿</span> Tanzania</h3>
                    <span class="price-tag">TZS 11,000</span>
                </div>
                <div class="price-equal">≈ Ksh 100 / $1 USD</div>
                <ol class="step-list">
                    <li class="step-item">
                        <span class="step-number">1</span>
                        <div class="step-content">
                            <h4>Dial *150*00#</h4>
                            <p>Open Tigo Pesa menu</p>
                        </div>
                    </li>
                    <li class="step-item">
                        <span class="step-number">2</span>
                        <div class="step-content">
                            <h4>Select "Send Money"</h4>
                            <p>Choose from menu</p>
                        </div>
                    </li>
                    <li class="step-item">
                        <span class="step-number">3</span>
                        <div class="step-content">
                            <h4>Enter Number</h4>
                            <p>254739162763</p>
                        </div>
                    </li>
                    <li class="step-item">
                        <span class="step-number">4</span>
                        <div class="step-content">
                            <h4>Enter Amount</h4>
                            <p>TZS 11,000</p>
                        </div>
                    </li>
                    <li class="step-item">
                        <span class="step-number">5</span>
                        <div class="step-content">
                            <h4>Enter PIN</h4>
                            <p>Confirm payment</p>
                        </div>
                    </li>
                </ol>
            </div>

            <div class="pricing-card" onclick="selectMethod('mtn')" style="border-color: #ff6b00;">
                <div class="card-header">
                    <h3><span class="flag-icon">🇺🇬</span> MTN Uganda</h3>
                    <span class="price-tag" style="background: linear-gradient(135deg, #ff6b00 0%, #cc5500 100%);">UGX 15,600</span>
                </div>
                <div class="price-equal">→ Safaricom Kenya MPESA</div>
                <ol class="step-list">
                    <li class="step-item">
                        <span class="step-number" style="background: linear-gradient(135deg, #ff6b00 0%, #cc5500 100%);">1</span>
                        <div class="step-content">
                            <h4>Dial *165#</h4>
                            <p>Open MTN Mobile Money menu</p>
                        </div>
                    </li>
                    <li class="step-item">
                        <span class="step-number" style="background: linear-gradient(135deg, #ff6b00 0%, #cc5500 100%);">2</span>
                        <div class="step-content">
                            <h4>Select "Send Money"</h4>
                            <p>Choose "International"</p>
                        </div>
                    </li>
                    <li class="step-item">
                        <span class="step-number" style="background: linear-gradient(135deg, #ff6b00 0%, #cc5500 100%);">3</span>
                        <div class="step-content">
                            <h4>Select Country</h4>
                            <p>Choose Kenya</p>
                        </div>
                    </li>
                    <li class="step-item">
                        <span class="step-number" style="background: linear-gradient(135deg, #ff6b00 0%, #cc5500 100%);">4</span>
                        <div class="step-content">
                            <h4>Enter MPESA Number</h4>
                            <p>254713804279</p>
                        </div>
                    </li>
                    <li class="step-item">
                        <span class="step-number" style="background: linear-gradient(135deg, #ff6b00 0%, #cc5500 100%);">5</span>
                        <div class="step-content">
                            <h4>Enter Amount & PIN</h4>
                            <p>UGX 15,600 + confirm</p>
                        </div>
                    </li>
                </ol>
            </div>
        </div>

        <div class="payment-detail">
            <h3>Send To These Numbers</h3>
            <p style="margin-bottom: 1rem; color: #065f46;"><strong>Airtel Money Kenya (for Airtel Uganda & Tigo Tanzania):</strong></p>
            <div class="till-number" id="payNumber" title="Click to copy" onclick="copyNumber()">254739162763</div>
            
            <p style="margin: 1.5rem 0 1rem; color: #065f46;"><strong>Safaricom MPESA Kenya (for MTN Uganda):</strong></p>
            <div class="till-number" id="mpesaNumber" title="Click to copy" onclick="copyMpesa()" style="background: linear-gradient(135deg, #ff6b00 0%, #cc5500 100%);">254713804279</div>
            <p class="copy-hint">Tap to copy</p>
        </div>

        <div class="note-box">
            <h4>📱 After Payment</h4>
            <p>Once payment is sent, share the confirmation via WhatsApp. We'll deliver your tips immediately after payment is confirmed.</p>
            <p style="margin-top: 0.75rem;"><strong>WhatsApp:</strong> +25471380429</p>
        </div>

        <div style="background: linear-gradient(135deg, #1e1b4b 0%, #0b122b 100%); border-radius: 20px; padding: 2rem; text-align: center; margin: 2rem 0;">
            <h3 style="color: white; margin: 0 0 0.75rem; font-size: 1.4rem;">🌍 Paying from Outside Africa?</h3>
            <p style="color: rgba(255,255,255,0.8); margin: 0 0 1.5rem; font-size: 1rem;">Use PayPal, Skrill, or Western Union — Fast & Secure</p>
            <a href="international-usd.php" style="display: inline-block; background: linear-gradient(135deg, #f59e0b 0%, #d97706 100%); color: white; padding: 1rem 2rem; border-radius: 12px; text-decoration: none; font-weight: 900; font-size: 1.1rem; box-shadow: 0 8px 25px rgba(245, 158, 11, 0.4);">Pay $8 via Intl Methods →</a>
            <p style="color: rgba(255,255,255,0.6); margin: 1rem 0 0; font-size: 0.85rem;">$8 USD/day for +45 Odds Golden Fixed Tips</p>
        </div>
    </main>

    <div class="toast" id="toast">Copied to clipboard! ✓</div>

    <footer class="footer" style="background: var(--bg-dark); color: white; padding: 2rem 0; margin-top: 3rem;">
        <div class="container" style="text-align: center;">
            <p style="margin: 0; font-size: 0.9rem; color: rgba(255,255,255,0.7);">&copy; <?= $year ?> Realtime Tips. All rights reserved.</p>
            <div style="margin-top: 0.75rem; display: flex; justify-content: center; gap: 1.5rem; flex-wrap: wrap;">
                <a href="home.php" style="color: rgba(255,255,255,0.7); text-decoration: none; font-size: 0.85rem;">Home</a>
                <a href="#" style="color: rgba(255,255,255,0.7); text-decoration: none; font-size: 0.85rem;">Terms</a>
                <a href="#" style="color: rgba(255,255,255,0.7); text-decoration: none; font-size: 0.85rem;">Privacy</a>
                <a href="#" style="color: rgba(255,255,255,0.7); text-decoration: none; font-size: 0.85rem;">Contact</a>
            </div>
        </div>
    </footer>

    <script>
        function copyNumber() {
            const number = document.getElementById('payNumber').textContent;
            
            if (navigator.clipboard && navigator.clipboard.writeText) {
                navigator.clipboard.writeText(number).then(() => {
                    showToast();
                }).catch(() => {
                    fallbackCopy(number);
                });
            } else {
                fallbackCopy(number);
            }
        }
        
        function copyMpesa() {
            const number = document.getElementById('mpesaNumber').textContent;
            
            if (navigator.clipboard && navigator.clipboard.writeText) {
                navigator.clipboard.writeText(number).then(() => {
                    showToast();
                }).catch(() => {
                    fallbackCopy(number);
                });
            } else {
                fallbackCopy(number);
            }
        }
        
        function fallbackCopy(text) {
            const textArea = document.createElement('textarea');
            textArea.value = text;
            textArea.style.position = 'fixed';
            textArea.style.left = '-9999px';
            textArea.style.top = '-9999px';
            document.body.appendChild(textArea);
            textArea.focus();
            textArea.select();
            try {
                document.execCommand('copy');
                showToast();
            } catch (err) {
                console.error('Copy failed:', err);
            }
            document.body.removeChild(textArea);
        }
        
        function showToast() {
            const toast = document.getElementById('toast');
            toast.style.opacity = '1';
            toast.style.visibility = 'visible';
            toast.style.transform = 'translateX(-50%) translateY(0)';
            setTimeout(() => {
                toast.style.opacity = '0';
                toast.style.transform = 'translateX(-50%) translateY(20px)';
                toast.style.visibility = 'hidden';
            }, 2000);
        }

        function selectMethod(country) {
            document.querySelectorAll('.pricing-card').forEach(card => {
                card.classList.remove('active');
            });
            event.currentTarget.classList.add('active');
        }
    </script>
</body>
</html>