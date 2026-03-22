<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Xử lý mảng</title>
</head>

<body>

<h2>Nhập mảng số nguyên</h2>

<form method="post">

Nhập các số (cách nhau bằng dấu phẩy):
<input type="text" name="mang">

<br><br>

<input type="submit" value="Xử lý">

</form>

<?php

if(isset($_POST["mang"]))
{
    $input = $_POST["mang"];

    // tách chuỗi thành mảng
    $mang = explode(",", $input);

    // chuyển tất cả sang số nguyên
    foreach($mang as &$x)
    {
        $x = intval(trim($x));
    }

    echo "<h3>Mảng vừa nhập:</h3>";
    foreach($mang as $x)
    {
        echo $x." ";
    }

    echo "<br><br>";

    $dem_chan = 0;
    $tong_le = 0;

    $max = $mang[0];
    $min = $mang[0];

    foreach($mang as $x)
    {
        if($x % 2 == 0)
            $dem_chan++;

        if($x % 2 != 0)
            $tong_le += $x;

        if($x > $max)
            $max = $x;

        if($x < $min)
            $min = $x;
    }

    echo "Số chẵn: ".$dem_chan."<br>";
    echo "Tổng số lẻ: ".$tong_le."<br>";
    echo "Max: ".$max."<br>";
    echo "Min: ".$min."<br>";

    echo "<br>";

    echo "<h3>Mảng đảo ngược:</h3>";

    $dao = array_reverse($mang);

    foreach($dao as $x)
    {
        echo $x." ";
    }
}

?>

</body>
</html>