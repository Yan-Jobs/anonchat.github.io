<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $message = $_POST['message'];
    $username = $_POST['username'] ?? 'Anonim';

    $filename = 'chat_messages.json';

    $messages = [];
    if (file_exists($filename)) {
        $messages = json_decode(file_get_contents($filename), true);
    }

    $messages[] = [
        'username' => htmlspecialchars($username),
        'message' => htmlspecialchars($message),
        'timestamp' => date('Y-m-d H:i:s')
    ];

    file_put_contents($filename, json_encode($messages));

    echo json_encode(['status' => 'success']);
}
?>
