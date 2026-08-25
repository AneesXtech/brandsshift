<?php
// process-contact.php - Contact Form Handler
require_once __DIR__ . '/config.php';

header('Content-Type: application/json');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $fullName = isset($_POST['full_name']) ? trim(htmlspecialchars($_POST['full_name'])) : '';
    $email    = isset($_POST['email']) ? trim(filter_var($_POST['email'], FILTER_SANITIZE_EMAIL)) : '';
    $service  = isset($_POST['service']) ? trim(htmlspecialchars($_POST['service'])) : '';
    $message  = isset($_POST['message']) ? trim(htmlspecialchars($_POST['message'])) : '';

    if (empty($fullName) || empty($email) || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo json_encode([
            'status' => 'error',
            'message' => 'Please fill out all required fields with a valid email address.'
        ]);
        exit;
    }

    // Process contact submission (e.g., mail() or database log)
    echo json_encode([
        'status' => 'success',
        'message' => "Thank you, {$fullName}! Your request for {$service} has been received. We will contact you at {$email} shortly."
    ]);
    exit;
}

echo json_encode([
    'status' => 'error',
    'message' => 'Invalid request method.'
]);
exit;
