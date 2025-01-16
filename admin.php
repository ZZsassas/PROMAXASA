<?php
session_start();

// التحقق من صلاحيات المستخدم
if (!isset($_SESSION['username']) || $_SESSION['role'] != 'admin') {
    header("Location: login.php");
    exit;
}

echo "<h1>Welcome, Admin</h1>";
echo "<p>Here you can manage your content.</p>";

// إضافة وظيفة للخروج (Logout)
if (isset($_POST['logout'])) {
    session_unset();
    session_destroy();
    header("Location: login.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
</head>
<body>
    <h2>Admin Dashboard</h2>

    <h3>Manage Users</h3>
    <ul>
        <li><a href="add_user.php">Add New User</a></li>
        <li><a href="view_users.php">View Users</a></li>
    </ul>

    <form action="admin.php" method="POST">
        <button type="submit" name="logout">Logout</button>
    </form>
</body>
</html>
