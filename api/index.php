<?php
declare(strict_types=1);

// Vercel PHP Front Controller - Routes requests to appropriate page files

$requestPath = $_SERVER['REQUEST_URI'] ?? '/';
$requestPath = parse_url($requestPath, PHP_URL_PATH);

// Remove trailing slash (except for root)
if ($requestPath !== '/' && str_ends_with($requestPath, '/')) {
    $requestPath = rtrim($requestPath, '/');
}

// Map routes to file paths
$routes = [
    '/' => '/index.php',
    '/index.php' => '../index.php',
    '/2draws.php' => 'Tips/2draws.php',
    '/2odds.php' => 'Tips/2odds.php',
    '/goldentips.php' => 'Tips/goldentips.php',
    '/contact-us.php' => 'support/contact-us.php',
    '/faq.php' => 'support/faq.php',
    '/how-it-works.php' => 'support/how-it-works.php',
    '/testimonial' => 'testimonial/index.php',
    '/testimonial/' => 'testimonial/index.php',
    '/jackpot' => 'Jptips/index.php',
    '/jackpot/' => 'Jptips/index.php',
    '/Jptips' => 'Jptips/index.php',
    '/Jptips/' => 'Jptips/index.php',
    '/international-payment.php' => '../international-payment.php',
    '/international-usd.php' => '../international-usd.php',
    '/callback.php' => 'M-PESAstkpush/callback.php',
    '/stkpush.php' => 'M-PESAstkpush/stkpush.php',
    '/stkpush2draws.php' => 'M-PESAstkpush/stkpush2draws.php',
    '/stkpush2odds.php' => 'M-PESAstkpush/stkpush2odds.php',
];

// Special handling: if request matches a route exactly, use it
if (isset($routes[$requestPath])) {
    $filePath = __DIR__ . '/' . $routes[$requestPath];
    if (file_exists($filePath)) {
        require $filePath;
        exit;
    }
}

// If no route matched, try to serve the file directly if it exists
$directPath = __DIR__ . $requestPath;
if (file_exists($directPath) && is_file($directPath)) {
    // Only allow PHP files to be served through the router
    if (str_ends_with($requestPath, '.php')) {
        require $directPath;
        exit;
    }
}

// Fallback to home page
require __DIR__ . '/../index.php';
