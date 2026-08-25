<?php
ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);

$rootProcess = dirname(__DIR__) . '/process-contact.php';
if (file_exists($rootProcess)) {
    require_once $rootProcess;
} else {
    echo json_encode(['status' => 'error', 'message' => 'Process contact handler not found']);
}
