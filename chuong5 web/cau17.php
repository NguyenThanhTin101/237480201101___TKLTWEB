<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title>Bài tập 17 - Tách từ trong chuỗi</title>
</head>
<body>

<?php

$s = "tôi ăn cơm";


$mang_tu = explode(" ", $s);

echo "<h3>Kết quả bài 17:</h3>";
echo "Ví dụ: s = \"$s\" <br><br>";


foreach ($mang_tu as $index => $tu) {

    echo "a[" . ($index + 1) . "] = \"$tu\" ; ";
}
?>

</body>
</html>