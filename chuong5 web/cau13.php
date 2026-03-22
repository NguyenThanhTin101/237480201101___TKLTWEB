<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Xử lý mảng</title>
</head>

<body>

<h2>Nhập dãy số nguyên</h2>

<form method="post">

Nhập các số (cách nhau bằng dấu phẩy):  
<input type="text" name="dayso">

<br><br>

<input type="submit" value="Xử lý">

</form>

<?php

if(isset($_POST["dayso"]))
{
    $input = $_POST["dayso"];

    $arr = explode(",", $input);

    $sum = 0;

    foreach($arr as $i)
    {
        $sum += $i;
    }

    echo "<h3>Kết quả</h3>";

    echo "Tổng: ".$sum."<br>";

    echo "Số lớn nhất: ".max($arr)."<br>";

    echo "Số nhỏ nhất: ".min($arr)."<br>";

    sort($arr);

    echo "Mảng sau khi sắp xếp tăng dần: ";

    foreach($arr as $i)
    {
        echo $i." ";
    }
}

?>

</body>
</html>