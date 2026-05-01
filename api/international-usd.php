<?php
$year = date('Y');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="International payment via PayPal, Skrill & Western Union - $8 USD for Golden Fixed Tips.">
    <title>International Payment ($8) — Realtime Tips</title>
    <link rel="icon" href="data:image/svg+xml,<svg xmlns=%22http://www.w3.org/2000/svg%22 viewBox=%220 0 100 100%22><text y=%22.9em%22 font-size=%2290%22>⚽</text></svg>">
    <style>
        :root {
            --bg-dark: #0b122b;
            --bg-light: #f3f6ff;
            --card: #ffffff;
            --accent: #10b981;
            --primary: #2563eb;
            --purple: #8b5cf6;
            --gold: #f59e0b;
            --border: rgba(15, 23, 42, 0.10);
            --text-main: #0f172a;
            --text-soft: #475569;
            --white: #ffffff;
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
            background: linear-gradient(145deg, #1e1b4b 0%, var(--bg-dark) 62%);
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

        .price-badge {
            display: inline-block;
            background: linear-gradient(135deg, var(--gold) 0%, #d97706 100%);
            color: white;
            padding: 0.5rem 1rem;
            border-radius: 8px;
            font-weight: 900;
            font-size: 1.1rem;
            margin-top: 0.75rem;
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
            margin-top: 1.5rem;
        }

        .pricing-card {
            background: var(--card);
            border-radius: 20px;
            padding: 2rem;
            border: 2px solid var(--border);
            transition: all 0.3s ease;
            cursor: pointer;
            position: relative;
            overflow: hidden;
        }

        .pricing-card::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            height: 4px;
        }

        .pricing-card.paypal::before {
            background: linear-gradient(90deg, #003087 0%, #009cde 100%);
        }

        .pricing-card.skrill::before {
            background: linear-gradient(90deg, #60088a 0%, #60088a 100%);
        }

        .pricing-card.western::before {
            background: linear-gradient(90deg, #d40511 0%, #d40511 100%);
        }

        .pricing-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 15px 40px rgba(0,0,0,0.12);
        }

        .pricing-card.active {
            border-color: var(--accent);
            background: linear-gradient(135deg, #ecfdf5 0%, #d1fae5 100%);
        }

        .card-header {
            display: flex;
            align-items: center;
            justify-content: space-between;
            margin-bottom: 1rem;
        }

        .card-header h3 {
            margin: 0;
            font-size: 1.3rem;
            display: flex;
            align-items: center;
            gap: 0.5rem;
        }

        .card-icon {
            font-size: 2rem;
        }

        .card-label {
            font-size: 0.8rem;
            color: var(--text-soft);
            margin-bottom: 1rem;
        }

        .step-list {
            list-style: none;
            padding: 0;
            margin: 1rem 0 0;
        }

        .step-item {
            display: flex;
            gap: 1rem;
            padding: 0.75rem;
            background: rgba(255,255,255,0.8);
            border-radius: 10px;
            margin-bottom: 0.5rem;
            border: 1px solid var(--border);
        }

        .pricing-card.active .step-item {
            background: rgba(255,255,255,0.9);
        }

        .step-number {
            width: 26px;
            height: 26px;
            background: linear-gradient(135deg, var(--purple) 0%, #6d28d9 100%);
            color: white;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-weight: 900;
            flex-shrink: 0;
            font-size: 0.8rem;
        }

        .pricing-card.paypal .step-number {
            background: linear-gradient(135deg, #003087 0%, #009cde 100%);
        }

        .pricing-card.skrill .step-number {
            background: linear-gradient(135deg, #60088a 0%, #8b1fa8 100%);
        }

        .pricing-card.western .step-number {
            background: linear-gradient(135deg, #d40511 0%, #ff2b2b 100%);
        }

        .step-content h4 {
            margin: 0;
            font-size: 0.9rem;
            color: var(--text-main);
        }

        .step-content p {
            margin: 0.15rem 0 0;
            font-size: 0.8rem;
            color: var(--text-soft);
            font-family: 'Courier New', monospace;
            font-weight: 600;
        }

        .payment-detail {
            background: linear-gradient(135deg, #fef3c7 0%, #fde68a 100%);
            border: 2px solid var(--gold);
            border-radius: 20px;
            padding: 2rem;
            text-align: center;
            margin: 2rem 0;
        }

        .payment-detail h3 {
            margin: 0 0 1rem;
            font-size: 1.3rem;
            color: #92400e;
        }

        .till-number {
            display: inline-block;
            font-family: 'Courier New', monospace;
            font-size: clamp(0.9rem, 4vw, 1.75rem);
            font-weight: 900;
            color: white;
            background: linear-gradient(135deg, var(--gold) 0%, #d97706 100%);
            padding: 0.75rem 1rem;
            border-radius: 12px;
            margin: 0.5rem 0;
            box-shadow: 0 6px 20px rgba(245, 158, 11, 0.35);
            cursor: pointer;
            transition: all 0.2s ease;
            word-break: break-all;
            max-width: 100%;
            text-align: center;
        }

        .till-number:hover {
            transform: scale(1.05);
        }

        .copy-hint {
            font-size: 0.8rem;
            color: #92400e;
            font-weight: 600;
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

        .note-box {
            background: #fefce8;
            border: 2px solid #fbbf24;
            border-radius: 16px;
            padding: 1.5rem;
            margin: 1.5rem 0;
        }

        .note-box h4 {
            margin: 0 0 0.5rem;
            color: #92400e;
        }

        .note-box p {
            margin: 0;
            color: #a16207;
            font-size: 0.9rem;
        }

        .note-box strong {
            color: #78350f;
        }

        .toast {
            position: fixed;
            bottom: 120px;
            left: 50%;
            transform: translateX(-50%) translateY(20px);
            background: var(--gold);
            color: white;
            padding: 14px 28px;
            border-radius: 999px;
            font-weight: 700;
            box-shadow: 0 8px 30px rgba(245, 158, 11, 0.5);
            opacity: 0;
            visibility: hidden;
            transition: all 0.3s ease;
            z-index: 10000;
        }

        @media (max-width: 768px) {
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
            <h1>International Payment ($8)</h1>
            <p>+45 Odds Golden Fixed Tips</p>
            <div class="price-badge">$8 USD / Day</div>
        </div>
    </div>

    <main class="container">
        <a href="home.php" class="back-btn">&larr; Back to Home</a>

        <h2 class="section-title">Select Payment Method</h2>

        <div class="pricing-grid">
            <div class="pricing-card paypal active" onclick="selectMethod('paypal')">
                <div class="card-header">
                    <h3><span class="card-icon">🌍</span> PayPal</h3>
                </div>
                <div class="card-label">Send $8 USD</div>
                <ol class="step-list">
                    <li class="step-item">
                        <span class="step-number">1</span>
                        <div class="step-content">
                            <h4>Send Money</h4>
                            <p>Log in to PayPal</p>
                        </div>
                    </li>
                    <li class="step-item">
                        <span class="step-number">2</span>
                        <div class="step-content">
                            <h4>Enter Recipient</h4>
                            <p>bitkwach@gmail.com</p>
                        </div>
                    </li>
                    <li class="step-item">
                        <span class="step-number">3</span>
                        <div class="step-content">
                            <h4>Amount</h4>
                            <p>$8 USD</p>
                        </div>
                    </li>
                    <li class="step-item">
                        <span class="step-number">4</span>
                        <div class="step-content">
                            <h4>Select "Friends"</h4>
                            <p>Avoid fees</p>
                        </div>
                    </li>
                    <li class="step-item">
                        <span class="step-number">5</span>
                        <div class="step-content">
                            <h4>Complete Payment</h4>
                            <p>Send screenshot to <a href="https://wa.me/2547391662763" target="_blank" style="color: #10b981;">WhatsApp</a></p>
                        </div>
                    </li>
                </ol>
            </div>

            <div class="pricing-card skrill" onclick="selectMethod('skrill')">
                <div class="card-header">
                    <h3><span class="card-icon">💳</span> Skrill</h3>
                </div>
                <div class="card-label">Send $8 USD</div>
                <ol class="step-list">
                    <li class="step-item">
                        <span class="step-number">1</span>
                        <div class="step-content">
                            <h4>Log in</h4>
                            <p>skrill.com or app</p>
                        </div>
                    </li>
                    <li class="step-item">
                        <span class="step-number">2</span>
                        <div class="step-content">
                            <h4>Send to Email</h4>
                            <p>bitkwach@gmail.com</p>
                        </div>
                    </li>
                    <li class="step-item">
                        <span class="step-number">3</span>
                        <div class="step-content">
                            <h4>Amount</h4>
                            <p>$8 USD</p>
                        </div>
                    </li>
                    <li class="step-item">
                        <span class="step-number">4</span>
                        <div class="step-content">
                            <h4>Review</h4>
                            <p>Confirm details</p>
                        </div>
                    </li>
                    <li class="step-item">
                        <span class="step-number">5</span>
                        <div class="step-content">
                            <h4>Complete</h4>
                            <p>Share to <a href="https://wa.me/2547391662763" target="_blank" style="color: #10b981;">WhatsApp</a></p>
                        </div>
                    </li>
                </ol>
            </div>

            <div class="pricing-card western" onclick="selectMethod('western')">
                <div class="card-header">
                    <h3><span class="card-icon">🏦</span> Western Union</h3>
                </div>
                <div class="card-label">Send $8 USD</div>
                <ol class="step-list">
                    <li class="step-item">
                        <span class="step-number">1</span>
                        <div class="step-content">
                            <h4>Visit Agent</h4>
                            <p>Find nearest location</p>
                        </div>
                    </li>
                    <li class="step-item">
                        <span class="step-number">2</span>
                        <div class="step-content">
                            <h4>Fill Form</h4>
                            <p>Provide valid ID</p>
                        </div>
                    </li>
                    <li class="step-item">
                        <span class="step-number">3</span>
                        <div class="step-content">
                            <h4>Receiver</h4>
                            <p>Realtime Tips / Kenya</p>
                        </div>
                    </li>
                    <li class="step-item">
                        <span class="step-number">4</span>
                        <div class="step-content">
                            <h4>Pay $8</h4>
                            <p>+ fees</p>
                        </div>
                    </li>
                    <li class="step-item">
                        <span class="step-number">5</span>
                        <div class="step-content">
                            <h4>Get MTCN</h4>
                            <p>Share to <a href="https://wa.me/2547391662763" target="_blank" style="color: #10b981;">WhatsApp</a></p>
                        </div>
                    </li>
                </ol>
            </div>
        </div>

        <div class="payment-detail">
            <h3>Payment Details</h3>
            <div class="till-number" id="payEmail" title="Click to copy" onclick="copyEmail()">bitkwach@gmail.com</div>
            <p class="copy-hint">Tap email to copy</p>
        </div>

        <div class="note-box">
            <h4>📱 After Payment</h4>
            <p>Once payment is made, share the confirmation via WhatsApp. We'll deliver your Golden Fixed Tips immediately after payment is confirmed.</p>
            <p style="margin-top: 0.75rem;"><strong>WhatsApp:</strong> <a href="https://wa.me/2547391662763" target="_blank" rel="noopener noreferrer" style="color: #10b981; font-weight: 700;">+2547391662763</a></p>
        </div>

        <div style="text-align: center; margin: 2rem 0;">
            <a href="https://wa.me/2547391662763" target="_blank" rel="noopener noreferrer" style="display: inline-flex; align-items: center; gap: 0.75rem; background: linear-gradient(135deg, #25d366 0%, #128c7e 100%); color: white; padding: 1rem 2rem; border-radius: 12px; text-decoration: none; font-weight: 900; font-size: 1.1rem; box-shadow: 0 8px 25px rgba(37, 211, 102, 0.4);">
                <svg viewBox="0 0 24 24" width="24" height="24" fill="currentColor"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893A11.821 11.821 0 0020.465 3.488z"/></svg>
                Chat on WhatsApp
            </a>
        </div>
    </main>

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

    <div class="toast" id="toast">Copied! ✓</div>

    <script>
        function copyEmail() {
            const email = document.getElementById('payEmail').textContent;
            if (navigator.clipboard && navigator.clipboard.writeText) {
                navigator.clipboard.writeText(email).then(() => showToast()).catch(() => fallbackCopy(email));
            } else {
                fallbackCopy(email);
            }
        }

        function fallbackCopy(text) {
            const ta = document.createElement('textarea');
            ta.value = text;
            ta.style.position = 'fixed';
            ta.style.left = '-9999px';
            document.body.appendChild(ta);
            ta.focus();
            ta.select();
            try { document.execCommand('copy'); showToast(); } catch(e) {}
            document.body.removeChild(ta);
        }

        function showToast() {
            const toast = document.getElementById('toast');
            toast.style.opacity = '1';
            toast.style.visibility = 'visible';
            setTimeout(() => { toast.style.opacity = '0'; toast.style.visibility = 'hidden'; }, 2000);
        }

        function selectMethod(method) {
            document.querySelectorAll('.pricing-card').forEach(c => c.classList.remove('active'));
            event.currentTarget.classList.add('active');
        }
    </script>
</body>
</html>