<?php
include 'db.php';

$room_id = $_GET['room_id'];

$sql = "SELECT m.message, u.username, m.timestamp FROM messages m JOIN users u ON m.user_id=u.id WHERE m.room_id=$room_id ORDER BY m.timestamp";
$messages = $conn->query($sql);

$response = [];
while ($msg = $messages->fetch_assoc()) {
    $response[] = $msg;
}

header('Content-Type: application/json');
echo json_encode($response);
?>
