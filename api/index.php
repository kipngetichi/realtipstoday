<?php
declare(strict_types=1);

$requestPath = $_SERVER['REQUEST_URI'] ?? '/';
$requestPath = parse_url($requestPath, PHP_URL_PATH);

// Remove trailing slash
if ($requestPath !== '/' && str_ends_with($requestPath, '/')) {
    $requestPath = rtrim($requestPath, '/');
}

// Map routes to files
$routes = [
    '/' => '../index.html',
    '/index.html' => '../index.html',
    '/2draws.html' => '../Tips/2draws.html',
    '/2odds.html' => '../Tips/2odds.html',
    '/goldentips.html' => '../Tips/goldentips.html',
    '/contact-us.html' => '../support/contact-us.html',
    '/faq.html' => '../support/faq.html',
    '/how-it-works.html' => '../support/how-it-works.html',
    '/testimonial' => '../testimonial/index.html',
    '/testimonial/' => '../testimonial/index.html',
    '/jackpot' => '../Jptips/index.html',
    '/jackpot/' => '../Jptips/index.html',
    '/Jptips' => '../Jptips/index.html',
    '/Jptips/' => '../Jptips/index.html',
    '/international-payment.html' => '../international-payment.html',
    '/international-usd.html' => '../international-usd.html',
    '/callback.php' => '../M-PESAstkpush/callback.php',
    '/stkpush.php' => '../M-PESAstkpush/stkpush.php',
    '/stkpush2draws.php' => '../M-PESAstkpush/stkpush2draws.php',
    '/stkpush2odds.php' => '../M-PESAstkpush/stkpush2odds.php',
];

if (isset($routes[$requestPath])) {
    $filePath = __DIR__ . '/' . $routes[$requestPath];
    if (file_exists($filePath)) {
        require $filePath;
        exit;
    }
}

// Try direct file
$directPath = __DIR__ . '/../' . ltrim($requestPath, '/');
if (file_exists($directPath) && is_file($directPath)) {
    if (str_ends_with($requestPath, '.php') || str_ends_with($requestPath, '.html')) {
        require $directPath;
        exit;
    }
}

// Fallback
require __DIR__ . '/../index.html';
