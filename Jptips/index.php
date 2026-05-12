<?php
declare(strict_types=1);

$whatsappLink = 'https://wa.me/25471380429?text=Hello%20Realtime%20Tips%2C%20I%20want%20premium%20football%20sure%20tips.';
$telegramLink = 'https://t.me/25471380429';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Expert jackpot tips for SportPesa Mega, Midweek, and Betika jackpots. Maximize your bonus potential with our proven strategies.">
    <title>Jackpot Tips | Realtime Tips</title>
    <link rel="icon" href="../data:image/svg+xml,<svg xmlns=%22http://www.w3.org/2000/svg%22 viewBox=%220 0 100 100%22><text y=%22.9em%22 font-size=%2290%22>⚽</text></svg>">
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
            --radius-lg: 22px;
            --shadow-soft: 0 20px 40px rgba(6, 10, 26, 0.16);
            --sportpesa-red: #dc2626;
            --betika-green: #10b981;
        }

        * {
            box-sizing: border-box;
        }

        html {
            margin: 0;
            padding: 0;
            max-width: 100vw;
            overflow-x: hidden;
            height: 100%;
            background: var(--bg-light);
        }

        body {
            margin: 0;
            padding: 0;
            font-family: "Segoe UI", Roboto, Arial, sans-serif;
            color: var(--text-main);
            line-height: 1.5;
            background: var(--bg-light);
            padding-bottom: 120px;
            min-width: 320px;
            height: 100%;
        }

        .container {
            width: min(1120px, 92%);
            margin: 0 auto;
        }

        .nav-wrap {
            background: var(--bg-dark);
            position: sticky;
            top: 0;
            z-index: 100;
            border-bottom: 1px solid rgba(255,255,255,0.1);
        }

        .nav-container {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 0.75rem 0;
        }

        .nav-logo {
            display: flex;
            align-items: center;
            text-decoration: none;
        }

        .nav-logo-text {
            font-size: 1.4rem;
            font-weight: 900;
            letter-spacing: -0.5px;
        }

        .nav-logo-text span:first-child {
            color: var(--accent);
        }

        .nav-logo-text span:last-child {
            color: var(--white);
        }

        .nav-menu {
            display: flex;
            align-items: center;
            gap: 1.5rem;
        }

        .nav-link {
            color: rgba(255,255,255,0.85);
            text-decoration: none;
            font-weight: 600;
            font-size: 0.95rem;
            padding: 0.4rem 0;
            transition: color 0.2s;
        }

        .nav-link:hover {
            color: var(--white);
        }

        .nav-dropdown {
            position: relative;
        }

        .nav-dropdown-toggle {
            color: rgba(255,255,255,0.85);
            font-weight: 600;
            font-size: 0.95rem;
            padding: 0.4rem 0;
            cursor: pointer;
            display: flex;
            align-items: center;
            gap: 0.35rem;
            transition: color 0.2s;
        }

        .nav-dropdown-toggle:hover {
            color: var(--white);
        }

        .nav-dropdown-menu {
            display: none;
            position: absolute;
            top: 100%;
            left: 0;
            background: var(--card);
            border-radius: 10px;
            box-shadow: 0 10px 30px rgba(0,0,0,0.2);
            min-width: 180px;
            padding: 0.5rem 0;
            margin-top: 0.5rem;
        }

        .nav-dropdown:hover .nav-dropdown-menu {
            display: block;
        }

        .nav-dropdown-menu a {
            display: block;
            padding: 0.6rem 1rem;
            color: var(--text-main);
            text-decoration: none;
            font-size: 0.9rem;
            font-weight: 500;
            transition: background 0.2s;
        }

        .nav-dropdown-menu a:hover {
            background: var(--bg-light);
            color: var(--primary);
        }

        .nav-cta {
            background: var(--accent);
            color: #06251b;
            padding: 0.5rem 1rem;
            border-radius: 8px;
            text-decoration: none;
            font-weight: 800;
            font-size: 0.9rem;
            transition: transform 0.2s, filter 0.2s;
        }

        .nav-cta:hover {
            transform: translateY(-1px);
            filter: brightness(1.05);
        }

        .section {
            padding: 3rem 0;
            background: transparent;
        }

        .section h3 {
            margin: 0 0 0.8rem;
            font-size: clamp(1.45rem, 2.5vw, 2rem);
        }

        .section p {
            margin: 0 0 1.5rem;
            color: var(--text-soft);
            max-width: 70ch;
        }

        .jackpot-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(350px, 1fr));
            gap: 2rem;
            margin-top: 2rem;
        }

        .jackpot-card {
            background: var(--card);
            border-radius: var(--radius-lg);
            padding: 2rem;
            box-shadow: var(--shadow-soft);
            transition: transform 0.3s cubic-bezier(0.4, 0, 0.2, 1);
            position: relative;
            overflow: hidden;
        }

        .jackpot-card:hover {
            transform: translateY(-4px);
        }

        .jackpot-card--sportpesa {
            border: 2px solid var(--sportpesa-red);
            background: linear-gradient(135deg, rgba(220, 38, 38, 0.05), rgba(255, 255, 255, 1));
        }

        .jackpot-card--betika {
            border: 2px solid var(--betika-green);
            background: linear-gradient(135deg, rgba(16, 185, 129, 0.05), rgba(255, 255, 255, 1));
        }

        .jackpot-badge {
            position: absolute;
            top: -10px;
            right: -10px;
            background: linear-gradient(135deg, var(--sportpesa-red), #ef4444);
            color: white;
            font-weight: 900;
            font-size: 0.75rem;
            padding: 0.5rem 1rem;
            border-radius: 999px;
            text-transform: uppercase;
            letter-spacing: 1px;
            box-shadow: 0 4px 15px rgba(220, 38, 38, 0.3);
        }

        .jackpot-card--betika .jackpot-badge {
            background: linear-gradient(135deg, var(--betika-green), #34d399);
            box-shadow: 0 4px 15px rgba(16, 185, 129, 0.3);
        }

        .jackpot-header {
            text-align: center;
            margin-bottom: 1.5rem;
        }

        .jackpot-title {
            font-size: 1.5rem;
            font-weight: 900;
            margin: 0 0 0.5rem;
            color: var(--sportpesa-red);
        }

        .jackpot-card--betika .jackpot-title {
            color: var(--betika-green);
        }

        .jackpot-subtitle {
            font-size: 1rem;
            color: var(--text-soft);
            margin: 0;
        }

        .jackpot-price {
            text-align: center;
            margin-bottom: 1.5rem;
            padding: 1rem;
            background: rgba(220, 38, 38, 0.1);
            border-radius: 12px;
            border: 1px solid rgba(220, 38, 38, 0.2);
        }

        .jackpot-card--betika .jackpot-price {
            background: rgba(16, 185, 129, 0.1);
            border: 1px solid rgba(16, 185, 129, 0.2);
        }

        .price-amount {
            font-size: 2rem;
            font-weight: 900;
            color: var(--sportpesa-red);
            margin: 0;
        }

        .jackpot-card--betika .price-amount {
            color: var(--betika-green);
        }

        .price-label {
            font-size: 0.9rem;
            color: var(--text-soft);
            margin: 0;
        }

        .jackpot-features {
            list-style: none;
            padding: 0;
            margin: 0 0 2rem;
            display: grid;
            gap: 0.75rem;
        }

        .jackpot-features li {
            display: flex;
            align-items: flex-start;
            gap: 0.6rem;
            font-size: 0.9rem;
            color: var(--text-main);
            line-height: 1.4;
        }

        .jackpot-features li::before {
            content: '✓';
            color: var(--sportpesa-red);
            font-weight: 900;
            font-size: 0.85rem;
            flex-shrink: 0;
            margin-top: 1px;
        }

        .jackpot-card--betika .jackpot-features li::before {
            color: var(--betika-green);
        }

        .assurance-message {
            background: linear-gradient(135deg, rgba(220, 38, 38, 0.1), rgba(220, 38, 38, 0.05));
            border: 1px solid rgba(220, 38, 38, 0.2);
            border-radius: 12px;
            padding: 1.5rem;
            margin-bottom: 1.5rem;
            text-align: center;
        }

        .jackpot-card--betika .assurance-message {
            background: linear-gradient(135deg, rgba(16, 185, 129, 0.1), rgba(16, 185, 129, 0.05));
            border: 1px solid rgba(16, 185, 129, 0.2);
        }

        .assurance-message h4 {
            margin: 0 0 0.5rem;
            color: var(--sportpesa-red);
            font-size: 1.1rem;
            font-weight: 800;
        }

        .jackpot-card--betika .assurance-message h4 {
            color: var(--betika-green);
        }

        .assurance-message p {
            margin: 0;
            font-size: 0.9rem;
            color: var(--text-main);
            line-height: 1.5;
        }

        .btn {
            display: block;
            width: 100%;
            text-align: center;
            padding: 1rem;
            background: linear-gradient(135deg, var(--sportpesa-red), #ef4444);
            color: white;
            text-decoration: none;
            border-radius: 12px;
            font-weight: 900;
            font-size: 1rem;
            transition: transform 0.2s, box-shadow 0.2s;
            border: none;
            cursor: pointer;
        }

        .jackpot-card--betika .btn {
            background: linear-gradient(135deg, var(--betika-green), #34d399);
        }

        .btn:hover {
            transform: translateY(-2px);
            box-shadow: 0 8px 25px rgba(220, 38, 38, 0.3);
        }

        .jackpot-card--betika .btn:hover {
            box-shadow: 0 8px 25px rgba(16, 185, 129, 0.3);
        }

        .bonus-highlight {
            background: linear-gradient(135deg, #fef3c7, #fde68a);
            border: 1px solid #f59e0b;
            border-radius: 12px;
            padding: 1.5rem;
            margin-top: 2rem;
            text-align: center;
        }

        .bonus-highlight h4 {
            margin: 0 0 0.5rem;
            color: #92400e;
            font-size: 1.2rem;
            font-weight: 800;
        }

        .bonus-highlight p {
            margin: 0;
            color: #78350f;
            font-weight: 600;
        }

        .footer {
            background: linear-gradient(180deg, var(--bg-dark) 0%, #050d1f 100%);
            color: var(--white);
            padding: 3.5rem 0 2rem;
            margin-top: 4rem;
        }

        @media (max-width: 800px) {
            .nav-menu {
                display: none;
            }
        }

        @media (max-width: 700px) {
            .jackpot-grid {
                grid-template-columns: 1fr;
            }
        }

        /* ── Payment Modal ── */
        .modal-overlay {
            display: none;
            position: fixed;
            inset: 0;
            background: rgba(6, 10, 26, 0.75);
            z-index: 9000;
            align-items: center;
            justify-content: center;
            padding: 1rem;
            backdrop-filter: blur(4px);
        }

        .modal-content {
            background: #fff;
            border-radius: 20px;
            padding: 2rem;
            width: min(560px, 100%);
            position: relative;
            box-shadow: 0 30px 80px rgba(6,10,26,0.3);
            animation: modalIn 0.3s cubic-bezier(0.34,1.56,0.64,1);
        }

        @keyframes modalIn {
            from { opacity: 0; transform: scale(0.88) translateY(20px); }
            to   { opacity: 1; transform: scale(1) translateY(0); }
        }

        .modal-close {
            position: absolute;
            top: 1rem;
            right: 1rem;
            background: #f1f5f9;
            border: none;
            border-radius: 50%;
            width: 36px;
            height: 36px;
            display: flex;
            align-items: center;
            justify-content: center;
            cursor: pointer;
            transition: background 0.2s;
        }

        .modal-close:hover { background: #e2e8f0; }

        .modal-header { margin-bottom: 1.5rem; }
        .modal-header h2 { margin: 0 0 0.3rem; font-size: 1.4rem; font-weight: 900; color: #0f172a; }
        .modal-header p  { margin: 0; color: #64748b; font-size: 0.9rem; }

        .modal-body-grid {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 1.5rem;
        }

        @media (max-width: 520px) {
            .modal-body-grid { grid-template-columns: 1fr; }
        }

        .payment-info-box {
            background: #f8fafc;
            border: 1px solid #e2e8f0;
            border-radius: 14px;
            padding: 1.2rem;
            margin-bottom: 1rem;
        }

        .info-label {
            font-size: 0.75rem;
            font-weight: 700;
            text-transform: uppercase;
            letter-spacing: 0.8px;
            color: #94a3b8;
            display: block;
            margin-bottom: 0.3rem;
        }

        .till-number-container {
            display: flex;
            align-items: center;
            gap: 0.5rem;
            margin-bottom: 1rem;
        }

        .till-number {
            font-size: 1.8rem;
            font-weight: 900;
            color: #0f172a;
            letter-spacing: 2px;
        }

        .copy-btn {
            background: #f1f5f9;
            border: none;
            border-radius: 8px;
            padding: 0.4rem;
            cursor: pointer;
            display: flex;
            align-items: center;
            transition: background 0.2s;
        }

        .copy-btn:hover { background: #e2e8f0; }

        .till-name {
            font-weight: 700;
            color: #0f172a;
            margin-bottom: 1rem;
            font-size: 1rem;
        }

        .payment-amount {
            font-size: 1.6rem;
            font-weight: 900;
            color: #10b981;
        }

        .mpesa-instructions {
            background: linear-gradient(135deg, #f0fdf4, #dcfce7);
            border: 1px solid #bbf7d0;
            border-radius: 12px;
            padding: 1rem 1.2rem;
        }

        .mpesa-instructions h4 {
            margin: 0 0 0.6rem;
            font-size: 0.9rem;
            font-weight: 800;
            color: #065f46;
        }

        .mpesa-instructions ol {
            margin: 0;
            padding-left: 1.2rem;
        }

        .mpesa-instructions li {
            font-size: 0.85rem;
            color: #064e3b;
            margin-bottom: 0.4rem;
            line-height: 1.4;
        }

        .confirmation-field label {
            display: block;
            font-size: 0.85rem;
            font-weight: 700;
            color: #475569;
            margin-bottom: 0.5rem;
        }

        .confirmation-field textarea {
            width: 100%;
            border: 1.5px solid #e2e8f0;
            border-radius: 10px;
            padding: 0.8rem;
            font-size: 0.9rem;
            font-family: inherit;
            resize: vertical;
            min-height: 100px;
            transition: border-color 0.2s;
            box-sizing: border-box;
        }

        .confirmation-field textarea:focus {
            outline: none;
            border-color: #10b981;
        }

        .verify-btn {
            width: 100%;
            margin-top: 1rem;
            padding: 0.9rem;
            background: linear-gradient(135deg, #10b981, #059669);
            color: white;
            border: none;
            border-radius: 12px;
            font-weight: 900;
            font-size: 1rem;
            cursor: pointer;
            transition: transform 0.2s, box-shadow 0.2s;
        }

        .verify-btn:hover {
            transform: translateY(-2px);
            box-shadow: 0 8px 25px rgba(16,185,129,0.35);
        }
    </style>
</head>
<body>
    <nav class="nav-wrap">
        <div class="container nav-container">
            <a href="index.html" class="nav-logo">
                <span class="nav-logo-text">
                    <span>RT</span><span>Tips</span>
                </span>
            </a>
            <div class="nav-menu">
                <a href="index.html" class="nav-link">Home</a>
                <a href="../testimonial/index.php" class="nav-link">Testimonials</a>
                <div class="nav-dropdown">
                    <span class="nav-dropdown-toggle">Tips <span>▼</span></span>
                    <div class="nav-dropdown-menu">
                        <a href="../Tips/goldentips.php">Golden Fixed Tips</a>
                        <a href="../Tips/2odds.php">2+ Odds Daily</a>
                        <a href="../Tips/2draws.php">2 Draw Games</a>
                        <a href="index.html">Jackpot Tips</a>
                    </div>
                </div>
                <a href="../international-payment.php" class="nav-link">International</a>
                <a href="../support/how-it-works.php" class="nav-link">Support</a>
            </div>
            <a href="<?= htmlspecialchars($whatsappLink, ENT_QUOTES, 'UTF-8') ?>" target="_blank" rel="noopener noreferrer" class="nav-cta">Get Tips Now</a>
        </div>
    </nav>

    <main>
        <section class="section">
            <div class="container">
                <h3>Jackpot Tips</h3>
                <p>Maximize your bonus potential with our expert jackpot predictions. We analyze thousands of games to deliver high-accuracy tips that can turn jackpots into massive wins.</p>

                <div class="jackpot-grid">
                    <div class="jackpot-card jackpot-card--sportpesa">
                        <div class="jackpot-badge">Popular</div>
                        <div class="jackpot-header">
                            <h4 class="jackpot-title">SportPesa 17 Games MEGA Jackpot</h4>
                            <p class="jackpot-subtitle">Premium weekend jackpot predictions</p>
                        </div>

                        <div class="jackpot-price">
                            <div class="price-amount">Ksh 500</div>
                            <div class="price-label">One-time payment</div>
                        </div>

                        <ul class="jackpot-features">
                            <li>We give the best analysis to the 17 sportPesa Selected Games</li>
                            <li>Expert analysis of form, statistics, and trends</li>
                            <li>Posted 24 hours before kickoff</li>
                            <li>86% historical accuracy rate</li>
                            <li>Bonus maximization strategies included</li>
                        </ul>

                        <div class="assurance-message">
                            <h4>🎯 Bonus Guarantee Assurance</h4>
                            <p>Our proven SportPesa strategies have helped 847+ members win jackpots and maximize bonuses. With our expert analysis, you're not just playing - you're strategically positioned for success.</p>
                        </div>

                        <button class="btn buy-trigger" data-plan="MEGA Jackpot" data-amount="500">Get MEGA Jackpot Tips 🛒</button>
                    </div>

                    <div class="jackpot-card jackpot-card--sportpesa">
                        <div class="jackpot-header">
                            <h4 class="jackpot-title">SportPesa 13 Games Midweek Jackpot</h4>
                            <p class="jackpot-subtitle">Midweek jackpot specialist tips</p>
                        </div>

                        <div class="jackpot-price">
                            <div class="price-amount">Ksh 350</div>
                            <div class="price-label">One-time payment</div>
                        </div>

                        <ul class="jackpot-features">
                            <li>13 midweek games with high bonus potential</li>
                            <li>Midweek league specialist analysis</li>
                            <li>Early access before other tipsters</li>
                            <li>Form and head-to-head statistics</li>
                            <li>Bonus optimization techniques</li>
                        </ul>

                        <div class="assurance-message">
                            <h4>💰 Midweek Bonus Champion</h4>
                            <p>Join our community of winners who consistently hit midweek jackpots. Our systematic approach identifies bonus-rich opportunities that others miss, giving you the edge for guaranteed bonus payouts.</p>
                        </div>

                        <button class="btn buy-trigger" data-plan="Midweek Jackpot" data-amount="350">Get Midweek Jackpot Tips 🛒</button>
                    </div>

                    <div class="jackpot-card jackpot-card--betika">
                        <div class="jackpot-badge">Affordable</div>
                        <div class="jackpot-header">
                            <h4 class="jackpot-title">Betika Jackpot Tips</h4>
                            <p class="jackpot-subtitle">Budget-friendly jackpot predictions</p>
                        </div>

                        <div class="jackpot-price">
                            <div class="price-amount">Ksh 200</div>
                            <div class="price-label">One-time payment</div>
                        </div>

                        <ul class="jackpot-features">
                            <li>Complete jackpot combinations</li>
                            <li>Betika platform optimization</li>
                            <li>Real-time odds monitoring</li>
                            <li>Banker and bonus game selection</li>
                            <li>24/7 support during jackpot period</li>
                        </ul>

                        <div class="assurance-message">
                            <h4>🌟 Bonus Maximizer Guarantee</h4>
                            <p>Our Betika jackpot system is designed for bonus success. With 2,847+ satisfied customers and a 92% bonus win rate, our affordable tips deliver premium results without premium prices.</p>
                        </div>

                        <button class="btn buy-trigger" data-plan="Betika Jackpot" data-amount="200">Get Betika Jackpot Tips 🛒</button>
                    </div>
                </div>

                <div class="bonus-highlight">
                    <h4>🎉 Why Our Jackpot Tips Guarantee Bonuses</h4>
                    <p>Unlike random picks, our expert analysis identifies games with proven bonus potential. We study patterns, statistics, and bookmaker behaviors to maximize your bonus payouts. With our track record of 847 jackpot winners and 92% bonus success rate, you're investing in proven strategies that work.</p>
                </div>
            </div>
        </section>
    </main>

    <!-- Payment Modal -->
    <div id="paymentModal" class="modal-overlay">
        <div class="modal-content">
            <button class="modal-close" id="closeModal">
                <svg viewBox="0 0 24 24" width="20" height="20" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <line x1="18" y1="6" x2="6" y2="18"></line>
                    <line x1="6" y1="6" x2="18" y2="18"></line>
                </svg>
            </button>
            <div class="modal-header">
                <h2 id="modalTitle">Buy Plan</h2>
                <p id="modalSubtitle">Pay via M-Pesa Lipa na M-Pesa. Tips sent after payment.</p>
            </div>

            <div class="modal-body-grid">
                <div class="modal-left-col">
                    <div class="payment-info-box">
                        <span class="info-label">Pay to Till Number</span>
                        <div class="till-number-container">
                            <span class="till-number" id="tillNumber">5438677</span>
                            <button class="copy-btn" id="copyTill" title="Copy Till Number">
                                <svg viewBox="0 0 24 24" width="20" height="20" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    <rect x="9" y="9" width="13" height="13" rx="2" ry="2"></rect>
                                    <path d="M5 15H4a2 2 0 0 1-2-2V4a2 2 0 0 1 2-2h9a2 2 0 0 1 2 2v1"></path>
                                </svg>
                            </button>
                        </div>
                        <span class="info-label">Till Name</span>
                        <div class="till-name">Codesoft Technologies</div>
                        <span class="info-label">Amount</span>
                        <div class="payment-amount" id="modalAmount">KSH 0</div>
                    </div>

                    <div class="mpesa-instructions">
                        <h4>M-Pesa Payment — How to pay:</h4>
                        <ol>
                            <li>Go to M-Pesa &gt; Lipa na M-Pesa &gt; Buy Goods</li>
                            <li>Enter Till Number: <strong>5438677</strong></li>
                            <li>Enter Amount: <strong id="instructionAmount">KSH 0</strong></li>
                            <li>Complete payment &amp; send confirmation to +254739162763</li>
                        </ol>
                    </div>
                </div>

                <div class="modal-right-col">
                    <div class="confirmation-field">
                        <label>Paste M-Pesa Confirmation Message</label>
                        <textarea id="mpesaConfirmation" rows="5" placeholder="Paste your M-Pesa confirmation SMS here..."></textarea>
                    </div>
                    <button class="verify-btn" id="verifyBtn">Verify Payment ✓</button>
                </div>
            </div>
        </div>
    </div>

    <footer class="footer">
        <div class="container">
            <p style="text-align: center; color: rgba(255,255,255,0.7); margin: 0; padding: 2rem 0;">
                © 2024 Realtime Tips. All rights reserved.
            </p>
        </div>
    </footer>

    <script>
        const paymentModal = document.getElementById('paymentModal');
        const closeModalBtn = document.getElementById('closeModal');
        const modalTitle = document.getElementById('modalTitle');
        const modalAmount = document.getElementById('modalAmount');
        const instructionAmount = document.getElementById('instructionAmount');
        const copyTill = document.getElementById('copyTill');
        const verifyBtn = document.getElementById('verifyBtn');
        const buyButtons = document.querySelectorAll('.buy-trigger');

        function openModal(plan, amount) {
            modalTitle.textContent = 'Buy ' + plan + ' Plan';
            modalAmount.textContent = 'KSH ' + amount;
            instructionAmount.textContent = 'KSH ' + amount;
            paymentModal.style.display = 'flex';
            document.body.style.overflow = 'hidden';
        }

        function hideModal() {
            paymentModal.style.display = 'none';
            document.body.style.overflow = 'auto';
        }

        buyButtons.forEach(function(btn) {
            btn.addEventListener('click', function(e) {
                e.preventDefault();
                openModal(btn.getAttribute('data-plan'), btn.getAttribute('data-amount'));
            });
        });

        closeModalBtn.addEventListener('click', hideModal);
        window.addEventListener('click', function(e) {
            if (e.target === paymentModal) hideModal();
        });

        copyTill.addEventListener('click', function() {
            const tillNum = document.getElementById('tillNumber').textContent.trim();
            const originalSvg = copyTill.innerHTML;

            function showCheck() {
                copyTill.innerHTML = '<svg viewBox="0 0 24 24" width="20" height="20" fill="none" stroke="#10b981" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"></polyline></svg>';
                setTimeout(function() { copyTill.innerHTML = originalSvg; }, 2000);
            }

            function showToast(msg, success) {
                let toast = document.getElementById('jpCopyToast');
                if (!toast) {
                    toast = document.createElement('div');
                    toast.id = 'jpCopyToast';
                    toast.style.cssText = 'position:fixed;bottom:30px;left:50%;transform:translateX(-50%) translateY(20px);padding:12px 24px;border-radius:999px;font-weight:700;font-size:0.9rem;z-index:99999;opacity:0;transition:all 0.3s ease;pointer-events:none;white-space:nowrap;color:#fff;';
                    document.body.appendChild(toast);
                }
                toast.style.background = success ? '#10b981' : '#ef4444';
                toast.textContent = msg;
                toast.style.opacity = '1';
                toast.style.transform = 'translateX(-50%) translateY(0)';
                setTimeout(function() {
                    toast.style.opacity = '0';
                    toast.style.transform = 'translateX(-50%) translateY(20px)';
                }, 2500);
            }

            if (navigator.clipboard && navigator.clipboard.writeText) {
                navigator.clipboard.writeText(tillNum).then(function() {
                    showCheck();
                    showToast('Till Number Copied! ✔', true);
                }).catch(function() {
                    showToast('Copy failed. Till: ' + tillNum, false);
                });
            } else {
                const ta = document.createElement('textarea');
                ta.value = tillNum;
                ta.style.cssText = 'position:fixed;top:-9999px;left:-9999px;opacity:0;';
                document.body.appendChild(ta);
                ta.focus(); ta.select();
                try {
                    document.execCommand('copy');
                    showCheck();
                    showToast('Till Number Copied! ✔', true);
                } catch(err) {
                    showToast('Copy failed. Till: ' + tillNum, false);
                }
                document.body.removeChild(ta);
            }
        });

        verifyBtn.addEventListener('click', function() {
            const msg = document.getElementById('mpesaConfirmation').value.trim();
            if (!msg) {
                alert('Please paste your M-Pesa confirmation message first.');
                return;
            }
            const plan = modalTitle.textContent.replace('Buy ', '').replace(' Plan', '');
            const amount = modalAmount.textContent;
            const wa = 'https://wa.me/25471380429?text=' + encodeURIComponent(
                'Hello Realtime Tips, I have paid for ' + plan + ' (' + amount + ').\n\nM-Pesa Confirmation:\n' + msg
            );
            window.open(wa, '_blank');
        });
    </script>
</body>
</html>