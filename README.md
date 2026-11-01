# Realtime Tips - Football Betting Predictions

A PHP-based football tips website with MPESA integration, designed for Vercel deployment.

## Features

- Multiple tip packages: 2 Draws, 2+ Odds, Golden Fixed Tips, Jackpot Tips
- MPESA STK Push integration for payments
- International payment support (PayPal, Skrill, Airtel Money)
- Mobile-responsive design
- Environment-based configuration

## Local Development

The easiest way to run locally is with the Vercel CLI, which respects the same routing as production:

```bash
npm install -g vercel
vercel dev
```

Or use PHP's built-in server with the `/api` directory as the document root. However, using `vercel dev` is recommended for accurate routing.

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

All PHP files are located in the `/api` directory for Vercel compatibility:

```
├── api/                    # All PHP serverless functions
│   ├── index.php           # Landing page
│   ├── international-payment.php
│   ├── international-usd.php
│   ├── Tips/
│   │   ├── 2draws.php
│   │   ├── 2odds.php
│   │   └── goldentips.php
│   ├── support/
│   │   ├── contact-us.php
│   │   ├── faq.php
│   │   └── how-it-works.php
│   ├── Jptips/
│   │   └── index.php
│   ├── testimonial/
│   │   └── index.php
│   └── M-PESAstkpush/
│       ├── config.php
│       ├── stkpush.php
│       ├── stkpush2draws.php
│       ├── stkpush2odds.php
│       └── callback.php
├── vercel.json             # Vercel configuration
├── .gitignore
├── package.json
└── README.md
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
