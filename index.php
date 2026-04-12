<?php

$distIndex = __DIR__ . DIRECTORY_SEPARATOR . 'dist' . DIRECTORY_SEPARATOR . 'index.html';
$sourceIndex = __DIR__ . DIRECTORY_SEPARATOR . 'index.html';
$devHost = '127.0.0.1';
$devPort = 4173;
$devOrigin = "http://{$devHost}:{$devPort}";

function devServerAvailable(string $host, int $port): bool
{
    $socket = @fsockopen($host, $port, $errno, $errstr, 0.2);

    if ($socket === false) {
        return false;
    }

    fclose($socket);

    return true;
}

function serveDevIndex(string $sourceIndex, string $devOrigin): void
{
    if (!file_exists($sourceIndex)) {
        http_response_code(500);
        header('Content-Type: text/plain; charset=UTF-8');
        echo 'Source index.html not found.';
        exit;
    }

    $html = file_get_contents($sourceIndex);

    if ($html === false) {
        http_response_code(500);
        header('Content-Type: text/plain; charset=UTF-8');
        echo 'Unable to read source index.html.';
        exit;
    }

    $replacement = <<<HTML
<script type="module" src="{$devOrigin}/@vite/client"></script>
    <script type="module" src="{$devOrigin}/src/main.js"></script>
HTML;

    $html = preg_replace(
        '#<script\s+type="module"\s+src="/src/main\.js"></script>#',
        $replacement,
        $html,
        1
    );

    header('Content-Type: text/html; charset=UTF-8');
    echo $html;
    exit;
}

if (devServerAvailable($devHost, $devPort)) {
    serveDevIndex($sourceIndex, $devOrigin);
}

if (!file_exists($distIndex)) {
    http_response_code(503);
    header('Content-Type: text/plain; charset=UTF-8');
    echo "No Vite dev server detected and build output not found.\n";
    echo "Run either:\n";
    echo "1. npm run dev\n";
    echo "or\n";
    echo "2. npm run build\n";
    exit;
}

header('Content-Type: text/html; charset=UTF-8');
readfile($distIndex);
