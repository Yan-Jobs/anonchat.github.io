<?php
$filename = 'chat_messages.json';
if (file_exists($filename)) {
    $messages = json_decode(file_get_contents($filename), true);
    echo json_encode($messages);
} else {
    echo json_encode([]);
}
?>
