<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Đếm ký tự trong chuỗi</title>
</head>

<body>

<h2>Đếm số lần xuất hiện ký tự</h2>

<form method="post">

Nhập chuỗi:
<input type="text" name="chuoi">

<br><br>

Nhập ký tự cần đếm:
<input type="text" name="kytu" maxlength="1">

<br><br>

<input type="submit" value="Đếm">

</form>

<?php

if(isset($_POST["chuoi"]) && isset($_POST["kytu"]))
{
    $s = $_POST["chuoi"];
    $ch = $_POST["kytu"];

    $count = 0;

    for($i=0; $i<strlen($s); $i++)
    {
        if($s[$i] == $ch)
            $count++;
    }

    echo "<h3>Số lần xuất hiện của '$ch' là: $count</h3>";
}

?>

</body>
</html>