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
    // API Credentials from Safaricom Daraja Portal
    'consumer_key' => 'YOUR_CONSUMER_KEY',           // Get from https://developer.safaricom.co.ke/
    'consumer_secret' => 'YOUR_CONSUMER_SECRET',     // Get from https://developer.safaricom.co.ke/
    'passkey' => 'YOUR_PASSKEY',                     // Get from Safaricom Daraja portal (MPESA Express Passkey)
    
    // Your Business Details
    'business_short_code' => '5438677',              // Your Pay Till / Business Number
    'callback_url' => 'https://yourdomain.com/M-PESAstkpush/callback.php', // Your callback URL (must be HTTPS)
    
    // Environment: 'sandbox' or 'production'
    'environment' => 'sandbox',
    
    // API URLs
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
