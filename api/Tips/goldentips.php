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
    <meta name="description" content="Get our Golden Fixed Tips package — 45+ odds guaranteed, daily picks, instant delivery via SMS/WhatsApp after payment. Multiple payment options available.">
    <title>Golden Fixed Tips — Realtime Tips</title>
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
            --radius-lg: 22px;
            --shadow-soft: 0 20px 40px rgba(6, 10, 26, 0.16);
        }

        * {
            box-sizing: border-box;
        }

        body {
            margin: 0;
            font-family: "Segoe UI", Roboto, Arial, sans-serif;
            color: var(--text-main);
            line-height: 1.5;
            background: linear-gradient(180deg, #f8fbff 0%, var(--bg-light) 100%);
            overflow-x: hidden;
        }

        .container {
            width: min(1120px, 92%);
            margin: 0 auto;
        }

        .hero-wrap {
            background:
                radial-gradient(circle at 15% 20%, rgba(37, 99, 235, 0.24), transparent 42%),
                radial-gradient(circle at 85% 0%, rgba(16, 185, 129, 0.18), transparent 35%),
                linear-gradient(145deg, #0f1838 0%, var(--bg-dark) 62%);
            color: var(--white);
            padding: 4rem 0 4.75rem;
        }

        .hero {
            display: grid;
            grid-template-columns: 1.15fr 0.85fr;
            gap: 2rem;
            align-items: center;
        }

        .hero-badge {
            display: inline-flex;
            align-items: center;
            background: rgba(255, 255, 255, 0.10);
            border: 1px solid rgba(255, 255, 255, 0.20);
            border-radius: 999px;
            padding: 0.38rem 0.95rem;
            font-size: 0.92rem;
            font-weight: 700;
            margin-bottom: 1rem;
        }

        .hero h1 {
            font-size: clamp(2rem, 5vw, 3.6rem);
            line-height: 1.08;
            margin: 0 0 1rem;
            max-width: 14ch;
        }

        .hero p {
            margin: 0;
            max-width: 58ch;
            color: rgba(255, 255, 255, 0.90);
            font-size: clamp(1rem, 1.7vw, 1.12rem);
        }

        .hero-card {
            background: rgba(255, 255, 255, 0.08);
            border: 1px solid rgba(255, 255, 255, 0.18);
            backdrop-filter: blur(4px);
            border-radius: var(--radius-lg);
            padding: 1.6rem;
            box-shadow: var(--shadow-soft);
        }

        .hero-card h2 {
            margin: 0 0 1rem;
            font-size: 1.1rem;
        }

        .hero-card ul {
            margin: 0;
            padding-left: 1.1rem;
            display: grid;
            gap: 0.75rem;
            color: rgba(255, 255, 255, 0.95);
        }

        .hero-card li::marker {
            color: var(--accent);
        }

        .trust-section {
            padding: 3rem 0;
        }

        .trust-box {
            background: linear-gradient(135deg, #f0fdf5 0%, #dcfce7 100%);
            border: 2px solid #22c55e;
            border-radius: 20px;
            padding: 2rem;
            text-align: center;
            margin-bottom: 2rem;
        }

        .trust-box h3 {
            margin: 0 0 0.5rem;
            font-size: 1.5rem;
            color: #166534;
        }

        .trust-box .price {
            font-size: 3.5rem;
            font-weight: 900;
            color: #15803d;
            margin: 0.5rem 0;
        }

        .trust-box .price span {
            font-size: 1rem;
            color: #166534;
            font-weight: 600;
        }

        .trust-box ul {
            list-style: none;
            padding: 0;
            margin: 1.5rem 0 0;
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 0.75rem;
            text-align: left;
        }

        .trust-box li {
            display: flex;
            align-items: center;
            gap: 0.5rem;
            font-size: 0.95rem;
            color: #166534;
            font-weight: 600;
        }

        .trust-box li::before {
            content: '✓';
            color: #16a34a;
            font-weight: 900;
            font-size: 1.1rem;
        }

        .cta-main {
            display: block;
            text-align: center;
            text-decoration: none;
            font-weight: 900;
            font-size: 1.1rem;
            padding: 1.2rem 2.5rem;
            border-radius: 999px;
            background: linear-gradient(135deg, #10b981 0%, #059669 100%);
            color: white;
            transition: all 0.3s ease;
            box-shadow: 0 10px 30px rgba(16, 185, 129, 0.4);
            margin-top: 1.5rem;
        }

        .cta-main:hover {
            transform: translateY(-3px);
            box-shadow: 0 15px 40px rgba(16, 185, 129, 0.5);
        }

        .social-proof {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            gap: 1rem;
            margin-top: 2.5rem;
            padding: 0;
        }

        .proof-item {
            flex: 1 1 120px;
            min-width: 100px;
            max-width: 160px;
            text-align: center;
            padding: 0.9rem 1rem;
            background: var(--card);
            border-radius: 10px;
            box-shadow: 0 2px 6px rgba(0,0,0,0.04);
        }

        .proof-number {
            display: block;
            font-size: 1.4rem;
            font-weight: 900;
            color: var(--accent);
            margin-bottom: 0.1rem;
            line-height: 1;
        }

        .proof-label {
            font-size: 0.7rem;
            color: var(--text-soft);
            text-transform: uppercase;
            letter-spacing: 0.5px;
            font-weight: 600;
            line-height: 1.2;
        }

        .features-section {
            padding: 3rem 0;
            background: var(--white);
        }

        .section-title {
            text-align: center;
            font-size: 2rem;
            margin: 0 0 2rem;
            color: var(--text-main);
        }

        .features-grid {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 1.5rem;
        }

        .feature-card {
            padding: 1.5rem;
            border-radius: 16px;
            background: linear-gradient(135deg, #f8fafc 0%, #f1f5f9 100%);
            border: 1px solid #e2e8f0;
        }

        .feature-card h4 {
            margin: 0 0 0.5rem;
            font-size: 1.1rem;
            color: var(--text-main);
        }

        .feature-card p {
            margin: 0;
            font-size: 0.95rem;
            color: var(--text-soft);
        }

        .faq-section {
            padding: 3rem 0;
        }

        .faq-item {
            background: var(--card);
            border-radius: 12px;
            margin-bottom: 1rem;
            padding: 1.25rem 1.5rem;
            border: 1px solid var(--border);
        }

        .faq-item h4 {
            margin: 0 0 0.5rem;
            font-size: 1rem;
            color: var(--text-main);
        }

        .faq-item p {
            margin: 0;
            font-size: 0.95rem;
            color: var(--text-soft);
        }

        .guarantee-banner {
            background: linear-gradient(135deg, #fefce8 0%, #fef9c3 100%);
            border: 2px solid #fbbf24;
            border-radius: 16px;
            padding: 1.5rem;
            text-align: center;
            margin: 2rem 0;
        }

        .guarantee-banner strong {
            color: #a16207;
            font-size: 1.2rem;
        }

        .inline-pay-till-copy {
            display: inline-block;
            font-family: 'Courier New', monospace;
            font-size: 1.1rem;
            font-weight: 900;
            color: white;
            background: linear-gradient(135deg, #f59e0b 0%, #f97316 50%, #d97706 100%);
            padding: 0.3rem 0.7rem;
            border-radius: 6px;
            letter-spacing: 0.5px;
            text-shadow: 0 1px 2px rgba(0, 0, 0, 0.2);
            box-shadow: 0 3px 10px rgba(245, 158, 11, 0.35);
            animation: pulse-gold 2s ease-in-out infinite;
            cursor: pointer;
            transition: all 0.2s ease;
            user-select: none;
            -webkit-tap-highlight-color: transparent;
        }

        .inline-pay-till-copy:hover {
            transform: scale(1.08);
            box-shadow: 0 5px 15px rgba(245, 158, 11, 0.5);
        }

        .inline-pay-till-copy:active {
            transform: scale(0.95);
        }

        @keyframes pulse-gold {
            0%, 100% { transform: scale(1); box-shadow: 0 3px 10px rgba(245, 158, 11, 0.35); }
            50% { transform: scale(1.05); box-shadow: 0 5px 15px rgba(245, 158, 11, 0.5); }
        }

        .inline-pay-till {
            display: inline-block;
            font-family: 'Courier New', monospace;
            font-size: 1.1rem;
            font-weight: 900;
            color: white;
            background: linear-gradient(135deg, #f59e0b 0%, #f97316 50%, #d97706 100%);
            padding: 0.35rem 0.8rem;
            border-radius: 8px;
            margin: 0 0.25rem;
            box-shadow: 0 4px 12px rgba(245, 158, 11, 0.35);
            letter-spacing: 0.5px;
            text-shadow: 0 1px 2px rgba(0, 0, 0, 0.2);
            animation: pulse-gold 2s ease-in-out infinite;
            cursor: pointer;
            transition: all 0.2s ease;
            user-select: none;
            -webkit-tap-highlight-color: transparent;
        }

        .inline-pay-till:hover {
            transform: scale(1.08);
            box-shadow: 0 6px 16px rgba(245, 158, 11, 0.5);
        }

        .inline-pay-till:active {
            transform: scale(0.95);
        }

        @keyframes pulse-gold {
            0%, 100% { transform: scale(1); box-shadow: 0 4px 12px rgba(245, 158, 11, 0.35); }
            50% { transform: scale(1.05); box-shadow: 0 6px 16px rgba(245, 158, 11, 0.5); }
        }

        .payment-section {
            padding: 3rem 0;
            background: var(--white);
        }

        .payment-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(230px, 1fr));
            gap: 1.25rem;
            margin-top: 2rem;
            max-width: 1050px;
            margin-left: auto;
            margin-right: auto;
        }

        .payment-card {
            background: linear-gradient(135deg, #f8fafc 0%, #ffffff 100%);
            border: 2px solid #e2e8f0;
            border-radius: 16px;
            padding: 1.75rem 1.5rem;
            text-align: center;
            transition: all 0.3s ease;
            min-height: 180px;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            -webkit-tap-highlight-color: transparent;
        }

        .payment-card.pay-till {
            background: linear-gradient(135deg, #fefce8 0%, #fef9c3 100%);
            border: 2.5px solid #f59e0b;
            transform: scale(1.01);
            box-shadow: 0 6px 16px rgba(245, 158, 11, 0.18);
        }

        .payment-card.pay-till:hover {
            transform: scale(1.03);
            border-color: #d97706;
            box-shadow: 0 10px 25px rgba(245, 158, 11, 0.3);
        }

        .payment-card.pay-till .payment-icon {
            font-size: 2.5rem;
            margin-bottom: 0.75rem;
        }

        .payment-card.pay-till h3 {
            color: #92400e;
            font-size: 1.15rem;
            font-weight: 900;
        }

        .payment-card .payment-number {
            display: none;
        }

        .payment-icon {
            font-size: 2.5rem;
            margin-bottom: 0.7rem;
        }

        .payment-card h3 {
            margin: 0 0 0.4rem;
            font-size: 1rem;
            font-weight: 800;
            color: var(--text-main);
        }

        .payment-label {
            margin: 0;
            font-size: 0.7rem;
            color: #92400e;
            font-weight: 600;
            opacity: 0.85;
            margin-top: 0.2rem;
        }

        .payment-highlight {
            display: block;
            font-family: 'Courier New', monospace;
            font-size: 1.15rem;
            font-weight: 900;
            color: white;
            background: linear-gradient(135deg, #16a34a 0%, #22c55e 50%, #15803d 100%);
            padding: 0.65rem 1rem;
            border-radius: 14px;
            margin: 0.45rem 0;
            box-shadow: 0 6px 20px rgba(34, 197, 94, 0.3);
            letter-spacing: 0.5px;
            text-shadow: 0 1px 3px rgba(0, 0, 0, 0.2);
            animation: glow-pulse 3s ease-in-out infinite;
            cursor: pointer;
            transition: all 0.2s ease;
            word-break: break-all;
            max-width: 100%;
            line-height: 1.35;
            overflow: hidden;
            -webkit-tap-highlight-color: transparent;
            touch-action: manipulation;
            user-select: none;
            position: relative;
        }

        .payment-highlight:active {
            transform: scale(0.96);
        }

        .payment-card:nth-child(1) .payment-highlight {
            animation: glow-pulse-green 3s ease-in-out infinite;
        }

        .payment-card:nth-child(2) .payment-highlight {
            background: linear-gradient(135deg, #0284c7 0%, #0ea5e9 50%, #0369a1 100%);
            box-shadow: 0 6px 20px rgba(14, 165, 233, 0.3);
            animation: glow-pulse-blue 3s ease-in-out infinite;
        }

        .payment-card:nth-child(3) .payment-highlight {
            background: linear-gradient(135deg, #7c3aed 0%, #8b5cf6 50%, #6d28d9 100%);
            box-shadow: 0 6px 20px rgba(139, 92, 246, 0.3);
            animation: glow-pulse-purple 3s ease-in-out infinite;
        }

        .payment-card:nth-child(4) .payment-highlight {
            background: linear-gradient(135deg, #ea580c 0%, #f97316 50%, #c2410c 100%);
            box-shadow: 0 6px 20px rgba(249, 115, 22, 0.3);
            animation: glow-pulse-orange 3s ease-in-out infinite;
        }

        @keyframes glow-pulse-green {
            0%, 100% { box-shadow: 0 6px 20px rgba(34, 197, 94, 0.3); }
            50% { box-shadow: 0 8px 30px rgba(34, 197, 94, 0.5); }
        }

        @keyframes glow-pulse-blue {
            0%, 100% { box-shadow: 0 6px 20px rgba(14, 165, 233, 0.3); }
            50% { box-shadow: 0 8px 30px rgba(14, 165, 233, 0.5); }
        }

        @keyframes glow-pulse-purple {
            0%, 100% { box-shadow: 0 6px 20px rgba(139, 92, 246, 0.3); }
            50% { box-shadow: 0 8px 30px rgba(139, 92, 246, 0.5); }
        }

        @keyframes glow-pulse-orange {
            0%, 100% { box-shadow: 0 6px 20px rgba(249, 115, 22, 0.3); }
            50% { box-shadow: 0 8px 30px rgba(249, 115, 22, 0.5); }
        }

        .payment-highlight:hover {
            transform: scale(1.05);
        }

        .payment-highlight:active {
            transform: scale(0.96);
        }

        .payment-highlight::selection {
            background: #22c55e;
            color: white;
        }

        .back-link {
            display: inline-block;
            margin-bottom: 1.5rem;
            color: var(--primary);
            text-decoration: none;
            font-weight: 600;
        }

        .back-link:hover {
            text-decoration: underline;
        }

        @media (max-width: 900px) {
            .social-proof {
                flex-wrap: wrap;
                gap: 1rem;
            }
            
            .proof-item {
                min-width: 120px;
                flex: 1 1 calc(50% - 1rem);
                padding: 0.9rem 1rem;
            }
            
            .proof-number {
                font-size: 1.35rem;
            }
        }

        @media (max-width: 600px) {
            .hero {
                grid-template-columns: 1fr;
            }

            .hero h1 {
                max-width: none;
            }

            .features-grid {
                grid-template-columns: 1fr;
            }

            .social-proof {
                flex-wrap: nowrap;
                overflow-x: auto;
                -webkit-overflow-scrolling: touch;
                justify-content: flex-start;
                gap: 0.75rem;
                padding: 0.5rem 0;
                margin-top: 2rem;
                scrollbar-width: thin;
                scrollbar-color: rgba(0,0,0,0.2) transparent;
            }

            .social-proof::-webkit-scrollbar {
                height: 4px;
            }

            .social-proof::-webkit-scrollbar-track {
                background: transparent;
            }

            .social-proof::-webkit-scrollbar-thumb {
                background: rgba(0,0,0,0.2);
                border-radius: 4px;
            }

            .proof-item {
                flex: 0 0 140px;
                min-width: 140px;
                padding: 0.75rem 0.5rem;
            }

            .proof-number {
                font-size: 1.25rem;
            }

            .proof-label {
                font-size: 0.65rem;
            }

            .payment-grid {
                grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
                gap: 1rem;
            }

            .payment-card {
                padding: 1.35rem 1.15rem;
            }

            .trust-box ul {
                grid-template-columns: 1fr;
            }
        }

        @media (max-width: 480px) {
            .social-proof {
                gap: 0.5rem;
                padding: 0.4rem 0;
            }

            .proof-item {
                flex: 0 0 120px;
                min-width: 120px;
                padding: 0.6rem 0.4rem;
            }

            .proof-number {
                font-size: 1.1rem;
            }

            .proof-label {
                font-size: 0.6rem;
            }

            .payment-grid {
                grid-template-columns: 1fr;
                gap: 0.9rem;
            }

            .payment-card {
                padding: 1.1rem 0.9rem;
            }

            .payment-card.pay-till {
                padding: 1.25rem 1rem;
                transform: none;
            }

            .payment-icon {
                font-size: 1.65rem;
                margin-bottom: 0.35rem;
            }

            .payment-card.pay-till .payment-icon {
                font-size: 1.85rem;
                margin-bottom: 0.45rem;
            }

            .payment-card h3 {
                font-size: 0.9rem;
                margin-bottom: 0.35rem;
            }

            .payment-card.pay-till h3 {
                font-size: 1rem;
                margin-bottom: 0.45rem;
            }

            .payment-card.pay-till:hover {
                transform: none;
            }

            .payment-highlight {
                font-size: 0.95rem;
                padding: 0.45rem 0.7rem;
                letter-spacing: 0.5px;
            }

            .inline-pay-till {
                font-size: 0.9rem;
                padding: 0.25rem 0.55rem;
            }

            .payment-label {
                font-size: 0.7rem;
            }

            .recommended-badge {
                font-size: 0.6rem;
                padding: 0.25rem 0.75rem;
                margin-bottom: 0.5rem;
            }

        }
    </style>
</head>
<body>
    <nav class="nav-wrap">
        <div class="container" style="display: flex; justify-content: space-between; align-items: center;">
            <a href="../index.php" class="nav-logo">
                <span style="font-size: 1.4rem; font-weight: 900; letter-spacing: -0.5px;">
                    <span style="color: #10b981;">Realtime</span><span style="color: white;">Tips</span>
                </span>
            </a>
            <div class="nav-menu">
                <a href="../index.php" class="nav-link" style="color: rgba(255,255,255,0.85); text-decoration: none; font-weight: 600;">Home</a>
            </div>
        </div>
    </nav>

    <header class="hero-wrap">
        <div class="container hero">
            <section>
                <span class="hero-badge">Premium Service</span>
                <h1>Golden Fixed Tips<br>45+ Odds Guaranteed</h1>
                <p style="color: rgba(255,255,255,0.85); font-size: 1.1rem; margin-top: 1rem; max-width: 55ch;">
                    Get expert high‑odds football predictions with guaranteed accuracy. Our best package for massive wins.
                </p>
            </section>
                <aside class="hero-card">
                    <h2>What You Get</h2>
                    <ul>
                        <li>Curated accumulator odds (45+) daily</li>
                        <li>Send via SMS or WhatsApp anytime after payment</li>
                        <li>24/7 service available</li>
                        <li>VIP WhatsApp support included</li>
                    </ul>
                </aside>
        </div>
    </header>

    <main>
        <div class="container">
            <a href="../index.php" class="back-link">&larr; Back to Home</a>

            <section class="trust-section">
                <div class="trust-box">
                    <span style="background: #f59e0b; color: white; padding: 0.3rem 1rem; border-radius: 999px; font-size: 0.75rem; font-weight: 900; text-transform: uppercase; letter-spacing: 1px; display: inline-block; margin-bottom: 0.5rem;">Most Popular</span>
                    <h3>Golden Fixed Tips</h3>
                    <div class="price">Ksh 525 <span>/ day</span></div>
                    <p style="color: #166534; margin: 0.5rem 0 0; font-size: 0.95rem;">High‑odds accumulator bets with proven track record</p>

                     <ul>
                         <li>45+ odds guaranteed on every pick</li>
                         <li>Daily guaranteed accumulator tips</li>
                         <li>Pay Till (Buy Goods): <span class="inline-pay-till-copy" style="cursor: pointer; font-family: 'Courier New', monospace; font-weight: 900; font-size: 1.1rem; color: white; background: linear-gradient(135deg, #f59e0b 0%, #f97316 50%, #d97706 100%); padding: 0.3rem 0.7rem; border-radius: 6px; letter-spacing: 0.5px; text-shadow: 0 1px 2px rgba(0,0,0,0.2); box-shadow: 0 3px 10px rgba(245, 158, 11, 0.35); transition: all 0.2s ease;" data-pay-till="5438677">5438677</span> <small style="color: #a16207; font-weight: 600; font-size: 0.75rem;">(Click to copy)</small></li>
                         <li>Dedicated VIP WhatsApp support</li>
                         <li>Detailed match analysis included</li>
                         <li>24/7 support available</li>
                     </ul>

                     <a class="cta-main" href="../M-PESAstkpush/stkpush.php" target="_blank" rel="noopener noreferrer">
                         Get Golden Fixed Tips Now
                     </a>
                </div>
            </section>

            <section class="payment-section">
                <h2 class="section-title">💳 Payment Methods</h2>
                <p style="text-align: center; color: var(--text-soft); margin-bottom: 2rem; max-width: 700px; margin-left: auto; margin-right: auto;">
                    Choose your preferred payment method. All transactions are secure and instant.
                </p>

                <div class="payment-grid">
                    <div class="payment-card pay-till">
                        <span class="recommended-badge">Recommended</span>
                        <div class="payment-icon">📱</div>
                        <h3>Pay Till (Buy Goods)</h3>
                        <div class="payment-highlight">5438677</div>
                        <p class="payment-label">📋 Click number to copy</p>
                    </div>

                    <div class="payment-card">
                        <div class="payment-icon">💬</div>
                        <h3>Airtel Money</h3>
                        <div class="payment-highlight">254739162763</div>
                        <p class="payment-label">📋 Click number to copy</p>
                    </div>

                    <div class="payment-card">
                        <div class="payment-icon">🌍</div>
                        <h3>PayPal</h3>
                        <div class="payment-highlight">bitkwach@gmail.com</div>
                        <p class="payment-label">📋 Click email to copy</p>
                    </div>

                    <div class="payment-card">
                        <div class="payment-icon">💳</div>
                        <h3>Skrill</h3>
                        <div class="payment-highlight">bitkwach@gmail.com</div>
                        <p class="payment-label">📋 Click email to copy</p>
                    </div>
                </div>
            </section>

            <section class="features-section">
                <h2 class="section-title">Why Choose Golden Fixed Tips?</h2>
                <div class="features-grid">
                    <div class="feature-card">
                        <h4>🎯 High‑Odds Accumulators</h4>
                        <p>Our tipsters combine 2–4 matches with 45+ odds for maximum returns on small stakes.</p>
                    </div>
                    <div class="feature-card">
                        <h4>⚡ Instant Delivery</h4>
                        <p>Tips sent via SMS or WhatsApp immediately after payment confirmation — anytime, anywhere.</p>
                    </div>
                    <div class="feature-card">
                        <h4>📊 Proven Accuracy</h4>
                        <p>Our Golden Fixed tips maintain an 89%+ win rate, verified and shared on our Telegram channel.</p>
                    </div>
                    <div class="feature-card">
                        <h4>💬 VIP Support</h4>
                        <p>Direct WhatsApp line to our support team for any questions or assistance.</p>
                    </div>
                    <div class="feature-card">
                        <h4>🔒 Money‑Back Guarantee</h4>
                        <p>If our tips don’t meet the promised odds or accuracy, we offer a full refund — no questions asked.</p>
                    </div>
                    <div class="feature-card">
                        <h4>📈 Consistent Wins</h4>
                        <p>Designed for serious bettors who want reliable, high‑value picks every week.</p>
                    </div>
                </div>
            </section>

            <section class="trust-section">
                <div class="social-proof">
                    <div class="proof-item">
                        <span class="proof-number">2,847+</span>
                        <span class="proof-label">Happy Members</span>
                    </div>
                    <div class="proof-item">
                        <span class="proof-number">12,456</span>
                        <span class="proof-label">Tips Won</span>
                    </div>
                    <div class="proof-item">
                        <span class="proof-number">89%</span>
                        <span class="proof-label">Accuracy Rate</span>
                    </div>
                    <div class="proof-item">
                        <span class="proof-number">24/7</span>
                        <span class="proof-label">Support</span>
                    </div>
                </div>
            </section>

            <section class="faq-section">
                <h2 class="section-title">Frequently Asked Questions</h2>
                <div class="faq-item">
                    <h4>How do I receive the tips?</h4>
                    <p>After payment confirmation, send us your payment details via WhatsApp. You'll instantly receive tips via SMS or WhatsApp — no waiting for specific times.</p>
                </div>
                <div class="faq-item">
                    <h4>What payment methods do you accept?</h4>
                    <p>We accept M-Pesa (Pay Till), Airtel Money, and international payments via PayPal and Skrill.</p>
                </div>
                <div class="faq-item">
                    <h4>Is there a money‑back guarantee?</h4>
                    <p>Yes! If the tips don't meet the guaranteed 45+ odds or accuracy standards, we'll refund your payment within 24 hours.</p>
                </div>
                <div class="faq-item">
                    <h4>Do you work on weekends?</h4>
                    <p>Golden Fixed Tips operate Monday–Friday only, as most high‑value matches are played on weekdays.</p>
                </div>
            </section>

            <div class="guarantee-banner">
                <strong>🔒 100% Money‑Back Guarantee</strong>
                <p style="margin: 0.5rem 0 0; color: #92400e;">If our Golden Fixed tips don't deliver, we refund your money — no questions asked.</p>
            </div>

            <div style="text-align: center; margin-top: 2rem;">
                <a class="cta-main" href="../M-PESAstkpush/stkpush.php" target="_blank" rel="noopener noreferrer">
                    Get Golden Fixed Tips — Ksh 525/day
                </a>
            </div>
        </div>
    </main>

    <footer class="footer">
        <div class="container">
            <div class="footer-bottom">
                <p>&copy; <?= date('Y') ?> Realtime Tips. All rights reserved.</p>
                <div>
                    <a href="../index.php">Home</a>
                    <a href="#">Privacy Policy</a>
                    <a href="#">Contact</a>
                </div>
            </div>
        </div>
    </footer>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Handle payment highlight boxes (full cards) and inline pay-till numbers
            const paymentHighlights = document.querySelectorAll('.payment-highlight');
            const inlinePayTill = document.querySelectorAll('.inline-pay-till-copy');
            
            // Combine both sets for unified handling
            const allCopyTargets = [...paymentHighlights, ...inlinePayTill];
            
            allCopyTargets.forEach(function(element) {
                let isCopying = false;
                
                element.style.cursor = 'pointer';
                element.title = 'Tap to copy';
                
                // Create toast notification (only once per element to avoid duplicates)
                const toast = document.createElement('div');
                toast.textContent = 'Copied to clipboard! ✓';
                toast.style.cssText = `
                    position: fixed;
                    bottom: 120px;
                    left: 50%;
                    transform: translateX(-50%) translateY(20px);
                    background: #10b981;
                    color: white;
                    padding: 14px 28px;
                    border-radius: 999px;
                    font-weight: 700;
                    font-size: 1rem;
                    box-shadow: 0 8px 30px rgba(16, 185, 129, 0.5);
                    opacity: 0;
                    visibility: hidden;
                    transition: all 0.3s cubic-bezier(0.68, -0.55, 0.265, 1.55);
                    z-index: 10000;
                    white-space: nowrap;
                    text-align: center;
                `;
                document.body.appendChild(toast);
                
                function performCopy(e) {
                    if (isCopying) return;
                    if (e) {
                        e.preventDefault();
                        e.stopPropagation();
                    }
                    
                    isCopying = true;
                    const text = element.textContent;
                    
                    if (navigator.clipboard && navigator.clipboard.writeText) {
                        navigator.clipboard.writeText(text).then(() => {
                            showToast(toast);
                            updateElement(element);
                            setTimeout(() => { isCopying = false; }, 1500);
                        }).catch(err => {
                            console.error('Copy failed:', err);
                            fallbackCopy(text, element, toast);
                        });
                    } else {
                        fallbackCopy(text, element, toast);
                    }
                }
                
                element.addEventListener('click', performCopy);
                element.addEventListener('touchend', performCopy);
                
                // Prevent double-tap zoom
                let lastTouchEnd = 0;
                element.addEventListener('touchend', function(e) {
                    const now = Date.now();
                    if (now - lastTouchEnd <= 300) {
                        e.preventDefault();
                    }
                    lastTouchEnd = now;
                });
            });
            
            function fallbackCopy(text, element, toast) {
                const textArea = document.createElement('textarea');
                textArea.value = text;
                textArea.style.position = 'fixed';
                textArea.style.left = '-9999px';
                textArea.style.top = '-9999px';
                document.body.appendChild(textArea);
                textArea.focus();
                textArea.select();
                
                try {
                    const successful = document.execCommand('copy');
                    if (successful) {
                        showToast(toast);
                        updateElement(element);
                    }
                } catch (err) {
                    console.error('Fallback copy failed:', err);
                }
                
                document.body.removeChild(textArea);
                setTimeout(() => { isCopying = false; }, 1500);
            }
            
            function showToast(toast) {
                if (window.innerWidth <= 480) {
                    toast.style.bottom = '140px';
                } else {
                    toast.style.bottom = '120px';
                }
                
                toast.style.opacity = '1';
                toast.style.visibility = 'visible';
                toast.style.transform = 'translateX(-50%) translateY(0)';
                
                setTimeout(() => {
                    toast.style.opacity = '0';
                    toast.style.transform = 'translateX(-50%) translateY(20px)';
                    toast.style.visibility = 'hidden';
                }, 2000);
            }
            
            function updateElement(element) {
                const originalText = element.textContent;
                const originalBg = element.style.background;
                const originalColor = element.style.color;
                const originalTransform = element.style.transform;
                
                element.textContent = 'Copied!';
                element.style.background = 'linear-gradient(135deg, #059669 0%, #047857 100%)';
                element.style.color = 'white';
                element.style.transform = 'scale(1.08)';
                
                setTimeout(() => {
                    element.textContent = originalText;
                    element.style.background = originalBg;
                    element.style.color = originalColor;
                    element.style.transform = originalTransform;
                }, 1500);
            }
        });
    </script>
</body>
</html>
