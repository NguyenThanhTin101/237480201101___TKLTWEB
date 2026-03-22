<?php
if(isset($_COOKIE['ten']) && isset($_COOKIE['sdt'])){
    echo "<h2>THÔNG TIN KHÁCH HÀNG</h2>";
    echo "Tên: " . $_COOKIE['ten'] . "<br>";
    echo "SĐT: " . $_COOKIE['sdt'];
} else {
    echo "Cookie hết hạn hoặc chưa đăng nhập!";
}
?>