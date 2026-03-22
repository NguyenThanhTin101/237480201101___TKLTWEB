<?php
$ten = $_POST['ten'];
$sdt = $_POST['sdt'];

if($ten != "" && $sdt != ""){
    // lưu cookie 10 phút (600s)
    setcookie("ten", $ten, time()+600);
    setcookie("sdt", $sdt, time()+600);

    echo "Đăng nhập thành công!<br>";
    echo "<a href='cau22.main.php'>Xem thông tin</a>";
} else {
    echo "Vui lòng nhập đầy đủ!";
}
?>