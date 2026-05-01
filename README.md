# Realtime Tips - Football Betting Predictions

A PHP-based football tips website with MPESA integration, designed for Vercel deployment.

## Features

- Multiple tip packages: 2 Draws, 2+ Odds, Golden Fixed Tips, Jackpot Tips
- MPESA STK Push integration for payments
- International payment support (PayPal, Skrill, Airtel Money)
- Mobile-responsive design
- Environment-based configuration

## Local Development

```bash
php -S localhost:3000
```

Visit `http://localhost:3000` in your browser.

## Deployment to Vercel

### 1. Push to GitHub

```bash
git init
git add .
git commit -m "Initial commit"
git branch -M main
git remote add origin YOUR_GITHUB_REPO_URL
git push -u origin main
```

### 2. Deploy on Vercel

1. Go to [vercel.com](https://vercel.com) and sign in with GitHub
2. Click "New Project" and import your repository
3. Configure environment variables (see below)
4. Click "Deploy"

### 3. Environment Variables

Set these in your Vercel project settings:

**MPESA Configuration:**
- `MPESA_CONSUMER_KEY` - Your Safaricom Daraja consumer key
- `MPESA_CONSUMER_SECRET` - Your Safaricom Daraja consumer secret
- `MPESA_PASSKEY` - Your MPESA Express passkey
- `MPESA_BUSINESS_SHORT_CODE` - Your Paybill/Till number (default: 5438677)
- `MPESA_CALLBACK_URL` - Your Vercel callback URL (e.g., `https://yourdomain.com/callback.php`)
- `MPESA_ENVIRONMENT` - Either `sandbox` or `production`

**Optional:**
- Any other API keys as needed

### 4. Update Callback URL in Safaricom Daraja

After deployment, update your callback URL in the [Safaricom Daraja portal](https://developer.safaricom.co.ke/) to match your Vercel URL:

```
https://yourdomain.com/callback.php
```

## Project Structure

```
├── index.php                 # Landing page
├── vercel.json               # Vercel configuration
├── .gitignore               # Git ignore file
├── api/
│   ├── index.php            # API home (fallback)
│   ├── international-payment.php
│   └── international-usd.php
├── Tips/
│   ├── 2draws.php          # 2 Draws Tips page
│   ├── 2odds.php           # 2+ Odds page
│   └── goldentips.php      # Golden Fixed Tips page
├── Jptips/
│   └── index.php           # Jackpot Tips page
├── testimonial/
│   └── index.php           # Testimonials page
├── support/
│   ├── contact-us.php      # Contact page
│   ├── faq.php             # FAQ page
│   └── how-it-works.php    # How It Works page
└── M-PESAstkpush/
    ├── config.php          # MPESA configuration
    ├── stkpush.php         # Main STK Push (Golden Tips)
    ├── stkpush2draws.php   # STK Push for 2 Draws
    ├── stkpush2odds.php    # STK Push for 2 Odds
    └── callback.php        # MPESA callback handler
```

## URL Routes

All pages are accessible at clean URLs:

- `/` - Landing page
- `/2draws.php` - 2 Draws Tips
- `/2odds.php` - 2+ Odds Daily
- `/goldentips.php` - Golden Fixed Tips
- `/jackpot/` - Jackpot Tips
- `/testimonial/` - Testimonials
- `/contact-us.php` - Contact
- `/faq.php` - FAQ
- `/how-it-works.php` - How It Works
- `/international-payment.php` - International Payment (Kenya/Africa)
- `/international-usd.php` - International Payment (USD)

## Security Notes

- MPESA credentials are loaded from environment variables on Vercel
- Callback URL must use HTTPS in production
- All payment processing happens server-side
- Callback logs are written to `/tmp` (Vercel's writable directory)

## License

MIT
