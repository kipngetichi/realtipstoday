<?php
declare(strict_types=1);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Realtime Tips - Expert football predictions with high odds. Get 2 Draws, 2+ Odds, Golden Fixed Tips, and Jackpot predictions daily.">
    <title>Realtime Tips - Expert Football Predictions & Betting Tips</title>
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
            --radius-md: 16px;
            --shadow-soft: 0 20px 40px rgba(6, 10, 26, 0.16);
        }

        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }

        html {
            max-width: 100vw;
            overflow-x: hidden;
        }

        body {
            font-family: "Segoe UI", Roboto, Arial, sans-serif;
            color: var(--text-main);
            line-height: 1.5;
            background: linear-gradient(180deg, #f8fbff 0%, var(--bg-light) 100%);
            min-height: 100vh;
        }

        .container {
            width: min(1200px, 92%);
            margin: 0 auto;
            padding: 0 1rem;
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
            font-size: 1.4rem;
            font-weight: 900;
            letter-spacing: -0.5px;
        }

        .nav-logo span:first-child {
            color: var(--accent);
        }

        .nav-logo span:last-child {
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
            transition: color 0.2s;
        }

        .nav-link:hover {
            color: var(--white);
        }

        .hero {
            background:
                radial-gradient(circle at 15% 20%, rgba(14, 165, 233, 0.24), transparent 42%),
                radial-gradient(circle at 85% 0%, rgba(6, 95, 70, 0.18), transparent 35%),
                linear-gradient(145deg, #0f1838 0%, var(--bg-dark) 62%);
            color: var(--white);
            padding: 4rem 0 4.75rem;
            text-align: center;
        }

        .hero h1 {
            font-size: clamp(2rem, 5vw, 3.6rem);
            line-height: 1.1;
            margin: 0 0 1rem;
            max-width: 900px;
            margin-left: auto;
            margin-right: auto;
        }

        .hero p {
            margin: 0;
            max-width: 700px;
            margin-left: auto;
            margin-right: auto;
            color: rgba(255, 255, 255, 0.90);
            font-size: clamp(1rem, 1.7vw, 1.12rem);
            margin-bottom: 2rem;
        }

        .cta-button {
            display: inline-block;
            text-decoration: none;
            font-weight: 900;
            font-size: 1.1rem;
            padding: 1.2rem 2.5rem;
            border-radius: 999px;
            background: linear-gradient(135deg, #0ea5e9 0%, #0284c7 100%);
            color: white;
            transition: all 0.3s ease;
            box-shadow: 0 10px 30px rgba(14, 165, 233, 0.4);
            margin: 0.5rem;
        }

        .cta-button:hover {
            transform: translateY(-3px);
            box-shadow: 0 15px 40px rgba(14, 165, 233, 0.5);
        }

        .section {
            padding: 4rem 0;
        }

        .section-title {
            font-size: 2rem;
            margin: 0 0 2rem;
            text-align: center;
            color: var(--text-main);
        }

        .tips-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 1.5rem;
            margin-top: 2rem;
        }

        .tip-card {
            background: var(--card);
            border-radius: var(--radius-lg);
            padding: 2rem;
            border: 1px solid var(--border);
            box-shadow: var(--shadow-soft);
            transition: all 0.3s ease;
            text-decoration: none;
            color: inherit;
            display: block;
        }

        .tip-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 30px 60px rgba(6, 10, 26, 0.25);
        }

        .tip-card .icon {
            font-size: 3rem;
            margin-bottom: 1rem;
        }

        .tip-card h3 {
            margin: 0 0 0.75rem;
            font-size: 1.5rem;
            color: var(--text-main);
        }

        .tip-card .odds {
            display: inline-block;
            background: linear-gradient(135deg, var(--accent) 0%, #059669 100%);
            color: white;
            padding: 0.5rem 1rem;
            border-radius: 999px;
            font-weight: 700;
            font-size: 0.9rem;
            margin-bottom: 1rem;
        }

        .tip-card p {
            color: var(--text-soft);
            margin: 0 0 1.5rem;
            line-height: 1.6;
        }

        .tip-card .cta {
            color: var(--primary);
            font-weight: 700;
            text-decoration: none;
            display: inline-flex;
            align-items: center;
            gap: 0.5rem;
        }

        .tip-card .cta:hover {
            text-decoration: underline;
        }

        .features {
            background: var(--white);
        }

        .features-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 2rem;
            max-width: 1000px;
            margin: 0 auto;
        }

        .feature-item {
            text-align: center;
            padding: 1.5rem;
        }

        .feature-item .icon {
            font-size: 2.5rem;
            margin-bottom: 1rem;
        }

        .feature-item h4 {
            margin: 0 0 0.5rem;
            color: var(--text-main);
        }

        .feature-item p {
            color: var(--text-soft);
            margin: 0;
            font-size: 0.95rem;
        }

        .cta-section {
            background: linear-gradient(135deg, #0f1838 0%, var(--bg-dark) 100%);
            color: var(--white);
            text-align: center;
            padding: 4rem 0;
        }

        .cta-section h2 {
            margin: 0 0 2rem;
            font-size: 2.5rem;
        }

        .footer {
            background: var(--bg-dark);
            color: rgba(255,255,255,0.7);
            padding: 2rem 0;
            text-align: center;
        }

        .footer a {
            color: var(--accent);
            text-decoration: none;
        }

        .footer a:hover {
            text-decoration: underline;
        }

        .footer-links {
            display: flex;
            justify-content: center;
            gap: 2rem;
            flex-wrap: wrap;
            margin-top: 1rem;
        }

        @media (max-width: 768px) {
            .nav-menu {
                display: none;
            }

            .hero h1 {
                font-size: 2rem;
            }

            .tips-grid {
                grid-template-columns: 1fr;
            }

            .features-grid {
                grid-template-columns: 1fr;
            }
        }
    </style>
</head>
<body>
    <nav class="nav-wrap">
        <div class="container nav-container">
            <a href="/" class="nav-logo">
                <span>Realtime</span><span>Tips</span>
            </a>
            <div class="nav-menu">
                <a href="/2draws.php" class="nav-link">2 Draws</a>
                <a href="/2odds.php" class="nav-link">2+ Odds</a>
                <a href="/goldentips.php" class="nav-link">Golden Tips</a>
                <a href="/jackpot/" class="nav-link">Jackpot</a>
                <a href="/testimonial/" class="nav-link">Testimonials</a>
                <a href="/how-it-works.php" class="nav-link">How It Works</a>
                <a href="/contact-us.php" class="nav-link">Contact</a>
            </div>
        </div>
    </nav>

    <header class="hero">
        <div class="container">
            <h1>Expert Football Predictions That Win</h1>
            <p>Get carefully analyzed tips with high odds delivered instantly via SMS/WhatsApp. Join thousands of winners today.</p>
            <div>
                <a href="/2draws.php" class="cta-button">Get 2 Draws Tips</a>
                <a href="/goldentips.php" class="cta-button" style="background: linear-gradient(135deg, #10b981 0%, #059669 100%);">Get Golden Tips</a>
            </div>
        </div>
    </header>

    <main>
        <section class="section">
            <div class="container">
                <h2 class="section-title">Our Premium Tip Packages</h2>
                <div class="tips-grid">
                    <a href="/2draws.php" class="tip-card">
                        <div class="icon">🎯</div>
                        <h3>2 Draws Tips</h3>
                        <span class="odds">15+ Odds</span>
                        <p>Safe draw predictions with high returns. Two carefully selected matches daily with detailed analysis.</p>
                        <span class="cta">View Package →</span>
                    </a>

                    <a href="/2odds.php" class="tip-card">
                        <div class="icon">⚡</div>
                        <h3>2+ Odds Daily</h3>
                        <span class="odds">2+ Odds</span>
                        <p>Daily predictions with odds starting at 2.0. Perfect for consistent, safer betting with good returns.</p>
                        <span class="cta">View Package →</span>
                    </a>

                    <a href="/goldentips.php" class="tip-card">
                        <div class="icon">🏆</div>
                        <h3>Golden Fixed Tips</h3>
                        <span class="odds">45+ Odds</span>
                        <p>High-odds fixed matches with guaranteed wins. Premium service with highest returns.</p>
                        <span class="cta">View Package →</span>
                    </a>

                    <a href="/jackpot/" class="tip-card">
                        <div class="icon">💰</div>
                        <h3>Jackpot Tips</h3>
                        <span class="odds">100+ Odds</span>
                        <p>Expert predictions for SportPesa Mega, Midweek, and Betika jackpots. Maximize your bonus potential.</p>
                        <span class="cta">View Package →</span>
                    </a>
                </div>
            </div>
        </section>

        <section class="section features">
            <div class="container">
                <h2 class="section-title">Why Choose Realtime Tips?</h2>
                <div class="features-grid">
                    <div class="feature-item">
                        <div class="icon">🎯</div>
                        <h4>Carefully Selected</h4>
                        <p>Every tip is thoroughly analyzed by experts to ensure maximum winning potential.</p>
                    </div>
                    <div class="feature-item">
                        <div class="icon">⚡</div>
                        <h4>Instant Delivery</h4>
                        <p>Receive predictions via SMS/WhatsApp immediately after payment confirmation.</p>
                    </div>
                    <div class="feature-item">
                        <div class="icon">💬</div>
                        <h4>24/7 Support</h4>
                        <p>Our dedicated team is always available to assist you with any questions.</p>
                    </div>
                    <div class="feature-item">
                        <div class="icon">🔒</div>
                        <h4>Money-Back Guarantee</h4>
                        <p>If our tips don't meet expectations, we offer a full refund — no questions asked.</p>
                    </div>
                </div>
            </div>
        </section>

        <section class="section cta-section">
            <div class="container">
                <h2>Ready to Start Winning?</h2>
                <p style="max-width: 600px; margin: 0 auto 2rem; opacity: 0.9;">
                    Join thousands of satisfied customers who trust Realtime Tips for their football predictions.
                    Choose your package and get instant access to expert tips.
                </p>
                <a href="/contact-us.php" class="cta-button" style="background: linear-gradient(135deg, #10b981 0%, #059669 100%);">Get Started Now</a>
            </div>
        </section>
    </main>

    <footer class="footer">
        <div class="container">
            <p>&copy; <?= date('Y') ?> Realtime Tips. All rights reserved.</p>
            <div class="footer-links">
                <a href="/2draws.php">2 Draws</a>
                <a href="/2odds.php">2+ Odds</a>
                <a href="/goldentips.php">Golden Tips</a>
                <a href="/jackpot/">Jackpot</a>
                <a href="/testimonial/">Testimonials</a>
                <a href="/how-it-works.php">How It Works</a>
                <a href="/contact-us.php">Contact</a>
                <a href="/international-payment.php">International</a>
            </div>
        </div>
    </footer>
</body>
</html>