<?php
declare(strict_types=1);

/**
 * MPESA Daraja API Configuration
 * 
 * IMPORTANT: 
 * 1. Get your credentials from https://developer.safaricom.co.ke/
 * 2. Replace the placeholder values below with your actual credentials
 * 3. For sandbox testing, use the sandbox credentials provided by Safaricom
 * 4. For production, switch to live credentials and update the API URLs
 */

return [
    // API Credentials - Use environment variables on Vercel or edit these values directly
    'consumer_key' => getenv('MPESA_CONSUMER_KEY') ?: 'YOUR_CONSUMER_KEY',
    'consumer_secret' => getenv('MPESA_CONSUMER_SECRET') ?: 'YOUR_CONSUMER_SECRET',
    'passkey' => getenv('MPESA_PASSKEY') ?: 'YOUR_PASSKEY',

    // Your Business Details (set MPESA_BUSINESS_SHORT_CODE env var or edit here)
    'business_short_code' => getenv('MPESA_BUSINESS_SHORT_CODE') ?: '5438677',

    // Callback URL - Must be HTTPS. Set MPESA_CALLBACK_URL env var for Vercel deployment
    'callback_url' => getenv('MPESA_CALLBACK_URL') ?: 'https://yourdomain.com/callback.php',

    // Environment: 'sandbox' or 'production' (set MPESA_ENVIRONMENT env var)
    'environment' => getenv('MPESA_ENVIRONMENT') ?: 'sandbox',

    // API URLs (do not modify unless necessary)
    'api_urls' => [
        'sandbox' => [
            'auth' => 'https://sandbox.safaricom.co.ke/oauth/v1/generate?grant_type=client_credentials',
            'stk_push' => 'https://sandbox.safaricom.co.ke/mpesa/stkpush/v1/processrequest',
            'query' => 'https://sandbox.safaricom.co.ke/mpesa/stkpushquery/v1/query'
        ],
        'production' => [
            'auth' => 'https://api.safaricom.co.ke/oauth/v1/generate?grant_type=client_credentials',
            'stk_push' => 'https://api.safaricom.co.ke/mpesa/stkpush/v1/processrequest',
            'query' => 'https://api.safaricom.co.ke/mpesa/stkpushquery/v1/query'
        ]
    ]
];
