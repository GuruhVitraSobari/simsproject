<?php

$uri = urldecode(
    parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH)
);

// Pastikan Laravel membaca port dari environment variable
$port = env('PORT', 8000); // Gunakan port dari Railway atau default ke 8000

if ($uri !== '/' && file_exists(__DIR__.'/public'.$uri)) {
    return false;
}

require_once __DIR__.'/public/index.php';
