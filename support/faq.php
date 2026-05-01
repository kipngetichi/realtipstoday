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
    <meta name="description" content="Frequently asked questions about Realtime Tips football predictions, payments, and services.">
    <title>FAQ | Realtime Tips</title>
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

        .faq-container {
            max-width: 800px;
            margin: 0 auto;
        }

        .faq-item {
            background: var(--card);
            border: 1px solid var(--border);
            border-radius: 16px;
            margin-bottom: 1rem;
            overflow: hidden;
            box-shadow: var(--shadow-soft);
        }

        .faq-question {
            width: 100%;
            padding: 1.5rem;
            background: none;
            border: none;
            text-align: left;
            cursor: pointer;
            font-size: 1.1rem;
            font-weight: 600;
            color: var(--text-main);
            display: flex;
            justify-content: space-between;
            align-items: center;
            transition: background 0.2s;
        }

        .faq-question:hover {
            background: rgba(37, 99, 235, 0.05);
        }

        .faq-question::after {
            content: '+';
            font-size: 1.5rem;
            font-weight: 900;
            color: var(--accent);
            transition: transform 0.3s;
        }

        .faq-item.active .faq-question::after {
            transform: rotate(45deg);
        }

        .faq-answer {
            max-height: 0;
            overflow: hidden;
            transition: max-height 0.3s ease;
            padding: 0 1.5rem;
            color: var(--text-soft);
            line-height: 1.6;
        }

        .faq-item.active .faq-answer {
            max-height: 500px;
            padding-bottom: 1.5rem;
        }

        .contact-cta {
            text-align: center;
            margin-top: 3rem;
            padding: 2rem;
            background: var(--card);
            border-radius: var(--radius-lg);
            box-shadow: var(--shadow-soft);
        }

        .contact-cta h4 {
            margin: 0 0 1rem;
            color: var(--primary);
            font-size: 1.3rem;
        }

        .contact-cta p {
            margin: 0 0 1.5rem;
            color: var(--text-soft);
        }

        .btn {
            display: inline-block;
            padding: 0.9rem 1.5rem;
            background: var(--accent);
            color: white;
            text-decoration: none;
            border-radius: 12px;
            font-weight: 700;
            transition: transform 0.2s;
        }

        .btn:hover {
            transform: translateY(-2px);
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
    </style>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const faqItems = document.querySelectorAll('.faq-item');

            faqItems.forEach(item => {
                const question = item.querySelector('.faq-question');
                question.addEventListener('click', () => {
                    item.classList.toggle('active');
                });
            });
        });
    </script>
