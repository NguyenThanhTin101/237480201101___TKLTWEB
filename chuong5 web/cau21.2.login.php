<?php
session_start();

$username = $_POST['username'];
$email = $_POST['email'];
$password = $_POST['password'];

if($username != "" && $email != "" && $password != ""){
    $_SESSION['username'] = $username;
    $_SESSION['email'] = $email;

    echo "<h2>TRANG XỬ LÝ THÔNG TIN ĐĂNG NHẬP</h2>";
    echo "Thông tin đăng nhập hợp lệ<br><br>";
    echo "<a href='cau21.3.mainpage.php'>Trang chính</a>";
} else {
    echo "Thông tin không hợp lệ!";
}
?>