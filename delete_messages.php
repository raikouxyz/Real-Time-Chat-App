<?php
include 'db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $room_id = $_POST['room_id'];

    // Xóa tất cả các tin nhắn trong phòng
    $sql = "DELETE FROM messages WHERE room_id = $room_id";
    if ($conn->query($sql) === TRUE) {
        $response = ['success' => true];
    } else {
        $response = ['success' => false, 'error' => $conn->error];
    }

    header('Content-Type: application/json');
    echo json_encode($response);
}
?>
