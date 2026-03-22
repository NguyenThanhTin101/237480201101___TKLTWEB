<?php
session_start();

if(!isset($_SESSION['username'])){
    header("Location: cau21.1.login.html");
    exit();
}
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Trang chính</title>
</head>
<body>
    <h2>TRANG CHÍNH</h2>
    <p>
        Người dùng đã đăng nhập với tên 
        <b><?php echo $_SESSION['username']; ?></b> 
        và Email là 
        <b><?php echo $_SESSION['email']; ?></b>
    </p>

    <a href="cau21.3.logout.php">Đăng xuất</a>
</body>
</html>