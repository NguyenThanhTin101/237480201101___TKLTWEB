<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title>Câu 19 - Cookie Thời gian</title>
</head>
<body>
<?php
echo "Chào bạn, <br>";

if (isset($_COOKIE['thoiGianTruyCap'])) {
    // Lấy giá trị thời gian cũ từ cookie và định dạng lại
    $thoi_gian_cu = $_COOKIE['thoiGianTruyCap'];
    echo "Thời gian truy cập gần đây nhất là: " . date('d/m/Y H:i:s', $thoi_gian_cu);
} else {
    echo "Đây là lần đầu tiên bạn truy cập trang này!";
}

// Thiết lập cookie mới (tồn tại trong 600 giây = 10 phút)
setcookie('thoiGianTruyCap', time(), time() + 600);
?>
</body>
</html>