<?php
// إعداد الاتصال بقاعدة البيانات
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "promax_db";

// إنشاء الاتصال
$conn = mysqli_connect($servername, $username, $password, $dbname);

// التحقق من الاتصال
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// تشفير كلمة المرور
$hashedPassword = password_hash('admin', PASSWORD_DEFAULT);

// إدخال المستخدم admin بكلمة مرور مشفرة
$sql = "INSERT INTO users (email, password) VALUES ('admin', '$hashedPassword')";

if (mysqli_query($conn, $sql)) {
    echo "تم إضافة المستخدم admin بنجاح.";
} else {
    echo "خطأ في إضافة المستخدم: " . mysqli_error($conn);
}

// إغلاق الاتصال
mysqli_close($conn);
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <h2>Login</h2>
    <form action="login.php" method="POST">
        <label for="username">Username</label>
        <input type="text" id="username" name="username" required><br><br>
        
        <label for="password">Password</label>
        <input type="password" id="password" name="password" required><br><br>
        
        <button type="submit">Login</button>
    </form>

    <?php
    if (isset($error_message)) {
        echo "<p style='color:red;'>$error_message</p>";
    }
    ?>
</body>
</html>
