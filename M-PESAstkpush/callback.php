<?php
declare(strict_types=1);

// MPESA STK Push Callback Handler

// Use /tmp for logging on Vercel (read-only filesystem elsewhere)
$logDir = sys_get_temp_dir();
$logFile = $logDir . '/mpesa_callback.log';

// Log the callback for debugging
$callbackData = file_get_contents('php://input');
$logEntry = date('Y-m-d H:i:s') . ' - ' . $callbackData . PHP_EOL;
file_put_contents($logFile, $logEntry, FILE_APPEND);

// Parse JSON payload
$payload = json_decode($callbackData, true);

if (!$payload) {
    http_response_code(400);
    echo json_encode(['Error' => 'Invalid JSON payload']);
    exit;
}

// Extract key fields
$transactionType = $payload['TransactionType'] ?? '';
$transID = $payload['TransID'] ?? '';
$transTime = $payload['TransTime'] ?? '';
$transAmount = $payload['TransAmount'] ?? '';
$businessShortCode = $payload['BusinessShortCode'] ?? '';
$billRefNumber = $payload['BillRefNumber'] ?? '';
$invoiceNumber = $payload['InvoiceNumber'] ?? '';
$orgAccountBalance = $payload['OrgAccountBalance'] ?? '';
$thirdPartyTransID = $payload['ThirdPartyTransID'] ?? '';
$msisdn = $payload['MSISDN'] ?? '';
$firstName = $payload['FirstName'] ?? '';
$middleName = $payload['MiddleName'] ?? '';
$lastName = $payload['LastName'] ?? '';

// Determine payment status
$resultCode = $payload['ResultCode'] ?? '0';
$resultDesc = $payload['ResultDesc'] ?? 'Success';

$isSuccess = ($resultCode === '0' || $resultCode === 0);

// TODO: Update your database with payment status
// Example:
// if ($isSuccess) {
//     markPaymentAsCompleted($billRefNumber, $transID, $transAmount, $msisdn);
//     // Send tips to customer via WhatsApp/SMS
//     sendTipsToCustomer($msisdn, $billRefNumber);
// } else {
//     markPaymentAsFailed($billRefNumber, $resultDesc);
// }

// Response to MPESA
header('Content-Type: application/json');

if ($isSuccess) {
    // Log successful payment
    $successLog = $logDir . '/mpesa_success.log';
    $successEntry = date('Y-m-d H:i:s') . ' - Payment successful: ' . json_encode([
        'transID' => $transID,
        'amount' => $transAmount,
        'phone' => $msisdn,
        'reference' => $billRefNumber
    ]) . PHP_EOL;
    file_put_contents($successLog, $successEntry, FILE_APPEND);

    echo json_encode([
        'ResultCode' => 0,
        'ResultDesc' => 'Payment received successfully'
    ]);
} else {
    // Log failed payment
    $errorLog = $logDir . '/mpesa_errors.log';
    $errorEntry = date('Y-m-d H:i:s') . ' - Payment failed: ' . $resultDesc . ' - ' . $callbackData . PHP_EOL;
    file_put_contents($errorLog, $errorEntry, FILE_APPEND);

    echo json_encode([
        'ResultCode' => $resultCode,
        'ResultDesc' => 'Payment processed'
    ]);
}
