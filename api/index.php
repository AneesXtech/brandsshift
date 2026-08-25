<?php
ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);

$rootIndex = dirname(__DIR__) . '/index.php';
if (file_exists($rootIndex)) {
    require_once $rootIndex;
} else {
    echo "<h1>Brands Shift - System Error</h1>";
    echo "<p>Could not locate root <code>index.php</code>.</p>";
    echo "<pre>Current Dir: " . htmlspecialchars(__DIR__) . "\nParent scan: " . print_r(@scandir(dirname(__DIR__)), true) . "</pre>";
}
