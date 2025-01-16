<?php
session_start();

// التحقق من صلاحيات المستخدم
if (!isset($_SESSION['username']) || $_SESSION['role'] != 'admin') {
    header("Location: login.php");
    exit;
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = md5($_POST['password']);
    $role = $_POST['role'];

    // الاتصال بقاعدة البيانات
    $conn = new mysqli('localhost', 'root', '', 'promax');

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // إضافة المستخدم إلى قاعدة البيانات
    $sql = "INSERT INTO users (username, password, role) VALUES ('$username', '$password', '$role')";

    if ($conn->query($sql) === TRUE) {
        echo "New user added successfully!";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add New User</title>
</head>
<body>
    <h2>Add New User</h2>
    <form action="add_user.php" method="POST">
        <label for="username">Username</label>
        <input type="text" id="username" name="username" required><br><br>
        
        <label for="password">Password</label>
        <input type="password" id="password" name="password" required><br><br>
        
        <label for="role">Role</label>
        <select id="role" name="role">
            <option value="admin">Admin</option>
            <option value="user">User</option>
        </select><br><br>

        <button type="submit">Add User</button>
    </form>
</body>
</html>