</head>
<body>
    <nav class="nav-wrap">
        <div class="container nav-container">
            <a href="../index.php" class="nav-logo">
                <span class="nav-logo-text">
                    <span>RT</span><span>Tips</span>
                </span>
            </a>
            <div class="nav-menu">
                <a href="../index.php" class="nav-link">Home</a>
                <a href="../testimonial/index.php" class="nav-link">Testimonials</a>
                <div class="nav-dropdown">
                    <span class="nav-dropdown-toggle">Tips <span>▼</span></span>
                    <div class="nav-dropdown-menu">
                        <a href="../Tips/goldentips.php">Golden Fixed Tips</a>
                        <a href="../Tips/2odds.php">2+ Odds Daily</a>
                        <a href="../Tips/2draws.php">2 Draw Games</a>
                    </div>
                </div>
                <a href="../international-payment.php" class="nav-link">International</a>
                <a href="#" class="nav-link">Support</a>
            </div>
            <a href="<?= htmlspecialchars($whatsappLink, ENT_QUOTES, 'UTF-8') ?>" target="_blank" rel="noopener noreferrer" class="nav-cta">Get Tips Now</a>
        </div>
    </nav>

    <main>
        <section class="section">
            <div class="container">
                <h3>Frequently Asked Questions</h3>
                <p>Find answers to the most common questions about our football tips service.</p>

                <div class="faq-container">
                    <div class="faq-item">
                        <button class="faq-question">How accurate are your tips?</button>
                        <div class="faq-answer">
                            <p>Our tips have an average accuracy rate of 86% based on our track record. The Golden Fixed tips are our highest accuracy option at 45+ odds, while our 2+ odds daily tips provide consistent wins at more affordable prices.</p>
                        </div>
                    </div>

                    <div class="faq-item">
                        <button class="faq-question">When are tips posted?</button>
                        <div class="faq-answer">
                            <p>Free daily tips are posted every morning. Premium tips are delivered via Telegram or WhatsApp. Early anticipation tips are posted hours before kickoff, giving you time to place bets at optimal odds.</p>
                        </div>
                    </div>

                    <div class="faq-item">
                        <button class="faq-question">What payment methods do you accept?</button>
                        <div class="faq-answer">
                            <p>We accept M-Pesa, Airtel Money, PayPal, and Skrill. Kenyan customers can use Buy Goods (Pay Till) for instant M-Pesa payments. International customers can use PayPal or Skrill.</p>
                        </div>
                    </div>

                    <div class="faq-item">
                        <button class="faq-question">Do you offer a money-back guarantee?</button>
                        <div class="faq-answer">
                            <p>Yes! If our tips don't win as promised, we provide a full refund. We stand by our predictions and want you to be completely satisfied with our service.</p>
                        </div>
                    </div>

                    <div class="faq-item">
                        <button class="faq-question">How do I receive the tips?</button>
                        <div class="faq-answer">
                            <p>After payment, you'll be added to our VIP Telegram channel or WhatsApp group where tips are posted. Free tips are available on our website and Telegram channel.</p>
                        </div>
                    </div>

                    <div class="faq-item">
                        <button class="faq-question">Are your tips legal?</button>
                        <div class="faq-answer">
                            <p>Yes, providing football tips and analysis is completely legal. We don't offer "sure wins" or guaranteed results - we provide expert predictions based on analysis and statistics.</p>
                        </div>
                    </div>

                    <div class="faq-item">
                        <button class="faq-question">Can I get tips for specific matches?</button>
                        <div class="faq-answer">
                            <p>Our packages include tips for the matches we analyze that day. We focus on high-quality predictions rather than quantity. If you have specific requests, contact us via WhatsApp.</p>
                        </div>
                    </div>

                    <div class="faq-item">
                        <button class="faq-question">Do you tip on international leagues?</button>
                        <div class="faq-answer">
                            <p>Yes! We cover major leagues worldwide including Premier League, La Liga, Serie A, Bundesliga, Champions League, and more. Our international package is perfect for global bettors.</p>
                        </div>
                    </div>

                    <div class="faq-item">
                        <button class="faq-question">What's the difference between your packages?</button>
                        <div class="faq-answer">
                            <p>Golden Fixed (45+ odds): Premium tips with highest accuracy. 2+ Odds Daily: Affordable daily tips. 2 Draw Games (15+ odds): Specialized draw predictions. Choose based on your budget and risk preference.</p>
                        </div>
                    </div>

                    <div class="faq-item">
                        <button class="faq-question">How do I cancel my subscription?</button>
                        <div class="faq-answer">
                            <p>Our tips are pay-per-use, not subscriptions. Each package gives you access for that specific day. Contact us if you need any changes or have questions about payments.</p>
                        </div>
                    </div>

                    <div class="contact-cta">
                        <h4>Still have questions?</h4>
                        <p>Can't find what you're looking for? Our support team is here to help!</p>
                        <a href="contact-us.php" class="btn">Contact Us</a>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <footer class="footer">
        <div class="container">
            <p style="text-align: center; color: rgba(255,255,255,0.7); margin: 0; padding: 2rem 0;">
                © 2024 Realtime Tips. All rights reserved.
            </p>
        </div>
    </footer>
</body>
</html>