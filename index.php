<?php

$distIndex = __DIR__ . DIRECTORY_SEPARATOR . 'dist' . DIRECTORY_SEPARATOR . 'index.html';

if (!file_exists($distIndex)) {
    http_response_code(503);
    header('Content-Type: text/plain; charset=UTF-8');
    echo "Build output not found. Run: npm run build";
    exit;
}

header('Content-Type: text/html; charset=UTF-8');
readfile($distIndex);
