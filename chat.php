<?php
include 'db.php';

$user_id = $_GET['user_id'];
$room_id = $_GET['room_id'];

// Lấy tên người dùng
$sql = "SELECT username FROM users WHERE id=$user_id";
$result = $conn->query($sql);
$user = $result->fetch_assoc();
$username = $user['username'];

// Lấy tin nhắn
$sql = "SELECT m.message, u.username, m.timestamp FROM messages m JOIN users u ON m.user_id=u.id WHERE m.room_id=$room_id ORDER BY m.timestamp";
$messages = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Chat Room</title>
    <link rel="stylesheet" href="css.css">
<body>
    <h1 style="text-align: center; padding: 20px;" >Chat Room</h1>
    <div class="chat-box" id="chat-box">
        <!-- Tin nhắn sẽ được thêm vào đây -->
    </div>
    <form id="chat-form" style="text-align: center;">
        <input type="hidden" name="user_id" id="user_id" value="<?php echo $user_id; ?>">
        <input type="hidden" name="room_id" id="room_id" value="<?php echo $room_id; ?>">
        <textarea class="form-control" name="message" id="message" placeholder="Type your message here..." required></textarea>
        <button>Send</button>
        <button id="delete-messages">Delete All Messages</button>
        <button onclick="window.location.href='index.php'">Return to Login</button>
    </form>
    <script>
        function loadMessages() {
            const roomId = document.getElementById('room_id').value;
            fetch(`get_messages.php?room_id=${roomId}`)
                .then(response => response.json())
                .then(data => {
                    const chatBox = document.getElementById('chat-box');
                    chatBox.innerHTML = '';
                    data.forEach(msg => {
                        const msgElement = document.createElement('p');
                        msgElement.innerHTML = `<strong>${msg.username}:</strong> ${msg.message} <small>${msg.timestamp}</small>`;
                        chatBox.appendChild(msgElement);
                    });
                });
        }

        function sendMessage(event) {
            event.preventDefault();
            const userId = document.getElementById('user_id').value;
            const roomId = document.getElementById('room_id').value;
            const message = document.getElementById('message').value;

            fetch('send_message.php', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/x-www-form-urlencoded'
                },
                body: `user_id=${userId}&room_id=${roomId}&message=${encodeURIComponent(message)}`
            }).then(response => response.json())
              .then(data => {
                  document.getElementById('message').value = '';
                  loadMessages();
              }).catch(error => console.error('Error:', error));
        }
        function deleteMessages() {
            const roomId = document.getElementById('room_id').value;

            fetch('delete_messages.php', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/x-www-form-urlencoded'
                },
                body: `room_id=${roomId}`
            }).then(response => response.json())
              .then(data => {
                  if (data.success) {
                      loadMessages();
                  }
              }).catch(error => console.error('Error:', error));
        }

        document.getElementById('chat-form').addEventListener('submit', sendMessage);
        document.getElementById('delete-messages').addEventListener('click', deleteMessages);

        setInterval(loadMessages, 3000); // Kiểm tra tin nhắn mới mỗi 3 giây
        loadMessages(); // Tải tin nhắn ngay khi mở trang
    </script>
</body>
</html>
