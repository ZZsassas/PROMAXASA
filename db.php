
<?php
// إعدادات الاتصال بقاعدة البيانات
$servername = "localhost";  // عنوان الخادم (محلي في هذه الحالة)
$username = "root";         // اسم المستخدم الافتراضي لـ MySQL
$password = "";             // كلمة المرور الافتراضية (فارغة في حالة XAMPP)
$dbname = "promax_db";      // اسم قاعدة البيانات التي أنشأتها

// إنشاء الاتصال
$conn = new mysqli($servername, $username, $password, $dbname);

// التحقق من الاتصال
if ($conn->connect_error) {
    die("فشل الاتصال بقاعدة البيانات: " . $conn->connect_error);
}
?>
