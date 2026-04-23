<?php
declare(strict_types=1);

$whatsappLink = 'https://wa.me/25471380429?text=Hello%20Realtime%20Tips%2C%20I%20want%20premium%20football%20sure%20tips.';
$telegramLink = 'https://t.me/25471380429';

$defaultFreeTipDate = date('l, F j, Y');

// User settings
$freeTipMatchTitle = 'Aston Villa v Bologna FC';
$freeTipLabel = 'Tip 1';
$freeTipTime = '7:00 PM';
$freeTipPostedToLabel = 'Telegram Channel';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Get professional football sure tips with daily updates, free daily tips, and early anticipated picks.">
    <title>Realtime Tips | Football Sure Tips</title>
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

        .footer {
            background: linear-gradient(180deg, var(--bg-dark) 0%, #050d1f 100%);
            color: var(--white);
            padding: 3.5rem 0 2rem;
            margin-top: 4rem;
            box-sizing: border-box;
            min-height: 100vh;
        }

        .sticky-contact {
            position: fixed;
            right: 1rem;
            bottom: 1rem;
            display: flex;
            flex-direction: column;
            gap: 0.75rem;
            z-index: 90;
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

        .hero > * {
            min-width: 0;
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

        .hero-notes {
            display: flex;
            flex-wrap: wrap;
            gap: 0.8rem;
            margin-top: 1.3rem;
        }

        .hero-notes span {
            background: rgba(255, 255, 255, 0.08);
            border: 1px solid rgba(255, 255, 255, 0.14);
            border-radius: 999px;
            padding: 0.5rem 0.8rem;
            color: rgba(255, 255, 255, 0.94);
            font-size: 0.94rem;
        }

        .hero-card {
            background: rgba(255, 255, 255, 0.08);
            border: 1px solid rgba(255, 255, 255, 0.18);
            backdrop-filter: blur(4px);
            border-radius: var(--radius-lg);
            padding: 1.6rem;
            box-shadow: var(--shadow-soft);
            min-width: 0;
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

        .trust-row {
            margin-top: 2rem;
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 1.25rem;
            align-items: stretch;
        }

        .trust-item {
            background: var(--card);
            border: 1px solid var(--border);
            border-radius: 20px;
            padding: 1.5rem 1.25rem;
            text-align: left;
            box-shadow: 0 8px 24px rgba(2, 6, 23, 0.06);
            min-width: 0;
            width: 100%;
            display: flex;
            flex-direction: column;
            transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
            position: relative;
            overflow: hidden;
        }

        .trust-item:hover {
            transform: translateY(-4px);
            box-shadow: 0 14px 32px rgba(2, 6, 23, 0.1);
        }

        .trust-item > span {
            display: block;
            font-size: 1.1rem;
            font-weight: 900;
            color: var(--primary);
            margin-bottom: 0.35rem;
        }

        .trust-item small {
            display: block;
            margin-top: 0.25rem;
            color: var(--text-soft);
            font-weight: 600;
            font-size: 0.85rem;
        }

        .trust-item--free {
            background: linear-gradient(180deg, #ffffff 0%, #f7fbff 100%);
            border: 1px solid rgba(37, 99, 235, 0.12);
            box-shadow: 0 8px 24px rgba(37, 99, 235, 0.08);
        }

        .trust-item--free:hover {
            box-shadow: 0 14px 32px rgba(37, 99, 235, 0.14);
        }

        .trust-item--early {
            background: linear-gradient(135deg, #fefce8 0%, #fef9c3 100%);
            border: 1px solid #eab308;
            box-shadow: 0 8px 24px rgba(234, 179, 8, 0.12);
        }

        .trust-item--early:hover {
            box-shadow: 0 14px 32px rgba(234, 179, 8, 0.18);
        }

        .trust-item--early .early-title {
            color: #a16207;
            font-weight: 800;
            font-size: 1.1rem;
            margin: 0 0 0.25rem;
        }

        .trust-item--early .early-subtitle {
            color: #ca8a04;
            font-weight: 600;
            font-size: 0.85rem;
            margin: 0 0 0.75rem;
        }

        .trust-item--early .early-pricing {
            color: #92400e;
            font-size: 0.88rem;
            margin-top: 0.75rem;
        }

        .trust-item--early .early-row {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 0.4rem 0;
            border-bottom: 1px dashed #fde047;
        }

        .trust-item--early .early-row:last-child {
            border-bottom: none;
        }

        .trust-item--early .early-plan {
            font-weight: 600;
            color: #92400e;
        }

        .trust-item--early .early-plan strong {
            color: #78350f;
            font-weight: 800;
        }

        .trust-item--early .early-price {
            color: #b45309;
            font-weight: 800;
        }

        .trust-item--early .early-payment {
            margin-top: 0.75rem;
            padding: 0.7rem;
            background: rgba(255,255,255,0.5);
            border-radius: 10px;
            border: 1px solid #fde047;
        }

        .trust-item--early .early-payment-label {
            font-size: 0.75rem;
            color: #a16207;
            font-weight: 600;
            text-transform: uppercase;
            letter-spacing: 0.05em;
            margin-bottom: 0.35rem;
        }

        .trust-item--early .early-payment-info {
            display: flex;
            justify-content: space-between;
            align-items: center;
            flex-wrap: wrap;
            gap: 0.5rem;
        }

        .trust-item--early .early-payment-method {
            color: #92400e;
            font-size: 0.85rem;
            font-weight: 600;
        }

        .trust-item--early .early-copy-wrapper {
            display: flex;
            align-items: center;
            gap: 0.5rem;
            min-width: 0;
        }

        .trust-item--early .early-copy-hint {
            font-size: 0.75rem;
            color: #92400e;
            font-weight: 600;
        }

        .trust-item--early .inline-pay-till-copy {
            font-family: 'Courier New', monospace;
            word-break: break-all;
            overflow-wrap: anywhere;
        }

        .trust-item--international {
            background: linear-gradient(135deg, #f0fdf5 0%, #dcfce7 100%);
            border: 1px solid #22c55e;
            box-shadow: 0 8px 24px rgba(34, 197, 94, 0.12);
        }

        .trust-item--international:hover {
            box-shadow: 0 14px 32px rgba(34, 197, 94, 0.18);
        }

        .trust-item--international .intl-title {
            color: #15803d;
            font-weight: 800;
            font-size: 1.1rem;
            margin: 0 0 0.25rem;
        }

        .trust-item--international .intl-subtitle {
            color: #16a34a;
            font-weight: 600;
            font-size: 0.85rem;
            margin: 0 0 0.5rem;
        }

        .trust-item--international .intl-pricing {
            color: #166534;
            font-size: 0.82rem;
            margin-top: 0.5rem;
        }

        .intl-row {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 0.2rem 0;
        }

        .intl-row:not(:last-child) {
            border-bottom: 1px dashed #bbf7d0;
        }

        .intl-price {
            font-weight: 700;
            color: #15803d;
        }

        .trust-item--international .intl-payment {
            margin-top: 0.6rem;
            padding: 0.5rem;
            background: rgba(255,255,255,0.5);
            border-radius: 8px;
            font-size: 0.85rem;
        }

        .intl-payment-row {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 0.25rem 0;
        }

        .intl-payment-row:not(:last-child) {
            border-bottom: 1px dashed #bbf7d0;
        }

        .intl-payment-label {
            color: #166534;
            font-weight: 600;
        }

        .intl-payment-value {
            color: #15803d;
            font-weight: 700;
            word-break: break-all;
            overflow-wrap: anywhere;
            min-width: 0;
        }

        .trust-item--free:hover {
            box-shadow: 0 14px 32px rgba(37, 99, 235, 0.14);
        }

        .free-tip-title {
            display: block;
            margin-bottom: 0.65rem;
            font-size: 0.8rem;
            font-weight: 900;
            color: var(--primary);
            text-transform: uppercase;
            letter-spacing: 1px;
        }

        .free-meta {
            display: flex;
            flex-direction: column;
            gap: 0.65rem;
            margin-top: 0.5rem;
        }

        .meta-pill {
            display: flex;
            justify-content: space-between;
            align-items: center;
            gap: 0.8rem;
            background: var(--white);
            border: 1px solid #e2e8f0;
            border-radius: 10px;
            padding: 0.75rem 0.85rem;
            text-align: left;
            min-width: 0;
            width: 100%;
            transition: all 0.2s ease;
        }

        .meta-pill:hover {
            border-color: rgba(37, 99, 235, 0.3);
            background: #f8fafc;
        }

        .meta-label {
            color: var(--primary);
            font-weight: 800;
            font-size: 0.85rem;
            white-space: nowrap;
        }

        .meta-label--ml {
            margin-left: 0.5rem;
        }

        .meta-value {
            color: var(--text-main);
            font-weight: 700;
            font-size: 0.85rem;
            text-align: right;
            min-width: 0;
            overflow-wrap: anywhere;
            word-break: break-word;
            line-height: 1.3;
        }

        .meta-value--date {
            font-size: 0.8rem;
            white-space: nowrap;
            overflow: hidden;
            text-overflow: ellipsis;
        }

        .meta-value a {
            color: var(--primary);
            text-decoration: none;
            font-weight: 800;
            transition: color 0.2s;
        }

        .meta-value a:hover {
            text-decoration: underline;
        }

        .meta-pill--match {
            justify-content: center;
            background: linear-gradient(135deg, #fffbf0 0%, #fff8e1 100%);
            border-color: #ffc107;
        }

        .meta-pill--match .meta-label {
            color: #f59e0b;
        }

        .meta-pill--match .match-value {
            color: #d97706;
            font-weight: 900;
            font-size: 1.05rem;
        }

        .meta-pill--centered {
            justify-content: center;
        }

        .meta-pill--centered .tip-value {
            font-weight: 800;
            font-size: 1.1rem;
            color: var(--primary);
        }

        .trust-cta {
            grid-column: 1 / -1;
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            gap: 0.9rem;
            padding-top: 0.1rem;
            min-width: 0;
        }

        .trust-cta .btn {
            flex: 0 1 auto;
            min-width: 200px;
            max-width: 300px;
        }

        .btn {
            text-decoration: none;
            border-radius: 12px;
            padding: 0.9rem 1.25rem;
            font-weight: 900;
            transition: transform 0.2s ease, filter 0.2s ease;
            border: 1px solid transparent;
            user-select: none;
        }

        .btn-primary {
            background: var(--accent);
            color: #06251b;
        }

        .btn-primary:hover {
            transform: translateY(-2px);
            filter: brightness(1.04);
        }

        .btn-ghost {
            background: transparent;
            color: #ffffff;
            border-color: rgba(255, 255, 255, 0.30);
        }

        .btn-ghost:hover {
            background: rgba(255, 255, 255, 0.08);
        }

        .btn-accent {
            background: linear-gradient(135deg, #6366f1 0%, #8b5cf6 100%);
            color: white;
            border: none;
        }

        .btn-accent:hover {
            transform: translateY(-2px);
            box-shadow: 0 8px 20px rgba(99, 102, 241, 0.35);
            filter: brightness(1.05);
        }

        .btn-intl {
            display: inline-flex;
            align-items: center;
            gap: 0.4rem;
            padding: 0.75rem 1.25rem;
            font-size: 0.95rem;
            font-weight: 800;
            text-decoration: none;
            background: linear-gradient(135deg, #10b981 0%, #059669 100%);
            color: white;
            border-radius: 999px;
            box-shadow: 0 6px 16px rgba(16, 185, 129, 0.3);
            transition: all 0.25s ease;
        }

        .btn-intl:hover {
            transform: translateY(-2px);
            box-shadow: 0 8px 20px rgba(16, 185, 129, 0.4);
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

        .inline-pay-till-copy {
            display: inline-block;
            font-family: 'Courier New', monospace;
            font-size: 1.15rem;
            font-weight: 900;
            color: white;
            background: linear-gradient(135deg, #f59e0b 0%, #f97316 50%, #d97706 100%);
            padding: 0.35rem 0.8rem;
            border-radius: 8px;
            letter-spacing: 0.5px;
            text-shadow: 0 1px 2px rgba(0, 0, 0, 0.2);
            box-shadow: 0 4px 12px rgba(245, 158, 11, 0.35);
            animation: pulse-gold 2s ease-in-out infinite;
            cursor: pointer;
            transition: all 0.2s ease;
            user-select: none;
            -webkit-tap-highlight-color: transparent;
        }

        .inline-pay-till-copy:hover {
            transform: scale(1.08);
            box-shadow: 0 6px 16px rgba(245, 158, 11, 0.5);
        }

        .inline-pay-till-copy:active {
            transform: scale(0.95);
        }

        @keyframes pulse-gold {
            0%, 100% { transform: scale(1); box-shadow: 0 4px 12px rgba(245, 158, 11, 0.35); }
            50% { transform: scale(1.05); box-shadow: 0 6px 16px rgba(245, 158, 11, 0.5); }
        }

.sticky-btn {
            min-width: 145px;
            text-decoration: none;
            color: var(--white);
            font-weight: 900;
            border-radius: 999px;
            padding: 0.62rem 1rem;
            text-align: center;
            box-shadow: 0 14px 22px rgba(0, 0, 0, 0.22);
            transition: transform 0.2s, box-shadow 0.2s;
        }

        .sticky-btn:hover {
            transform: scale(1.05);
            box-shadow: 0 18px 28px rgba(0, 0, 0, 0.28);
        }

        .sticky-whatsapp {
            background: #25d366;
        }

        .sticky-telegram {
            background: #229ed9;
        }

.sticky-contact {
            position: fixed;
            right: 1rem;
            bottom: 1rem;
            display: flex;
            flex-direction: column;
            gap: 0.75rem;
            z-index: 90;
        }

        @media (max-width: 920px) {
            .meta-value {
                text-align: right;
            }

            .sticky-btn {
                min-width: auto;
                padding: 0.6rem 0.9rem;
                font-size: 0.85rem;
            }

            .sticky-contact {
                right: 0.8rem;
                bottom: 0.8rem;
            }
        }

        @media (max-width: 480px) {
            .sticky-contact {
                right: 0.75rem;
                bottom: 0.75rem;
            }

            .sticky-btn {
                display: flex;
                align-items: center;
                gap: 0.4rem;
                padding: 0.55rem 0.8rem;
                font-size: 0.8rem;
                box-shadow: 0 6px 14px rgba(0, 0, 0, 0.25);
            }

            .sticky-btn svg {
                width: 16px;
                height: 16px;
            }
        }

        @media (max-width: 900px) {
            .trust-row {
                grid-template-columns: repeat(2, minmax(0, 1fr));
                gap: 1rem;
            }
        }

        @media (max-width: 700px) {
            .trust-row {
                grid-template-columns: 1fr;
                gap: 1rem;
            }
        }

            .hero {
                grid-template-columns: 1fr;
                gap: 2rem;
            }

            .hero-card {
                width: 100%;
                max-width: 100%;
            }

            .trust-row {
                grid-template-columns: 1fr;
                gap: 1rem;
            }

            .trust-item {
                padding: 1.25rem;
                min-width: 0;
            }

            .trust-cta {
                display: flex;
                flex-direction: column;
                gap: 0.75rem;
                width: 100%;
            }

            .trust-cta .btn {
                min-width: 0 !important;
                width: 100% !important;
                max-width: 100% !important;
                flex-shrink: 1;
                word-wrap: break-word;
                overflow-wrap: anywhere;
                white-space: normal;
                line-height: 1.4;
            }

            .hero-notes span {
                width: 100%;
            }

            .sticky-btn {
                width: auto;
                text-align: center;
                min-width: 0;
            }

             .meta-pill {
                 flex-direction: row;
                 align-items: center;
                 justify-content: space-between;
                 padding: 0.7rem 0.75rem;
                 min-width: 0;
             }

             .meta-label {
                 font-size: 0.8rem;
                 flex-shrink: 0;
             }

             .meta-value {
                 font-size: 0.8rem;
                 text-align: right;
                 min-width: 0;
                 overflow-wrap: break-word;
                 word-break: break-word;
             }

             .tips-table td:nth-child(4),
             .tips-table td:nth-child(5) {
                 display: none;
             }

            .sticky-contact {
                right: 0.7rem;
                bottom: 0.7rem;
                gap: 0.5rem;
            }
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

        .nav-mobile-toggle {
            display: none;
            background: transparent;
            border: none;
            cursor: pointer;
            padding: 0.5rem;
            z-index: 101;
        }

        .nav-mobile-toggle span {
            display: block;
            width: 22px;
            height: 2px;
            background: var(--white);
            margin: 5px 0;
            transition: 0.3s;
            border-radius: 2px;
        }

        .nav-mobile-toggle.active span:nth-child(1) {
            transform: rotate(45deg) translate(5px, 5px);
        }

        .nav-mobile-toggle.active span:nth-child(2) {
            opacity: 0;
        }

        .nav-mobile-toggle.active span:nth-child(3) {
            transform: rotate(-45deg) translate(5px, -5px);
        }

        .mobile-menu {
            display: none;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: var(--bg-dark);
            z-index: 99;
            padding: 5rem 1.5rem 1.5rem;
            overflow-y: auto;
        }

        .mobile-menu.active {
            display: block;
            animation: slideIn 0.3s ease;
        }

        @keyframes slideIn {
            from {
                opacity: 0;
                transform: translateX(100%);
            }
            to {
                opacity: 1;
                transform: translateX(0);
            }
        }

        .mobile-menu a {
            display: block;
            color: rgba(255,255,255,0.9);
            text-decoration: none;
            font-size: 1.1rem;
            font-weight: 600;
            padding: 1rem 0;
            border-bottom: 1px solid rgba(255,255,255,0.1);
            transition: all 0.2s;
        }

        .mobile-menu a:hover {
            color: var(--accent);
            padding-left: 0.5rem;
        }

        .mobile-menu .nav-dropdown-toggle {
            display: flex;
            justify-content: space-between;
            align-items: center;
            color: rgba(255,255,255,0.9);
            font-size: 1.1rem;
            font-weight: 600;
            padding: 1rem 0;
            border-bottom: 1px solid rgba(255,255,255,0.1);
            cursor: pointer;
        }

        .mobile-menu .nav-dropdown-toggle::after {
            content: '+';
            font-size: 1.3rem;
            font-weight: 700;
        }

        .mobile-menu .nav-dropdown-toggle.active::after {
            content: '-';
        }

        .mobile-dropdown {
            display: none;
            padding-left: 1rem;
            background: rgba(255,255,255,0.05);
            margin: 0.5rem 0;
            border-radius: 8px;
        }

        .mobile-dropdown.active {
            display: block;
        }

        .mobile-dropdown a {
            font-size: 1rem;
            padding: 0.85rem 0;
            border-bottom: none;
        }

        .mobile-menu .nav-cta-mobile {
            display: block;
            background: var(--accent);
            color: #06251b;
            text-align: center;
            padding: 1rem;
            border-radius: 12px;
            font-weight: 800;
            margin-top: 1.5rem;
        }

        .mobile-menu-close {
            position: absolute;
            top: 1rem;
            right: 1rem;
            background: transparent;
            border: none;
            color: var(--white);
            font-size: 1.5rem;
            cursor: pointer;
            padding: 0.5rem;
        }

        @media (max-width: 800px) {
            .nav-menu {
                display: none;
            }

            .nav-mobile-toggle {
                display: block;
            }
        }

        @media (max-width: 480px) {
            .container {
                width: min(100%, calc(100% - 1rem));
            }

            .hero-wrap {
                padding: 2.2rem 0 5.8rem;
            }

            .hero {
                gap: 1.2rem;
            }

            .hero-badge {
                font-size: 0.82rem;
                padding: 0.32rem 0.72rem;
                margin-bottom: 0.8rem;
            }

            .hero h1 {
                font-size: clamp(1.65rem, 8vw, 2.25rem);
                line-height: 1.12;
                margin-bottom: 0.8rem;
            }

            .hero p {
                font-size: 0.96rem;
            }

            .hero-card {
                padding: 1.1rem;
            }

            .hero-card ul {
                gap: 0.6rem;
                padding-left: 1rem;
            }

            .trust-row {
                gap: 0.8rem;
                margin-top: 1.35rem;
            }

            .trust-item {
                padding: 0.9rem 0.85rem;
                border-radius: 14px;
            }

            .trust-item--free {
                padding: 0.85rem 0.75rem;
            }

            .free-tip-title {
                font-size: 0.84rem;
                margin-bottom: 0.4rem;
            }

.tip-match {
                letter-spacing: 0.2px;
                -webkit-text-stroke: 1.5px #101010;
            }

            .tip-number {
                margin-top: 0.12rem;
                font-size: clamp(1rem, 5vw, 1.45rem);
                -webkit-text-stroke: 1.2px #101010;
            }

            .free-meta {
                gap: 0.5rem;
            }

            .meta-pill {
                padding: 0.65rem 0.75rem;
                gap: 0.35rem;
                width: 100%;
            }

            .meta-label,
            .meta-value {
                font-size: 0.88rem;
            }

            .trust-item > span {
                font-size: 0.96rem;
            }

            .trust-item small {
                font-size: 0.88rem;
            }

            .btn {
                padding: 0.82rem 1rem;
                font-size: 0.95rem;
            }

            .section {
                padding: 2.2rem 0;
            }

            .section h3 {
                font-size: 1.35rem;
            }

            .section p {
                font-size: 0.95rem;
            }

        }

        .footer {
            background: linear-gradient(180deg, var(--bg-dark) 0%, #050d1f 100%);
            color: var(--white);
            padding: 3.5rem 0 2rem;
            margin-top: 4rem;
        }

        .footer-top {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 3rem;
            margin-bottom: 2.5rem;
        }

        .footer-cta-section {
            padding: 1rem 0;
        }

        .footer-badge {
            display: inline-block;
            background: linear-gradient(135deg, #fbbf24 0%, #f59e0b 100%);
            color: #78350f;
            font-weight: 900;
            font-size: 0.75rem;
            padding: 0.4rem 1rem;
            border-radius: 999px;
            text-transform: uppercase;
            letter-spacing: 1px;
            margin-bottom: 1rem;
            animation: pulse 2s ease-in-out infinite;
        }

        @keyframes pulse {
            0%, 100% { transform: scale(1); }
            50% { transform: scale(1.05); }
        }

        .footer-headline {
            font-size: clamp(1.75rem, 4vw, 2.5rem);
            line-height: 1.15;
            margin: 0 0 0.75rem;
            color: var(--white);
        }

        .footer-subtext {
            font-size: 1rem;
            color: rgba(255,255,255,0.8);
            margin: 0 0 1.5rem;
            line-height: 1.6;
            max-width: 50ch;
        }

        .footer-subtext strong {
            color: #10b981;
            font-weight: 800;
        }

        .footer-features {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 0.8rem;
        }

        .footer-feature {
            display: flex;
            align-items: center;
            gap: 0.6rem;
            color: rgba(255,255,255,0.9);
            font-size: 0.95rem;
            font-weight: 500;
        }

        .footer-feature svg {
            color: #10b981;
            flex-shrink: 0;
        }

        .footer-pricing-cards {
            display: grid;
            grid-template-columns: repeat(2, minmax(0, 1fr));
            gap: 1.5rem;
            align-items: stretch;
        }

        .pricing-card {
            background: linear-gradient(180deg, rgba(255,255,255,0.08) 0%, rgba(255,255,255,0.03) 100%);
            border: 1px solid rgba(255,255,255,0.12);
            border-radius: 24px;
            padding: 2rem 1.75rem;
            transition: all 0.35s cubic-bezier(0.4, 0, 0.2, 1);
            position: relative;
            overflow: hidden;
            display: flex;
            flex-direction: column;
            min-height: 420px;
            min-width: 0;
            backdrop-filter: blur(10px);
        }

        .pricing-card:hover {
            transform: translateY(-8px);
            border-color: rgba(16, 185, 129, 0.4);
            box-shadow: 0 25px 50px rgba(0, 0, 0, 0.35), 0 0 0 1px rgba(16, 185, 129, 0.15);
        }

        .pricing-card.featured {
            background: linear-gradient(160deg, rgba(16, 185, 129, 0.18) 0%, rgba(16, 185, 129, 0.06) 100%);
            border: 2px solid rgba(16, 185, 129, 0.35);
            min-height: 430px;
        }

        .pricing-card.featured::before {
            content: '';
            position: absolute;
            top: -60%;
            left: -60%;
            width: 180%;
            height: 180%;
            background: radial-gradient(circle, rgba(16, 185, 129, 0.12) 0%, transparent 55%);
            animation: rotate 12s linear infinite;
            pointer-events: none;
        }

        @keyframes rotate {
            from { transform: rotate(0deg) scale(1); }
            to { transform: rotate(360deg) scale(1); }
        }

        .pricing-badge {
            position: absolute;
            top: -10px;
            left: 50%;
            transform: translateX(-50%);
            background: linear-gradient(135deg, #10b981 0%, #059669 100%);
            color: white;
            font-weight: 900;
            font-size: 0.7rem;
            padding: 0.4rem 1.4rem;
            border-radius: 999px;
            text-transform: uppercase;
            letter-spacing: 1px;
            z-index: 2;
            box-shadow: 0 4px 15px rgba(16, 185, 129, 0.35);
        }

        .pricing-header {
            text-align: center;
            margin-bottom: 1.5rem;
            position: relative;
            z-index: 1;
        }

        .pricing-label {
            display: inline-block;
            background: rgba(255, 255, 255, 0.12);
            color: rgba(255, 255, 255, 0.8);
            font-size: 0.7rem;
            font-weight: 800;
            padding: 0.35rem 0.85rem;
            border-radius: 999px;
            margin-bottom: 0.65rem;
            text-transform: uppercase;
            letter-spacing: 1px;
            border: 1px solid rgba(255, 255, 255, 0.15);
        }

        .pricing-title {
            font-size: 1.45rem;
            margin: 0 0 0.5rem;
            font-weight: 900;
            color: var(--white);
            line-height: 1.2;
        }

        .pricing-desc {
            font-size: 0.9rem;
            color: rgba(255,255,255,0.65);
            margin: 0;
            line-height: 1.4;
        }

        .pricing-price {
            text-align: center;
            margin-bottom: 1.5rem;
            padding: 1.25rem 0;
            border-top: 1px solid rgba(255,255,255,0.12);
            border-bottom: 1px solid rgba(255,255,255,0.12);
            position: relative;
            z-index: 1;
        }

        .currency {
            font-size: 1.1rem;
            font-weight: 700;
            vertical-align: top;
            color: rgba(255,255,255,0.7);
            margin-right: 2px;
        }

        .amount {
            font-size: 3.4rem;
            font-weight: 900;
            line-height: 1;
            color: var(--white);
            letter-spacing: -1px;
        }

        .period {
            font-size: 0.95rem;
            color: rgba(255,255,255,0.55);
            font-weight: 600;
        }

        .pricing-features {
            list-style: none;
            padding: 0;
            margin: 0 0 2rem;
            display: grid;
            gap: 0.75rem;
            flex-grow: 1;
            position: relative;
            z-index: 1;
        }

        .pricing-features li {
            display: flex;
            align-items: flex-start;
            gap: 0.6rem;
            font-size: 0.9rem;
            color: rgba(255,255,255,0.9);
            line-height: 1.4;
        }

        .pricing-features li::before {
            content: '✓';
            color: #10b981;
            font-weight: 900;
            font-size: 0.85rem;
            flex-shrink: 0;
            margin-top: 1px;
            text-shadow: 0 0 10px rgba(16, 185, 129, 0.5);
        }

        .pay-highlight {
            display: inline-block;
            background: linear-gradient(135deg, #f59e0b 0%, #f97316 50%, #d97706 100%);
            color: #fff;
            font-weight: 900;
            padding: 0.2rem 0.5rem;
            border-radius: 6px;
            font-size: 0.95rem;
            letter-spacing: 1px;
            text-shadow: 0 1px 2px rgba(0,0,0,0.2);
            box-shadow: 0 2px 8px rgba(245, 158, 11, 0.4);
            cursor: pointer;
            transition: all 0.2s ease;
        }

        .pay-highlight:hover {
            transform: scale(1.05);
            box-shadow: 0 4px 12px rgba(245, 158, 11, 0.6);
        }

        .pay-hint {
            font-size: 0.75rem;
            color: #10b981;
            font-weight: 600;
        }

        .country-tag {
            display: inline-block;
            font-weight: 900;
            padding: 0.2rem 0.5rem;
            border-radius: 6px;
            font-size: 0.8rem;
            letter-spacing: 0.5px;
            margin: 0 0.15rem;
            box-shadow: 0 2px 6px rgba(0,0,0,0.15);
        }

        .country-uganda {
            background: linear-gradient(135deg, #FCDC04 0%, #000000 50%, #E03C31 100%);
            color: #fff;
            text-shadow: 0 1px 2px rgba(0,0,0,0.5);
        }

        .country-tanzania {
            background: linear-gradient(135deg, #1EB53A 0%, #FCD116 50%, #00A3DD 100%);
            color: #000;
        }

        .country-sa {
            background: linear-gradient(135deg, #E03B31 0%, #028B2C 30%, #002395 60%, #FFB612 100%);
            color: #fff;
            text-shadow: 0 1px 2px rgba(0,0,0,0.5);
        }

        .country-world {
            background: linear-gradient(135deg, #0077FF 0%, #00A3DD 100%);
            color: #fff;
            font-size: 0.9rem;
        }

        .odds-highlight {
            display: inline-block;
            background: linear-gradient(135deg, #8B5CF6 0%, #A78BFA 50%, #7C3AED 100%);
            color: #fff;
            font-weight: 900;
            padding: 0.2rem 0.5rem;
            border-radius: 6px;
            font-size: 0.85rem;
            letter-spacing: 0.5px;
            text-shadow: 0 1px 2px rgba(0,0,0,0.3);
            box-shadow: 0 2px 8px rgba(139, 92, 246, 0.4);
            animation: pulse-purple 2s ease-in-out infinite;
        }

        .wins-highlight {
            display: inline-block;
            background: linear-gradient(135deg, #F59E0B 0%, #FBBF24 50%, #D97706 100%);
            color: #fff;
            font-weight: 900;
            padding: 0.2rem 0.5rem;
            border-radius: 6px;
            font-size: 0.85rem;
            letter-spacing: 0.5px;
            text-shadow: 0 1px 2px rgba(0,0,0,0.3);
            box-shadow: 0 2px 8px rgba(245, 158, 11, 0.4);
            animation: pulse-gold 2s ease-in-out infinite;
        }

        @keyframes pulse-purple {
            0%, 100% { transform: scale(1); box-shadow: 0 2px 8px rgba(139, 92, 246, 0.4); }
            50% { transform: scale(1.05); box-shadow: 0 4px 12px rgba(139, 92, 246, 0.6); }
        }

        .profits-highlight {
            display: inline-block;
            background: linear-gradient(135deg, #10B981 0%, #34D399 50%, #059669 100%);
            color: #fff;
            font-weight: 800;
            padding: 0.25rem 0.6rem;
            border-radius: 8px;
            font-size: 0.85rem;
            letter-spacing: 0.3px;
            text-shadow: 0 1px 2px rgba(0,0,0,0.3);
            box-shadow: 0 3px 10px rgba(16, 185, 129, 0.5);
            animation: pulse-green 2s ease-in-out infinite;
        }

        @keyframes pulse-green {
            0%, 100% { transform: scale(1); box-shadow: 0 3px 10px rgba(16, 185, 129, 0.5); }
            50% { transform: scale(1.05); box-shadow: 0 5px 15px rgba(16, 185, 129, 0.7); }
        }

        .draws-highlight {
            display: inline-block;
            background: linear-gradient(135deg, #0EA5E9 0%, #38BDF8 50%, #0284C7 100%);
            color: #fff;
            font-weight: 800;
            padding: 0.25rem 0.6rem;
            border-radius: 8px;
            font-size: 0.85rem;
            letter-spacing: 0.3px;
            text-shadow: 0 1px 2px rgba(0,0,0,0.3);
            box-shadow: 0 3px 10px rgba(14, 165, 233, 0.5);
            animation: pulse-blue 2s ease-in-out infinite;
        }

        @keyframes pulse-blue {
            0%, 100% { transform: scale(1); box-shadow: 0 3px 10px rgba(14, 165, 233, 0.5); }
            50% { transform: scale(1.05); box-shadow: 0 5px 15px rgba(14, 165, 233, 0.7); }
        }

        .footer-cta-btn {
            display: block;
            text-align: center;
            text-decoration: none;
            font-weight: 900;
            font-size: 0.95rem;
            padding: 1rem 1.5rem;
            border-radius: 14px;
            transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
            border: 2px solid transparent;
            position: relative;
            z-index: 1;
            width: 100%;
        }

        .footer-cta-btn.primary {
            background: linear-gradient(135deg, #10b981 0%, #059669 100%);
            color: white;
            border-color: transparent;
            box-shadow: 0 6px 20px rgba(16, 185, 129, 0.3);
        }

        .footer-cta-btn.primary:hover {
            transform: translateY(-3px);
            box-shadow: 0 10px 30px rgba(16, 185, 129, 0.45);
        }

        .footer-social-proof {
            display: grid;
            grid-template-columns: repeat(4, minmax(0, 1fr));
            gap: 1.5rem;
            padding: 2rem 0;
            border-top: 1px solid rgba(255,255,255,0.1);
            border-bottom: 1px solid rgba(255,255,255,0.1);
            margin-bottom: 2rem;
            position: relative;
            overflow: hidden;
        }

        .footer-social-proof::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            height: 2px;
            background: linear-gradient(90deg, transparent, #10b981, transparent);
            animation: shimmer 3s infinite;
        }

        @keyframes shimmer {
            0% { transform: translateX(-100%); }
            100% { transform: translateX(100%); }
        }

        .proof-stat {
            text-align: center;
            position: relative;
            padding: 1rem;
            border-radius: 16px;
            background: rgba(255,255,255,0.03);
            border: 1px solid rgba(255,255,255,0.06);
            transition: all 0.35s cubic-bezier(0.4, 0, 0.2, 1);
            overflow: hidden;
        }

        .proof-stat::before {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: linear-gradient(90deg, transparent, rgba(255,255,255,0.08), transparent);
            transition: left 0.5s ease;
        }

        .proof-stat:hover::before {
            left: 100%;
        }

        .proof-stat:hover {
            transform: translateY(-5px);
            background: rgba(255,255,255,0.06);
            border-color: rgba(16, 185, 129, 0.25);
            box-shadow: 0 10px 30px rgba(16, 185, 129, 0.12);
        }

        .stat-icon {
            display: flex;
            justify-content: center;
            align-items: center;
            width: 48px;
            height: 48px;
            margin: 0 auto 0.75rem;
            background: linear-gradient(135deg, rgba(16, 185, 129, 0.15) 0%, rgba(16, 185, 129, 0.05) 100%);
            border-radius: 14px;
            border: 1px solid rgba(16, 185, 129, 0.25);
            position: relative;
        }

        .stat-icon svg {
            width: 24px;
            height: 24px;
            color: #10b981;
            filter: drop-shadow(0 0 8px rgba(16, 185, 129, 0.4));
        }

        .stat-number {
            display: block;
            font-size: 2.4rem;
            font-weight: 900;
            color: #10b981;
            margin-bottom: 0.35rem;
            line-height: 1;
            letter-spacing: -1px;
            text-shadow: 0 0 20px rgba(16, 185, 129, 0.3);
            font-variant-numeric: tabular-nums;
            overflow-wrap: anywhere;
            word-break: break-word;
        }

        .stat-label {
            font-size: 0.8rem;
            color: rgba(255,255,255,0.75);
            text-transform: uppercase;
            letter-spacing: 1.2px;
            font-weight: 700;
            line-height: 1.4;
            overflow-wrap: anywhere;
            word-break: break-word;
        }

        .footer-bottom {
            display: grid;
            grid-template-columns: 2fr 1fr;
            gap: 3rem;
            margin-bottom: 2rem;
        }

        .footer-links {
            display: grid;
            grid-template-columns: repeat(4, minmax(0, 1fr));
            gap: 2rem;
        }

        .footer-column h4 {
            font-size: 1rem;
            margin: 0 0 1rem;
            color: var(--white);
            font-weight: 800;
        }

        .footer-column a {
            display: block;
            color: rgba(255,255,255,0.7);
            text-decoration: none;
            font-size: 0.9rem;
            margin-bottom: 0.6rem;
            transition: color 0.2s;
            font-weight: 500;
        }

        .footer-column a:hover {
            color: #10b981;
        }

        .footer-guarantees {
            display: grid;
            gap: 1rem;
        }

        .guarantee-item {
            display: flex;
            align-items: flex-start;
            gap: 0.9rem;
            background: rgba(255,255,255,0.03);
            padding: 0.9rem 1.1rem;
            border-radius: 12px;
            border: 1px solid rgba(255,255,255,0.08);
        }

        .guarantee-item svg {
            color: #10b981;
            flex-shrink: 0;
            margin-top: 2px;
        }

        .guarantee-item strong {
            display: block;
            font-size: 0.92rem;
            color: var(--white);
            margin-bottom: 0.2rem;
        }

        .guarantee-item p {
            margin: 0;
            font-size: 0.8rem;
            color: rgba(255,255,255,0.6);
        }

        .footer-bottom-links {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 1.5rem 0;
            border-top: 1px solid rgba(255,255,255,0.1);
            font-size: 0.85rem;
            color: rgba(255,255,255,0.6);
        }

        .footer-legal {
            display: flex;
            gap: 1.5rem;
        }

        .footer-legal a {
            color: rgba(255,255,255,0.6);
            text-decoration: none;
            transition: color 0.2s;
        }

        .footer-legal a:hover {
            color: #10b981;
        }

          @media (max-width: 1100px) {
              .footer-top {
                  grid-template-columns: 1fr;
                  gap: 2.5rem;
              }

              .footer-pricing-cards {
                  grid-template-columns: repeat(2, minmax(0, 1fr));
                  gap: 1.25rem;
              }

              .pricing-card {
                  min-height: auto;
                  padding: 1.75rem;
              }

              .amount {
                  font-size: 3rem;
              }

               .footer-social-proof {
                   grid-template-columns: repeat(2, minmax(0, 1fr));
                   gap: 1rem;
               }

               .stat-number {
                   font-size: 2rem;
                   overflow-wrap: anywhere;
                   word-break: break-word;
               }

               .stat-label {
                   font-size: 0.75rem;
                   overflow-wrap: anywhere;
                   word-break: break-word;
               }

              .stat-icon {
                  width: 40px;
                  height: 40px;
              }

              .stat-icon svg {
                  width: 20px;
                  height: 20px;
              }
          }

          @media (max-width: 768px) {
              .footer-pricing-cards {
                  grid-template-columns: 1fr;
                  gap: 1.25rem;
              }

              .pricing-card {
                  min-height: auto;
                  padding: 1.5rem;
              }

              .pricing-title {
                  font-size: 1.35rem;
              }

              .amount {
                  font-size: 2.8rem;
              }

              .pricing-features li {
                  font-size: 0.88rem;
              }

              .footer-cta-btn {
                  padding: 0.9rem 1.25rem;
                  font-size: 0.95rem;
              }

              .footer-social-proof {
                  grid-template-columns: repeat(4, minmax(0, 1fr));
                  gap: 1rem;
                  padding: 1.5rem 0;
              }

              .proof-stat {
                  padding: 0.75rem;
              }

              .stat-icon {
                  width: 32px;
                  height: 32px;
                  margin-bottom: 0.4rem;
              }

              .stat-icon svg {
                  width: 16px;
                  height: 16px;
              }

              .stat-number {
                  font-size: 1.6rem;
                  overflow-wrap: anywhere;
                  word-break: break-word;
              }

              .stat-label {
                  font-size: 0.7rem;
                  letter-spacing: 1px;
                  overflow-wrap: anywhere;
                  word-break: break-word;
              }
          }

          @media (max-width: 480px) {
              .footer {
                  padding: 2rem 0 0;
              }

              .footer-features {
                  grid-template-columns: 1fr;
              }

              .footer-pricing-cards {
                  grid-template-columns: 1fr;
                  gap: 1rem;
              }

              .pricing-card {
                  padding: 1.25rem 1rem;
              }

              .pricing-label {
                  font-size: 0.65rem;
                  padding: 0.3rem 0.7rem;
              }

              .pricing-title {
                  font-size: 1.2rem;
              }

              .pricing-desc {
                  font-size: 0.85rem;
              }

              .pricing-price {
                  padding: 1rem 0;
                  margin-bottom: 1.25rem;
              }

              .amount {
                  font-size: 2.5rem;
              }

              .period {
                  font-size: 0.85rem;
              }

              .pricing-features {
                  gap: 0.6rem;
                  margin-bottom: 1.5rem;
              }

              .pricing-features li {
                  font-size: 0.85rem;
              }

              .footer-cta-btn {
                  padding: 0.85rem 1.1rem;
                  font-size: 0.9rem;
                  font-weight: 800;
              }

              .footer-social-proof {
                  grid-template-columns: repeat(4, minmax(0, 1fr));
                  gap: 0.5rem;
                  padding: 1.25rem 0;
              }

              .proof-stat {
                  padding: 0.5rem;
                  min-width: 0;
              }

              .stat-icon {
                  width: 28px;
                  height: 28px;
                  margin-bottom: 0.3rem;
              }

              .stat-icon svg {
                  width: 14px;
                  height: 14px;
              }

              .stat-number {
                  font-size: 1.4rem;
                  margin-bottom: 0.15rem;
                  overflow-wrap: anywhere;
                  word-break: break-word;
              }

              .stat-label {
                  font-size: 0.65rem;
                  letter-spacing: 0.8px;
                  overflow-wrap: anywhere;
                  word-break: break-word;
              }

              .stat-label {
                  font-size: 0.65rem;
                  letter-spacing: 0.8px;
              }

              .footer-links {
                  grid-template-columns: 1fr;
                  gap: 1.5rem;
              }

              .footer-bottom-links {
                  flex-direction: column;
                  gap: 1rem;
                  text-align: center;
              }

              .footer-guarantees {
                  gap: 0.8rem;
              }
          }

        .free-tips-section {
            padding: 3rem 0;
            background: linear-gradient(180deg, #f8fbff 0%, var(--bg-light) 100%);
        }

        .free-tips-card {
            background: var(--card);
            border-radius: 24px;
            box-shadow: 0 20px 60px rgba(6, 10, 26, 0.12);
            overflow: hidden;
            border: 1px solid rgba(15, 23, 42, 0.06);
        }

        .free-tips-header {
            background: linear-gradient(135deg, #2563eb 0%, #1d4ed8 50%, #1e40af 100%);
            padding: 1.5rem 2rem;
            color: var(--white);
            position: relative;
            overflow: hidden;
            text-align: center;
        }

        .free-tips-header::before {
            content: '';
            position: absolute;
            top: -50%;
            right: -10%;
            width: 200px;
            height: 200px;
            background: rgba(255,255,255,0.1);
            border-radius: 50%;
            filter: blur(40px);
        }

        .free-tips-title {
            margin: 0;
            font-size: 1.5rem;
            font-weight: 900;
            letter-spacing: -0.3px;
            position: relative;
            z-index: 1;
        }

        .free-tips-subtitle {
            margin: 0.4rem 0 0;
            font-size: 0.9rem;
            opacity: 0.85;
            font-weight: 500;
            position: relative;
            z-index: 1;
        }

        .free-tips-buttons {
            display: flex;
            gap: 0.75rem;
            padding: 1.25rem 2rem;
            border-bottom: 1px solid #e2e8f0;
            background: linear-gradient(180deg, #ffffff 0%, #f8fafc 100%);
            justify-content: center;
        }

        .date-btn {
            padding: 0.7rem 1.5rem;
            border: 2px solid #e2e8f0;
            border-radius: 12px;
            background: var(--white);
            color: #64748b;
            font-weight: 700;
            font-size: 0.9rem;
            cursor: pointer;
            transition: all 0.25s cubic-bezier(0.4, 0, 0.2, 1);
            font-family: system-ui, -apple-system, sans-serif;
        }

        .date-btn:hover {
            border-color: #2563eb;
            color: #2563eb;
            transform: translateY(-2px);
            box-shadow: 0 4px 12px rgba(37, 99, 235, 0.15);
        }

        .date-btn.active {
            background: linear-gradient(135deg, #2563eb 0%, #1d4ed8 100%);
            border-color: #2563eb;
            color: var(--white);
            box-shadow: 0 4px 15px rgba(37, 99, 235, 0.35);
            transform: translateY(-2px);
        }

        .tips-table-container {
            padding: 1.5rem 2rem 2rem;
        }

        .tips-list {
            display: none;
        }

        .tips-table {
            width: 100%;
            border-collapse: separate;
            border-spacing: 0;
        }

        .tips-table th {
            text-align: left;
            padding: 0.6rem 0.5rem;
            font-size: 0.7rem;
            font-weight: 800;
            color: #94a3b8;
            text-transform: uppercase;
            letter-spacing: 1px;
            border-bottom: 2px solid #f1f5f9;
            font-family: system-ui, -apple-system, sans-serif;
        }

        .tips-table td {
            padding: 0.65rem 0.5rem;
            font-size: 0.85rem;
            font-weight: 600;
            color: #1e293b;
            border-bottom: 1px solid #f1f5f9;
            font-family: system-ui, -apple-system, sans-serif;
        }

        .tips-table tbody tr {
            transition: all 0.2s;
        }

        .tips-table tbody tr:hover {
            background: linear-gradient(90deg, #f8fafc 0%, #f0f9ff 100%);
        }

        .tips-table tbody tr:last-child td {
            border-bottom: none;
        }

        .tips-table .match-col {
            font-weight: 700;
            color: #0f172a;
        }

        .tips-table .tip-col {
            font-weight: 800;
            color: #2563eb;
            background: #eff6ff;
            padding: 0.4rem 0.7rem;
            border-radius: 6px;
            font-size: 0.85rem;
        }

        .tips-table .result-col {
            font-weight: 700;
            font-family: 'Courier New', monospace;
        }

        .tips-table .status-col {
            text-align: center;
        }

        .status-badge {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            padding: 0.35rem 0.7rem;
            border-radius: 20px;
            font-size: 0.75rem;
            font-weight: 800;
            text-transform: uppercase;
            letter-spacing: 0.5px;
        }

        .status-badge.win {
            background: linear-gradient(135deg, #dcfce7 0%, #bbf7d0 100%);
            color: #166534;
        }

        .status-badge.loss {
            background: linear-gradient(135deg, #fee2e2 0%, #fecaca 100%);
            color: #991b1b;
        }

        .status-badge.pending {
            background: linear-gradient(135deg, #fef3c7 0%, #fde68a 100%);
            color: #92400e;
        }

        .tips-stats {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 1rem;
            margin-bottom: 1.5rem;
            padding: 1rem;
            background: linear-gradient(135deg, #f8fafc 0%, #f1f5f9 100%);
            border-radius: 12px;
        }

        .stat-item {
            text-align: center;
            padding: 0.5rem;
        }

        .stat-value {
            font-size: 1.5rem;
            font-weight: 900;
            color: #0f172a;
        }

        .stat-label {
            font-size: 0.75rem;
            color: #64748b;
            font-weight: 600;
            text-transform: uppercase;
            letter-spacing: 0.5px;
        }

        .stat-item.wins .stat-value {
            color: #16a34a;
        }

        .stat-item.pending .stat-value {
            color: #f59e0b;
        }

        @media (max-width: 600px) {
            .free-tips-buttons {
                flex-wrap: wrap;
                padding: 0.75rem;
                gap: 0.5rem;
            }

            .date-btn {
                flex: 1;
                min-width: 90px;
                text-align: center;
                padding: 0.65rem 0.5rem;
                font-size: 0.8rem;
            }

            .tips-table-container {
                padding: 0.5rem;
            }

            .tips-table th,
            .tips-table td {
                padding: 0.5rem 0.4rem;
                font-size: 0.8rem;
            }

            .tips-table {
                display: none;
            }
            
            .tips-table td:first-child {
                font-size: 0.75rem;
            }
            
            .tips-table .tip-col {
                padding: 0.3rem 0.5rem;
                font-size: 0.75rem;
            }

            .tips-list {
                display: block;
            }

            .tips-stats {
                grid-template-columns: repeat(3, 1fr);
                gap: 0.5rem;
            }

            .stat-item {
                padding: 0.4rem 0.25rem;
            }

            .stat-value {
                font-size: 1.2rem;
            }

            .stat-label {
                font-size: 0.65rem;
            }

            .free-tips-header,
            .free-tips-buttons,
            .tips-table-container {
                padding-left: 1rem;
                padding-right: 1rem;
            }

            .tip-card {
                background: linear-gradient(135deg, #f8fafc 0%, #f1f5f9 100%);
                border: 1px solid #e2e8f0;
                border-radius: 12px;
                padding: 1rem;
                margin-bottom: 0.75rem;
            }

            .tip-card-header {
                display: flex;
                justify-content: space-between;
                align-items: center;
                margin-bottom: 0.5rem;
            }

            .tip-card-date {
                font-size: 0.75rem;
                color: #64748b;
                font-weight: 600;
            }

            .tip-card-match {
                font-size: 0.95rem;
                font-weight: 700;
                color: #0f172a;
                margin-bottom: 0.5rem;
            }

            .tip-card-details {
                display: flex;
                justify-content: space-between;
                align-items: center;
            }

            .tip-card-tip {
                background: #2563eb;
                color: white;
                padding: 0.3rem 0.6rem;
                border-radius: 6px;
                font-size: 0.8rem;
                font-weight: 700;
            }

            .tip-card-result {
                font-weight: 700;
                font-family: 'Courier New', monospace;
                font-size: 0.9rem;
            }
        }
    </style>

</head>
<body>
    <nav class="nav-wrap">
        <div class="container" style="display: flex; justify-content: space-between; align-items: center;">
            <a href="index.php" class="nav-logo">
                <span class="nav-logo-text"><span>Realtime</span><span>Tips</span></span>
            </a>
            <div class="nav-menu">
                <a href="index.php" class="nav-link">Home</a>
                <div class="nav-dropdown">
                    <span class="nav-dropdown-toggle">Premium Tips <svg width="10" height="10" viewBox="0 0 10 10" fill="currentColor"><path d="M1 3L5 7L9 3" stroke="currentColor" stroke-width="2" fill="none"/></svg></span>
                    <div class="nav-dropdown-menu">
                        <a href="Tips/goldentips.php">Golden Fixed (45+ odds)</a>
                        <a href="Tips/2draws.php">2 Draws (15+ odds)</a>
                    </div>
                </div>
                <a href="Jptips/index.php" class="nav-link">Jackpots</a>
                <a href="<?= htmlspecialchars($telegramLink, ENT_QUOTES, 'UTF-8') ?>" target="_blank" class="nav-link">Blog</a>
                <a href="<?= htmlspecialchars($whatsappLink, ENT_QUOTES, 'UTF-8') ?>" target="_blank" class="nav-cta">Get VIP</a>
            </div>
            <button class="nav-mobile-toggle" aria-label="Menu" id="mobileToggle">
                <span></span>
                <span></span>
                <span style="width: 16px;"></span>
            </button>
        </div>
    </nav>

    <div class="mobile-menu" id="mobileMenu">
        <button class="mobile-menu-close" id="mobileMenuClose">&times;</button>
        <a href="index.php" class="mobile-home">Home</a>
        <div class="nav-dropdown-toggle" id="mobilePremiumToggle">Premium Tips</div>
        <div class="mobile-dropdown" id="mobilePremiumDropdown">
            <a href="Tips/goldentips.php">Golden Fixed (45+ odds)</a>
            <a href="Tips/2draws.php">2 Draws (15+ odds)</a>
        </div>
        <a href="#">Jackpots</a>
        <a href="<?= htmlspecialchars($telegramLink, ENT_QUOTES, 'UTF-8') ?>" target="_blank">Blog</a>
        <a href="<?= htmlspecialchars($whatsappLink, ENT_QUOTES, 'UTF-8') ?>" target="_blank" class="nav-cta-mobile">Get VIP</a>
    </div>

    <header class="hero-wrap">
        <div class="container hero">
<section>
                <span class="hero-badge">Realtime Tips</span>
                <h1>Expert Football Tips.<br>Proven Results.</h1>
                <p style="color: rgba(255,255,255,0.85); font-size: 1.1rem; margin-top: 1rem; max-width: 55ch;">
                    Get daily expert-curated tips with <strong>free daily picks</strong> to build trust — then go premium for bigger wins.
                </p>
            </section>

            <aside class="hero-card">
                <h2>What We Offer</h2>
                <ul>
                    <li>Free daily tips — posted every day</li>
                    <li>Premium VIP packages — 45+ odds</li>
                    <li>Early access to anticipation picks</li>
                </ul>
</aside>
        </div>

        <div class="container trust-row">
            <article class="trust-item trust-item--free">
                <span class="free-tip-title">Today&rsquo;s Free Tip</span>

<div class="free-meta">
                    <div class="meta-pill">
                        <span class="meta-label">Date</span>
                        <span class="meta-value meta-value--date"><?= htmlspecialchars($defaultFreeTipDate, ENT_QUOTES, 'UTF-8') ?></span>
                        <span class="meta-label meta-label--ml">Time</span>
                        <span class="meta-value meta-value--date"><?= htmlspecialchars($freeTipTime, ENT_QUOTES, 'UTF-8') ?></span>
                    </div>
                    <div class="meta-pill meta-pill--match">
                        <span class="meta-label">Match</span>
                        <span class="meta-value match-value"><?= htmlspecialchars($freeTipMatchTitle, ENT_QUOTES, 'UTF-8') ?></span>
                    </div>
                    <div class="meta-pill meta-pill--centered">
                        <span class="meta-value tip-value"><?= htmlspecialchars($freeTipLabel, ENT_QUOTES, 'UTF-8') ?></span>
                    </div>
                    <div class="meta-pill">
                        <span class="meta-label">Join Our Channel</span>
                        <span class="meta-value">
                            <a href="<?= htmlspecialchars($telegramLink, ENT_QUOTES, 'UTF-8') ?>" target="_blank" rel="noopener noreferrer">
                                <?= htmlspecialchars($freeTipPostedToLabel, ENT_QUOTES, 'UTF-8') ?>
                            </a>
                        </span>
                    </div>
                </div>
            </article>

            <article class="trust-item trust-item--early">
                <h4 class="early-title">Early Anticipation</h4>
                <small class="early-subtitle">Posted ahead of kickoff</small>
                <div class="early-pricing">
                    <div class="early-row">
                        <span class="early-plan"><strong>Golden Fixed Tips</strong> - 45+ odds</span>
                        <span class="early-price">Ksh 525</span>
                    </div>
                     <div class="early-row">
                         <span class="early-plan"><strong>2 Draw Games</strong> - 15+ odds</span>
                         <span class="early-price">Ksh 325</span>
                     </div>
                     <div class="early-row">
                         <span class="early-plan"><strong>2 +odds</strong></span>
                         <span class="early-price">Ksh 100</span>
                     </div>
                 </div>
                <div class="early-payment">
                    <div class="early-payment-label">Payment Method</div>
                    <div class="early-payment-info">
                        <span class="early-payment-method">Pay Till (Buy Goods)</span>
                        <div class="early-copy-wrapper">
                            <span class="early-copy-hint">(Click to copy)</span>
                            <span class="inline-pay-till-copy" data-pay-till="5438677">5438677</span>
                        </div>
                    </div>
                </div>
            </article>

            <article class="trust-item trust-item--international">
                <h4 class="intl-title">International Payments</h4>
                <small class="intl-subtitle">Accepted worldwide</small>
                <div class="intl-pricing">
                     <div class="intl-row">
                         <span>Golden Fixed (45+ odds)</span>
                         <span class="intl-price">$8</span>
                     </div>
                     <div class="intl-row">
                         <span>2 + odds</span>
                         <span class="intl-price">$2</span>
                     </div>
                     <div class="intl-row">
                         <span>2 Draws (15+ odds)</span>
                         <span class="intl-price">$5</span>
                     </div>
                </div>
                <div class="intl-payment">
                    <div class="intl-payment-row">
                        <span class="intl-payment-label">Airtel Money</span>
                        <span class="intl-payment-value">254739162763</span>
                    </div>
                    <div class="intl-payment-row">
                        <span class="intl-payment-label">PayPal</span>
                        <span class="intl-payment-value">bitkwach@gmail.com</span>
                    </div>
                    <div class="intl-payment-row">
                        <span class="intl-payment-label">Skrill</span>
                        <span class="intl-payment-value">bitkwach@gmail.com</span>
                    </div>
                </div>
            </article>

            <div class="trust-cta">
                <a class="btn btn-primary" href="Tips/goldentips.php" target="_blank" rel="noopener noreferrer">Get Golden Fixed Tips by clicking Here</a>
                <a class="btn btn-ghost" href="Tips/2odds.php" target="_blank" rel="noopener noreferrer">click here to Get 2+odds Daily</a>
                <a class="btn btn-accent" href="Tips/2draws.php" target="_blank" rel="noopener noreferrer">click here to Get Today 2 Draw Tips</a>
                <a class="btn btn-intl" href="international-payment.php" target="_blank" rel="noopener noreferrer">International Subscribers click here</a>
            </div>
        </div>
    </header>

    <main class="free-tips-section">
        <div class="container">
            <div class="free-tips-card">
                <div class="free-tips-header">
                    <h2 class="free-tips-title">Free Guaranteed Tips</h2>
                    <p class="free-tips-subtitle">Daily expert predictions with proven track record</p>
                </div>
                <div class="free-tips-buttons">
                    <button class="date-btn" data-date="yesterday">Yesterday</button>
                    <button class="date-btn active" data-date="today">Today</button>
                    <button class="date-btn" data-date="tomorrow">Tomorrow</button>
                </div>
                <div class="tips-table-container">
                    <div class="tips-stats">
                        <div class="stat-item wins">
                            <div class="stat-value">12</div>
                            <div class="stat-label">Wins</div>
                        </div>
                        <div class="stat-item">
                            <div class="stat-value">14</div>
                            <div class="stat-label">Total Tips</div>
                        </div>
                        <div class="stat-item">
                            <div class="stat-value">86%</div>
                            <div class="stat-label">Accuracy</div>
                        </div>
                    </div>
                    <table class="tips-table" id="tipsTable">
<thead id="tipsTableHead">
                             <tr>
                                 <th>Date</th>
                                 <th>Fixture</th>
                                 <th>Tip</th>
                                 <th style="display: none;">Result</th>
                                 <th style="display: none;">Status</th>
                             </tr>
                        </thead>
                        <tbody id="tipsBody">

<tr data-date="today">
                                <td>17/04</td>
                                <td class="match-col">Aston Villa vs Bologna FC</td>
                                <td class="tip-col">1</td>
                            </tr>
                            <tr data-date="today">
                                <td>17/04</td>
                                <td class="match-col">Real Madrid vs Athletic Bilbao</td>
                                <td class="tip-col">Over 2.5</td>
                            </tr>
                            <tr data-date="today">
                                <td>17/04</td>
                                <td class="match-col">Inter Milan vs AC Milan</td>
                                <td class="tip-col">BTTS</td>
                            </tr>
                            <tr data-date="tomorrow" style="display: none;">
                                <td>18/04</td>
                                <td class="match-col">Bayern vs Dortmund</td>
                                <td class="tip-col">1</td>
                                <td class="result-col">-</td>
                                <td class="status-col"><span class="status-badge pending">Pending</span></td>
                            </tr>
                        </thead>
                        <tbody id="tipsBody">
<tr data-date="yesterday" style="display: none;">
                                <td>16/04</td>
                                <td class="match-col">Man City vs Crystal Palace</td>
                                <td class="tip-col">1</td>
                                <td class="result-col">5:2</td>
                                <td class="status-col"><span class="status-badge win">Won</span></td>
                            </tr>
                            <tr data-date="yesterday" style="display: none;">
                                <td>16/04</td>
                                <td class="match-col">Liverpool vs West Ham</td>
                                <td class="tip-col">Over 2.5</td>
                                <td class="result-col">2:1</td>
                                <td class="status-col"><span class="status-badge win">Won</span></td>
                            </tr>
                            <tr data-date="yesterday" style="display: none;">
                                <td>16/04</td>
                                <td class="match-col">Tottenham vs Nottingham</td>
                                <td class="tip-col">GG</td>
                                <td class="result-col">3:1</td>
                                <td class="status-col"><span class="status-badge win">Won</span></td>
                            </tr>
                            <tr data-date="tomorrow" style="display: none;">
                                <td>18/04</td>
                                <td class="match-col">Arsenal vs Brentford</td>
                                <td class="tip-col">1</td>
                                <td class="result-col">-</td>
                                <td class="status-col"><span class="status-badge pending">Pending</span></td>
                            </tr>
                            <tr data-date="tomorrow" style="display: none;">
                                <td>18/04</td>
                                <td class="match-col">Chelsea vs Everton</td>
                                <td class="tip-col">Over 1.5</td>
                                <td class="result-col">-</td>
                                <td class="status-col"><span class="status-badge pending">Pending</span></td>
                            </tr>
                            <tr data-date="tomorrow" style="display: none;">
                                <td>18/04</td>
                                <td class="match-col">Bayern vs Dortmund</td>
                                <td class="tip-col">1</td>
                                <td class="result-col">-</td>
                                <td class="status-col"><span class="status-badge pending">Pending</span></td>
                            </tr>
<tr data-date="today">
                                <td>17/04</td>
                                <td class="match-col">Aston Villa vs Bologna FC</td>
                                <td class="tip-col">1</td>
                            </tr>
                            <tr data-date="tomorrow" style="display: none;">
                                <td>18/04</td>
                                <td class="match-col">Chelsea vs Everton</td>
                                <td class="tip-col">Over 1.5</td>
                                <td class="result-col">-</td>
                                <td class="status-col"><span class="status-badge pending">Pending</span></td>
                            </tr>
                            <tr data-date="tomorrow" style="display: none;">
                                <td>18/04</td>
                                <td class="match-col">Bayern vs Dortmund</td>
                                <td class="tip-col">1</td>
                            </tr>
                        </tbody>
                    </table>
                    <div class="tips-list" id="tipsList">
                        <div class="tip-card" data-date="yesterday" style="display: none;">
                            <div class="tip-card-header">
                                <span class="tip-card-date">16/04</span>
                                <span class="status-badge win">Won</span>
                            </div>
                            <div class="tip-card-match">Man City vs Crystal Palace</div>
                            <div class="tip-card-details">
                                <span class="tip-card-tip">1</span>
                                <span class="tip-card-result">5:2</span>
                            </div>
                        </div>
                        <div class="tip-card" data-date="yesterday" style="display: none;">
                            <div class="tip-card-header">
                                <span class="tip-card-date">16/04</span>
                                <span class="status-badge win">Won</span>
                            </div>
                            <div class="tip-card-match">Liverpool vs West Ham</div>
                            <div class="tip-card-details">
                                <span class="tip-card-tip">Over 2.5</span>
                                <span class="tip-card-result">2:1</span>
                            </div>
                        </div>
                        <div class="tip-card" data-date="yesterday" style="display: none;">
                            <div class="tip-card-header">
                                <span class="tip-card-date">16/04</span>
                                <span class="status-badge win">Won</span>
                            </div>
                            <div class="tip-card-match">Tottenham vs Nottingham</div>
                            <div class="tip-card-details">
                                <span class="tip-card-tip">GG</span>
                                <span class="tip-card-result">3:1</span>
                            </div>
                        </div>
                        <div class="tip-card" data-date="today">
                            <div class="tip-card-header">
                                <span class="tip-card-date">17/04</span>
                                <span class="status-badge win">Won</span>
                            </div>
                            <div class="tip-card-match">Aston Villa vs Bologna FC</div>
                            <div class="tip-card-details">
                                <span class="tip-card-tip">1</span>
                                <span class="tip-card-result">2:1</span>
                            </div>
                        </div>
                        <div class="tip-card" data-date="today">
                            <div class="tip-card-header">
                                <span class="tip-card-date">17/04</span>
                                <span class="status-badge win">Won</span>
                            </div>
                            <div class="tip-card-match">Real Madrid vs Athletic Bilbao</div>
                            <div class="tip-card-details">
                                <span class="tip-card-tip">Over 2.5</span>
                                <span class="tip-card-result">3:0</span>
                            </div>
                        </div>
                        <div class="tip-card" data-date="today">
                            <div class="tip-card-header">
                                <span class="tip-card-date">17/04</span>
                                <span class="status-badge win">Won</span>
                            </div>
                            <div class="tip-card-match">Inter Milan vs AC Milan</div>
                            <div class="tip-card-details">
                                <span class="tip-card-tip">BTTS</span>
                                <span class="tip-card-result">2:2</span>
                            </div>
                        </div>
                        <div class="tip-card" data-date="today">
                            <div class="tip-card-header">
                                <span class="tip-card-date">17/04</span>
                                <span class="status-badge win">Won</span>
                            </div>
                            <div class="tip-card-match">PSG vs Monaco</div>
                            <div class="tip-card-details">
                                <span class="tip-card-tip">1</span>
                                <span class="tip-card-result">1:0</span>
                            </div>
                        </div>
                        <div class="tip-card" data-date="tomorrow" style="display: none;">
                            <div class="tip-card-header">
                                <span class="tip-card-date">18/04</span>
                                <span class="status-badge pending">Pending</span>
                            </div>
                            <div class="tip-card-match">Arsenal vs Brentford</div>
                            <div class="tip-card-details">
                                <span class="tip-card-tip">1</span>
                                <span class="tip-card-result">-</span>
                            </div>
                        </div>
                        <div class="tip-card" data-date="tomorrow" style="display: none;">
                            <div class="tip-card-header">
                                <span class="tip-card-date">18/04</span>
                                <span class="status-badge pending">Pending</span>
                            </div>
                            <div class="tip-card-match">Chelsea vs Everton</div>
                            <div class="tip-card-details">
                                <span class="tip-card-tip">Over 1.5</span>
                                <span class="tip-card-result">-</span>
                            </div>
                        </div>
                        <div class="tip-card" data-date="tomorrow" style="display: none;">
                            <div class="tip-card-header">
                                <span class="tip-card-date">18/04</span>
                                <span class="status-badge pending">Pending</span>
                            </div>
                            <div class="tip-card-match">Bayern vs Dortmund</div>
                            <div class="tip-card-details">
                                <span class="tip-card-tip">1</span>
                                <span class="tip-card-result">-</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <footer class="footer">
        <div class="container">
            <div class="footer-top">
                <div class="footer-cta-section">
                    <div class="footer-badge">Limited Time Offer</div>
                    <h2 class="footer-headline">Ready to Start Winning Consistently?</h2>
                    <p class="footer-subtext">Join <strong>2,847+</strong> members who trust our expert predictions. Get premium access today and transform your betting strategy.</p>
                    <div class="footer-features">
                        <div class="footer-feature">
                            <svg viewBox="0 0 24 24" width="20" height="20" fill="currentColor"><path d="M9 16.17L4.83 12l-1.42 1.41L9 19 21 7l-1.41-1.41L9 16.17z"/></svg>
                            <span>Daily expert-curated tips</span>
                        </div>
                        <div class="footer-feature">
                            <svg viewBox="0 0 24 24" width="20" height="20" fill="currentColor"><path d="M9 16.17L4.83 12l-1.42 1.41L9 19 21 7l-1.41-1.41L9 16.17z"/></svg>
                            <span>90%+ accuracy track record</span>
                        </div>
                        <div class="footer-feature">
                            <svg viewBox="0 0 24 24" width="20" height="20" fill="currentColor"><path d="M9 16.17L4.83 12l-1.42 1.41L9 19 21 7l-1.41-1.41L9 16.17z"/></svg>
                            <span>Early access to anticipation picks</span>
                        </div>
                        <div class="footer-feature">
                            <svg viewBox="0 0 24 24" width="20" height="20" fill="currentColor"><path d="M9 16.17L4.83 12l-1.42 1.41L9 19 21 7l-1.41-1.41L9 16.17z"/></svg>
                            <span>24/7 VIP support via WhatsApp</span>
                        </div>
                    </div>
                </div>

                 <div class="footer-pricing-cards">
                     <div class="pricing-card">
                         <div class="pricing-header">
                             <span class="pricing-label">Most Popular</span>
                             <h3 class="pricing-title">Golden Fixed Tips</h3>
                             <p class="pricing-desc"><span class="odds-highlight">45+ odds</span> — <span class="wins-highlight">massive wins</span></p>
                         </div>
                         <div class="pricing-price">
                             <span class="currency">Ksh</span>
                             <span class="amount">525</span>
                             <span class="period">/day</span>
                         </div>
                         <ul class="pricing-features">
                             <li>High odds (45+) guaranteed</li>
                             <li>Daily guaranteed picks</li>
                              <li>Pay Till (Buy Goods): <span class="pay-highlight inline-pay-till-copy" data-pay-till="5438677">5438677</span> <span class="pay-hint">(Click to copy)</span></li>
                              <li>VIP WhatsApp support</li>
                              <li>24/7 support available</li>
                         </ul>
                         <a class="footer-cta-btn primary" href="Tips/goldentips.php" target="_blank" rel="noopener noreferrer">Get Golden Fixed</a>
                     </div>

                     <div class="pricing-card featured">
                         <div class="pricing-badge">Best Value</div>
                         <div class="pricing-header">
                             <h3 class="pricing-title">2 + odds</h3>
                             <p class="pricing-desc"><span class="profits-highlight">Consistent daily profits</span></p>
                         </div>
                         <div class="pricing-price">
                             <span class="currency">Ksh</span>
                             <span class="amount">100</span>
                             <span class="period">/day</span>
                         </div>
                         <ul class="pricing-features">
                             <li>2 accumulator odds daily</li>
                             <li>High success rate</li>
                             <li>Pay Till (Buy Goods): <span class="pay-highlight inline-pay-till-copy" data-pay-till="5438677">5438677</span> <span class="pay-hint">(Click to copy)</span></li>
                             <li>Instant WhatsApp alerts</li>
                             <li>7-days-a-week service</li>
                         </ul>
                         <a class="footer-cta-btn primary" href="Tips/2odds.php" target="_blank" rel="noopener noreferrer">Get 2 + odds</a>
                     </div>

                     <div class="pricing-card">
                         <div class="pricing-header">
                             <span class="pricing-label">Strategic</span>
                             <h3 class="pricing-title">2 Draws Tips</h3>
                             <p class="pricing-desc"><span class="draws-highlight">15+ odds — safe draws</span></p>
                         </div>
                         <div class="pricing-price">
                             <span class="currency">Ksh</span>
                             <span class="amount">325</span>
                             <span class="period">/day</span>
                         </div>
                         <ul class="pricing-features">
                             <li>Two draw matches daily</li>
                             <li>15+ odds guaranteed</li>
                              <li>Pay Till (Buy Goods): <span class="pay-highlight inline-pay-till-copy" data-pay-till="5438677">5438677</span> <span class="pay-hint">(Click to copy)</span></li>
                              <li>Dedicated support</li>
                              <li>24/7 support available</li>
                         </ul>
<a class="footer-cta-btn primary" href="Tips/2draws.php" target="_blank" rel="noopener noreferrer">Get 2 Draws Tips</a>
                      </div>

                      <div class="pricing-card">
                          <div class="pricing-header">
                              <span class="pricing-label">International</span>
                              <h3 class="pricing-title">Global VIP</h3>
                              <p class="pricing-desc"><span class="country-tag country-uganda">Uganda</span> <span class="country-tag country-tanzania">Tanzania</span> <span class="country-tag country-sa">South Africa</span> <span class="country-tag country-world">🌍 Worldwide</span></p>
                          </div>
                          <div class="pricing-price">
                              <span class="currency">$</span>
                              <span class="amount">5</span>
                              <span class="period">/day</span>
                          </div>
                          <ul class="pricing-features">
                              <li>All premium features</li>
                              <li>45+ odds daily</li>
                              <li>PayPal / Skrill</li>
                              <li>Instant activation</li>
                              <li>24/7 support</li>
                          </ul>
                          <a class="footer-cta-btn primary" href="international-payment.php" target="_blank" rel="noopener noreferrer">Get Global VIP</a>
                      </div>
                  </div>
            </div>

            <div class="footer-social-proof">
                <div class="proof-stat">
                    <div class="stat-icon">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path><circle cx="9" cy="7" r="4"></circle><path d="M23 21v-2a4 4 0 0 0-3-3.87"></path><path d="M16 3.13a4 4 0 0 1 0 7.75"></path></svg>
                    </div>
                    <span class="stat-number">2,847+</span>
                    <span class="stat-label">Happy Members</span>
                </div>
                <div class="proof-stat">
                    <div class="stat-icon">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M6 9H4.5a2.5 2.5 0 0 1 0-5H6"></path><path d="M18 9h1.5a2.5 2.5 0 0 0 0-5H18"></path><path d="M4 22h16"></path><path d="M10 14.66V17c0 .55-.47.98-.97 1.21C7.85 18.75 7 20.24 7 22"></path><path d="M14 14.66V17c0 .55.47.98.97 1.21C16.15 18.75 17 20.24 17 22"></path><path d="M18 2H6v7a6 6 0 0 0 12 0V2Z"></path></svg>
                    </div>
                    <span class="stat-number">12,456</span>
                    <span class="stat-label">Tips Won</span>
                </div>
                <div class="proof-stat">
                    <div class="stat-icon">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"></circle><circle cx="12" cy="12" r="6"></circle><circle cx="12" cy="12" r="2"></circle></svg>
                    </div>
                    <span class="stat-number">89%</span>
                    <span class="stat-label">Accuracy Rate</span>
                </div>
                <div class="proof-stat">
                    <div class="stat-icon">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M22 12h-4l-3 9L9 3l-3 9H2"></path></svg>
                    </div>
                    <span class="stat-number">24/7</span>
                    <span class="stat-label">Support Available</span>
                </div>
            </div>

            <div class="footer-bottom">
                <div class="footer-links">
                    <div class="footer-column">
                        <h4>Quick Links</h4>
                        <a href="index.php">Home</a>
                        <a href="#">About Us</a>
                        <a href="support/how-it-works.php">How It Works</a>
                        <a href="testimonial/index.php">Success Stories</a>
                    </div>
                    <div class="footer-column">
                        <h4>Jackpot</h4>
                        <a href="Jptips/index.php">SportPesa Mega</a>
                        <a href="Jptips/index.php">SportPesa Midweek</a>
                        <a href="Jptips/index.php">Betika Jackpot</a>
                    </div>
                    <div class="footer-column">
                        <h4>Services</h4>
                        <a href="Tips/goldentips.php">Golden Fixed (45+ odds)</a>
                        <a href="Tips/2odds.php">2 + odds</a>
                        <a href="Tips/2draws.php">2 Draws (15+ odds)</a>
                        <a href="Jptips/index.php">Jackpots</a>
                    </div>
                    <div class="footer-column">
                        <h4>Support</h4>
                        <a href="support/faq.php">FAQ</a>
                        <a href="support/contact-us.php">Contact Us</a>
                        <a href="#">Payment Methods</a>
                        <a href="#">Privacy Policy</a>
                    </div>
                    <div class="footer-column">
                        <h4>Connect</h4>
                        <a href="<?= htmlspecialchars($telegramLink, ENT_QUOTES, 'UTF-8') ?>" target="_blank">Telegram Channel</a>
                        <a href="<?= htmlspecialchars($whatsappLink, ENT_QUOTES, 'UTF-8') ?>" target="_blank">WhatsApp VIP</a>
                    </div>
                </div>
                <div class="footer-guarantees">
                    <div class="guarantee-item">
                        <svg viewBox="0 0 24 24" width="24" height="24" fill="currentColor"><path d="M12 2L4 5.5v6.5L12 22l8-10-8-10V5.5L12 2zm0 2.8l5.5 4.2v8.9L12 19l-5.5-3.1v-8.9L12 4.8zM11 16v-2h2v2h-2zm0-5V7h2v4h-2z"/></svg>
                        <div>
                            <strong>Money-Back Guarantee</strong>
                            <p>If our tips don't deliver, we refund</p>
                        </div>
                    </div>
                    <div class="guarantee-item">
                        <svg viewBox="0 0 24 24" width="24" height="24" fill="currentColor"><path d="M12 1L3 5v6c0 5.55 3.84 10.74 9 12 5.16-1.26 9-6.45 9-12V5l-9-4zm0 10.99h7c-.53 4.12-3.28 7.79-7 8.94V12H5V6.3l7-3.11v8.8z"/></svg>
                        <div>
                            <strong>Secure Transactions</strong>
                            <p>100% protected payments</p>
                        </div>
                    </div>
                    <div class="guarantee-item">
                        <svg viewBox="0 0 24 24" width="24" height="24" fill="currentColor"><path d="M20 6h-2.18c.11-.31.18-.65.18-1a2.996 2.996 0 00-5.5-1.64l-.5-.67-.5.67C13.31 3.34 12.61 3 12 3c-.61 0-1.31.34-1.64.82l-.5.67-.5-.67C7.69 3.34 7.31 3 6.7 3 3.98 3.97 2 6.43 2 9.5c0 3.78 2.51 7.09 6.07 8.32l.24.15H2v2h20V6zm-9-2c.55 0 1 .45 1 1s-.45 1-1 1-1-.45-1-1 .45-1 1-1zM6 12c-.55 0-1-.45-1-1s.45-1 1-1 1 .45 1 1-.45 1-1 1zm12 0c-.55 0-1-.45-1-1s.45-1 1-1 1 .45 1 1-.45 1-1 1z"/></svg>
                        <div>
                            <strong>Expert Team</strong>
                            <p>Professional tipsters only</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="footer-bottom-links">
                <p>&copy; <?= date('Y') ?> Realtime Tips. All rights reserved.</p>
                <div class="footer-legal">
                    <a href="#">Terms of Service</a>
                    <a href="#">Privacy Policy</a>
                    <a href="#">Refund Policy</a>
                </div>
            </div>
        </div>
    </footer>

    <div class="sticky-contact">
        <a class="sticky-btn sticky-whatsapp" href="<?= htmlspecialchars($whatsappLink, ENT_QUOTES, 'UTF-8') ?>" target="_blank" rel="noopener noreferrer">
            <svg viewBox="0 0 24 24" width="18" height="18" fill="currentColor"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893A11.821 11.821 0 0020.465 3.488"/></svg>
            <span>WhatsApp</span>
        </a>
        <a class="sticky-btn sticky-telegram" href="<?= htmlspecialchars($telegramLink, ENT_QUOTES, 'UTF-8') ?>" target="_blank" rel="noopener noreferrer">
            <svg viewBox="0 0 24 24" width="18" height="18" fill="currentColor"><path d="M11.944 0A12 12 0 0 0 0 12a12 12 0 0 0 12 12 12 12 0 0 0 12-12A12 12 0 0 0 12 0a12 12 0 0 0-.056 0zm4.962 7.224c.1-.002.321.023.465.14a.506.506 0 0 1 .171.325c.016.093.036.306.02.472-.18 1.898-.962 6.502-1.36 8.627-.168.9-.499 1.201-.82 1.23-.696.065-1.225-.46-1.9-.902-1.056-.693-1.653-1.124-2.678-1.8-1.185-.78-.417-1.21.258-1.91.177-.184 3.247-2.977 3.307-3.23.007-.032.014-.15-.056-.212s-.174-.041-.249-.024c-.106.024-1.793 1.14-5.061 3.345-.48.33-.913.49-1.302.48-.428-.008-1.252-.241-1.865-.44-.752-.245-1.349-.374-1.297-.789.027-.216.325-.437.893-.663 3.498-1.524 5.83-2.529 6.998-3.014 3.332-1.386 4.025-1.627 4.476-1.635z"/></svg>
            <span>Telegram</span>
        </a>
    </div>

    <script>
        (function () {
            const mobileToggle = document.getElementById('mobileToggle');
            const mobileMenu = document.getElementById('mobileMenu');
            const mobileMenuClose = document.getElementById('mobileMenuClose');
            const mobilePremiumToggle = document.getElementById('mobilePremiumToggle');
            const mobilePremiumDropdown = document.getElementById('mobilePremiumDropdown');

            if (mobileToggle && mobileMenu) {
                mobileToggle.addEventListener('click', function() {
                    mobileMenu.classList.toggle('active');
                    mobileToggle.classList.toggle('active');
                    document.body.style.overflow = mobileMenu.classList.contains('active') ? 'hidden' : '';
                });

                if (mobileMenuClose) {
                    mobileMenuClose.addEventListener('click', function() {
                        mobileMenu.classList.remove('active');
                        mobileToggle.classList.remove('active');
                        document.body.style.overflow = '';
                    });
                }

                if (mobilePremiumToggle && mobilePremiumDropdown) {
                    mobilePremiumToggle.addEventListener('click', function() {
                        mobilePremiumToggle.classList.toggle('active');
                        mobilePremiumDropdown.classList.toggle('active');
                    });
                }
}

            const dateButtons = document.querySelectorAll('.date-btn');
            const tableRows = document.querySelectorAll('#tipsBody tr');
            const tipCards = document.querySelectorAll('.tip-card');

            if (dateButtons.length > 0) {
                function filterTips(selectedDate) {
                    tableRows.forEach(function(row) {
                        if (row.getAttribute('data-date') === selectedDate) {
                            row.style.display = '';
                        } else {
                            row.style.display = 'none';
                        }
                    });
                    tipCards.forEach(function(card) {
                        if (card.getAttribute('data-date') === selectedDate) {
                            card.style.display = '';
                        } else {
                            card.style.display = 'none';
                        }
                    });
                }

dateButtons.forEach(function(btn) {
                    btn.addEventListener('click', function() {
                        dateButtons.forEach(function(b) {
                            b.classList.remove('active');
                        });
this.classList.add('active');
                        filterTips(this.getAttribute('data-date'));
                        
                        // Toggle column visibility based on selected date
                        var thResult = document.querySelector('#tipsTableHead th:nth-child(4)');
                        var thStatus = document.querySelector('#tipsTableHead th:nth-child(5)');
                        var rows = document.querySelectorAll('#tipsBody tr');
                        
                        if (this.getAttribute('data-date') === 'today') {
                            // Hide Result + Status columns for TODAY
                            if (thResult) thResult.style.display = 'none';
                            if (thStatus) thStatus.style.display = 'none';
                            rows.forEach(function(row) {
                                if (row.cells[3]) row.cells[3].style.display = 'none';
                                if (row.cells[4]) row.cells[4].style.display = 'none';
                            });
                        } else {
                            // Show all columns for YESTERDAY / TOMORROW
                            if (thResult) thResult.style.display = '';
                            if (thStatus) thStatus.style.display = '';
                            rows.forEach(function(row) {
                                if (row.cells[3]) row.cells[3].style.display = '';
                                if (row.cells[4]) row.cells[4].style.display = '';
                            });
                        }
                        
                        // Update dates in the table
                        var selectedDateType = this.getAttribute('data-date');
                        var today = new Date();
                        var formatDate = function(d) {
                            var day = d.getDate();
                            var month = d.getMonth() + 1;
                            return (day < 10 ? '0' : '') + day + '/' + (month < 10 ? '0' : '') + month;
                        };
                        
                        var newDate;
                        var currentDate = new Date(today);
                        
                        if (selectedDateType === 'today') {
                            newDate = formatDate(currentDate);
                        } else if (selectedDateType === 'yesterday') {
                            currentDate.setDate(currentDate.getDate() - 1);
                            newDate = formatDate(currentDate);
                        } else if (selectedDateType === 'tomorrow') {
                            currentDate.setDate(currentDate.getDate() + 1);
                            newDate = formatDate(currentDate);
                        }
                        
                        // Update all date cells in visible rows
                        document.querySelectorAll('#tipsBody td:first-child').forEach(function(cell) {
                            if (cell.textContent.match(/^\d{2}\/\d{2}$/)) {
                                cell.textContent = newDate;
                            }
                        });
                        document.querySelectorAll('.tip-card .tip-card-date').forEach(function(el) {
                            if (el.textContent.match(/^\d{2}\/\d{2}$/)) {
                                el.textContent = newDate;
                            }
                        });
                    });
                });
            }

            // Initialize table dates + column visibility on page load
            (function initTableDates() {
                // Default to TODAY view - hide Result + Status columns
                var thResult = document.querySelector('#tipsTableHead th:nth-child(4)');
                var thStatus = document.querySelector('#tipsTableHead th:nth-child(5)');
                var rows = document.querySelectorAll('#tipsBody tr');
                
                if (thResult) thResult.style.display = 'none';
                if (thStatus) thStatus.style.display = 'none';
                rows.forEach(function(row) {
                    if (row.cells[3]) row.cells[3].style.display = 'none';
                    if (row.cells[4]) row.cells[4].style.display = 'none';
                });
                var formatDate = function(d) {
                    var day = d.getDate();
                    var month = d.getMonth() + 1;
                    return (day < 10 ? '0' : '') + day + '/' + (month < 10 ? '0' : '') + month;
                };
                
                var today = new Date();
                var yesterday = new Date(today);
                yesterday.setDate(yesterday.getDate() - 1);
                var tomorrow = new Date(today);
                tomorrow.setDate(tomorrow.getDate() + 1);
                
                var todayStr = formatDate(today);
                var yesterdayStr = formatDate(yesterday);
                var tomorrowStr = formatDate(tomorrow);
                
                // Update table rows with correct dates
                document.querySelectorAll('#tipsBody tr[data-date="today"] td:first-child').forEach(function(cell) {
                    cell.textContent = todayStr;
                });
                document.querySelectorAll('#tipsBody tr[data-date="yesterday"] td:first-child').forEach(function(cell) {
                    cell.textContent = yesterdayStr;
                });
                document.querySelectorAll('#tipsBody tr[data-date="tomorrow"] td:first-child').forEach(function(cell) {
                    cell.textContent = tomorrowStr;
                });
                
                // Update tip-cards
                document.querySelectorAll('.tip-card[data-date="today"] .tip-card-date').forEach(function(el) {
                    el.textContent = todayStr;
                });
                document.querySelectorAll('.tip-card[data-date="yesterday"] .tip-card-date').forEach(function(el) {
                    el.textContent = yesterdayStr;
                });
                document.querySelectorAll('.tip-card[data-date="tomorrow"] .tip-card-date').forEach(function(el) {
                    el.textContent = tomorrowStr;
                });
            })();

            const dateEl = document.getElementById('freeTipDate');
            const matchEls = document.querySelectorAll('.tip-match');

            // Copy functionality for inline pay-till number
            const inlinePayTillElements = document.querySelectorAll('.inline-pay-till-copy');
            inlinePayTillElements.forEach(function(element) {
                let isCopying = false;
                element.title = 'Tap to copy';

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
        })();
    </script>
</body>
</html>
