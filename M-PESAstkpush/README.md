# MPESA STK Push Configuration

**Important:** Before going live, you must configure your Safaricom Daraja API credentials.

## Setup Steps

1. **Get API Credentials**
   - Visit https://developer.safaricom.co.ke/
   - Create an account (if you don't have one)
   - Create a new app in the Daraja portal
   - Select "STK Push" as the service
   - Note down:
     - Consumer Key
     - Consumer Secret
     - Passkey (found under "API Keys" or "Credentials")

2. **Configure Callback URL**
   - Set your callback URL in Safaricom Daraja dashboard to:
     ```
     https://yourdomain.com/M-PESAstkpush/callback.php
     ```
   - For local testing, use ngrok:
     ```bash
     ngrok http 80
     ```
     Then set callback URL to: `https://<your-ngrok-url>/M-PESAstkpush/callback.php`

3. **Edit `config.php`**
   ```php
   return [
       'consumer_key' => 'YOUR_ACTUAL_CONSUMER_KEY',
       'consumer_secret' => 'YOUR_ACTUAL_CONSUMER_SECRET',
       'passkey' => 'YOUR_ACTUAL_PASSKEY',
       'business_short_code' => '5438677', // Your Pay Till
       'callback_url' => 'https://yourdomain.com/M-PESAstkpush/callback.php',
       'environment' => 'sandbox' // Change to 'production' for live
   ];
   ```

4. **Test in Sandbox**
   - Safaricom provides sandbox test credentials
   - Use the sandbox environment to test payments without real money
   - The sandbox will simulate successful/failed payments

5. **Go Live**
   - Switch `environment` to `'production'`
   - Update your credentials to live credentials from Safaricom
   - Ensure your callback URL is publicly accessible via HTTPS

## File Structure

```
M-PESAstkpush/
├── config.php       # API credentials and settings
├── stkpush.php      # Main payment page with phone input form
├── callback.php     # Safaricom's payment response handler
└── mpesa_callback.log  # (auto-created) logs callbacks
```

## Testing

1. Access `M-PESAstkpush/stkpush.php` from browser
2. Enter a phone number (format: 0712345678 or 254712345678)
3. Click "Pay Ksh 525 via MPESA"
4. If using sandbox, you'll receive a test prompt (use test PIN)
5. For live, user gets real MPESA STK push on their phone

## Troubleshooting

- **"Failed to authenticate"**: Check Consumer Key/Secret in config.php
- **"Invalid callback URL"**: Ensure URL is HTTPS and publicly reachable
- **No STK push received**: Verify phone number is correct and MPESA is active
- **Check logs**: `mpesa_callback.log` and `mpesa_success.log` contain transaction history
- **PHP cURL**: Ensure PHP cURL extension is enabled (`extension=curl` in php.ini)

## Security Notes

- Never commit `config.php` with real credentials to public repos
- Use HTTPS in production
- Validate all callback responses
- Store transactions in database for reconciliation
- Implement idempotency checks to prevent duplicate processing

## Callback Response

Safaricom sends JSON payload to `callback.php`. Sample fields:
- `TransID` — Unique transaction ID
- `TransAmount` — Amount paid
- `MSISDN` — Customer phone number
- `ResultCode` — 0 for success

Update your database/user account here to mark payment as complete and trigger tip delivery.
