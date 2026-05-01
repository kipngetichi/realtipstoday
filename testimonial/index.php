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
    <meta name="description" content="Read testimonials from our satisfied customers who have benefited from Realtime Tips football predictions.">
    <title>Testimonials | Realtime Tips</title>
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
            margin: 0;
            color: var(--text-soft);
            max-width: 70ch;
        }

        .testimonials-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 2rem;
            margin-top: 2rem;
        }

        .testimonial-card {
            background: var(--card);
            border: 1px solid var(--border);
            border-radius: var(--radius-lg);
            padding: 2rem;
            box-shadow: var(--shadow-soft);
            transition: transform 0.3s cubic-bezier(0.4, 0, 0.2, 1);
        }

        .testimonial-card:hover {
            transform: translateY(-4px);
        }

        .testimonial-quote {
            font-size: 1.1rem;
            font-style: italic;
            color: var(--text-main);
            margin-bottom: 1.5rem;
            position: relative;
        }

        .testimonial-quote::before {
            content: '"';
            font-size: 3rem;
            color: var(--accent);
            position: absolute;
            top: -0.5rem;
            left: -1rem;
            font-family: serif;
        }

        .testimonial-author {
            display: flex;
            align-items: center;
            gap: 1rem;
        }

        .author-avatar {
            width: 50px;
            height: 50px;
            border-radius: 50%;
            background: linear-gradient(135deg, var(--accent), var(--primary));
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            font-weight: 900;
            font-size: 1.2rem;
        }

        .author-info h4 {
            margin: 0;
            font-size: 1rem;
            font-weight: 700;
            color: var(--text-main);
        }

        .author-info small {
            color: var(--text-soft);
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
            .testimonials-grid {
                grid-template-columns: 1fr;
            }
        }
    </style>
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
                <div class="nav-dropdown">
                    <span class="nav-dropdown-toggle">Tips <span>▼</span></span>
                    <div class="nav-dropdown-menu">
                        <a href="../Tips/goldentips.php">Golden Fixed Tips</a>
                        <a href="../Tips/2odds.php">2+ Odds Daily</a>
                        <a href="../Tips/2draws.php">2 Draw Games</a>
                    </div>
                </div>
                <a href="../international-payment.php" class="nav-link">International</a>
                <a href="#" class="nav-link">Testimonials</a>
            </div>
            <a href="<?= htmlspecialchars($whatsappLink, ENT_QUOTES, 'UTF-8') ?>" target="_blank" rel="noopener noreferrer" class="nav-cta">Get Tips Now</a>
        </div>
    </nav>

    <main>
        <section class="section">
            <div class="container">
                <h3>What Our Customers Say</h3>
                <p>Don't just take our word for it. Here's what our satisfied customers have to say about Realtime Tips.</p>

                <div class="testimonials-grid">
                    <div class="testimonial-card">
                        <div class="testimonial-quote">
                            "I've been using Realtime Tips for 6 months now and my betting profits have increased significantly. The early anticipation tips are game-changers!"
                        </div>
                        <div class="testimonial-author">
                            <div class="author-avatar">J</div>
                            <div class="author-info">
                                <h4>John M.</h4>
                                <small>Nairobi, Kenya</small>
                            </div>
                        </div>
                    </div>

                    <div class="testimonial-card">
                        <div class="testimonial-quote">
                            "The free daily tips helped me build trust, and now I'm a premium subscriber. Worth every shilling!"
                        </div>
                        <div class="testimonial-author">
                            <div class="author-avatar">S</div>
                            <div class="author-info">
                                <h4>Sarah K.</h4>
                                <small>Mombasa, Kenya</small>
                            </div>
                        </div>
                    </div>

                    <div class="testimonial-card">
                        <div class="testimonial-quote">
                            "Consistent winners with the Golden Fixed Tips. My go-to source for football predictions now."
                        </div>
                        <div class="testimonial-author">
                            <div class="author-avatar">M</div>
                            <div class="author-info">
                                <h4>Michael T.</h4>
                                <small>Eldoret, Kenya</small>
                            </div>
                        </div>
                    </div>

                    <div class="testimonial-card">
                        <div class="testimonial-quote">
                            "International payments work perfectly. I'm from Uganda and love the service. Highly recommended!"
                        </div>
                        <div class="testimonial-author">
                            <div class="author-avatar">A</div>
                            <div class="author-info">
                                <h4>Anna P.</h4>
                                <small>Kampala, Uganda</small>
                            </div>
                        </div>
                    </div>

                    <div class="testimonial-card">
                        <div class="testimonial-quote">
                            "The 2+ odds daily tips are amazing. Affordable and profitable. Been winning consistently."
                        </div>
                        <div class="testimonial-author">
                            <div class="author-avatar">D</div>
                            <div class="author-info">
                                <h4>David L.</h4>
                                <small>Nakuru, Kenya</small>
                            </div>
                        </div>
                    </div>

                    <div class="testimonial-card">
                        <div class="testimonial-quote">
                            "Great customer support and timely tips. The Telegram channel keeps me updated. 5 stars!"
                        </div>
                        <div class="testimonial-author">
                            <div class="author-avatar">E</div>
                            <div class="author-info">
                                <h4>Emily W.</h4>
                                <small>Nairobi, Kenya</small>
                            </div>
                        </div>
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