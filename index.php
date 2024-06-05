<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="styles.css">
</head>

<body>    
    <h1 class="text-center py-5">Đăng Nhập</h1>
    <div class="container">
        <form action="login.php" method="post">
            <div class="mb-3">
                <label for="username" class="form-label">
                    <p class="fw-bold">Username :</p>
                </label>
                <input class="form-control" type="text" id="username" name="username" required>
            </div>
            <div class="mb-3">
                <label for="room" class="form-label">
                    <p class="fw-bold">Chọn phòng :</p>
                </label>
                <select id="room" name="room_id" class="form-control">
                    <?php
                    include 'db.php';
                    $sql = "SELECT * FROM rooms";
                    $result = $conn->query($sql);
                    while ($room = $result->fetch_assoc()) : ?>
                        <option value="<?php echo $room['id']; ?>"><?php echo $room['room_name']; ?></option>
                    <?php endwhile; ?>
                </select>
            </div>
            <br>
            <div class="d-grid gap-2 col-1 mx-auto">
                <button type="submit" class="btn btn-dark">Login</button>
            </div>
        </form>
    </div>
</body>

</html>