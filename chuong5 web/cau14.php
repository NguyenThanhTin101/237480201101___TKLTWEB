<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Xử lý mảng với menu</title>
</head>

<body>

<h2>Xử lý mảng</h2>

<form method="post">

Nhập dãy số (cách nhau bằng dấu phẩy):
<input type="text" name="dayso">

<br><br>

Chọn chức năng:

<select name="chon">
<option value="tong">Tính tổng</option>
<option value="max">Tìm số lớn nhất</option>
<option value="min">Tìm số nhỏ nhất</option>
<option value="sapxep">Sắp xếp tăng dần</option>
</select>

<br><br>

<input type="submit" value="Thực hiện">

</form>

<?php

if(isset($_POST["dayso"]))
{
    $input = $_POST["dayso"];

    $arr = explode(",", $input);

    $chon = $_POST["chon"];

    echo "<h3>Kết quả:</h3>";

    switch($chon)
    {
        case "tong":
            $sum = 0;
            foreach($arr as $i)
                $sum += $i;
            echo "Tổng = ".$sum;
        break;

        case "max":
            echo "Số lớn nhất = ".max($arr);
        break;

        case "min":
            echo "Số nhỏ nhất = ".min($arr);
        break;

        case "sapxep":
            sort($arr);
            echo "Mảng sau khi sắp xếp: ";
            foreach($arr as $i)
                echo $i." ";
        break;
    }
}

?>

</body>
</html>