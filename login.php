<?php
include 'db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $room_id = $_POST['room_id'];

    // Kiểm tra người dùng đã tồn tại chưa
    $sql = "SELECT id FROM users WHERE username='$username'";
    $result = $conn->query($sql);

    if ($result->num_rows == 0) {
        // Thêm người dùng mới
        $sql = "INSERT INTO users (username) VALUES ('$username')";
        $conn->query($sql);
        $user_id = $conn->insert_id;
    } else {
        $user = $result->fetch_assoc();
        $user_id = $user['id'];
    }

    // Chuyển hướng tới trang chat
    header("Location: chat.php?user_id=$user_id&room_id=$room_id");
}
?>
