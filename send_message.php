<?php
include 'db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $user_id = $_POST['user_id'];
    $room_id = $_POST['room_id'];
    $message = $_POST['message'];

    $sql = "INSERT INTO messages (user_id, room_id, message) VALUES ($user_id, $room_id, '$message')";
    $conn->query($sql);

    // Trả về tin nhắn mới nhất sau khi gửi
    $sql = "SELECT m.message, u.username, m.timestamp FROM messages m JOIN users u ON m.user_id=u.id WHERE m.room_id=$room_id ORDER BY m.timestamp DESC LIMIT 1";
    $result = $conn->query($sql);
    $new_message = $result->fetch_assoc();

    echo json_encode($new_message);
}
?>


