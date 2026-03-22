<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Danh sách màu</title>
</head>

<body>

<h2>Nhập danh sách màu</h2>

<form method="post">

Nhập các màu (cách nhau bằng dấu phẩy):
<input type="text" name="mau">

<br><br>

<input type="submit" value="Hiển thị">

</form>

<?php

if(isset($_POST["mau"]))
{
    $input = $_POST["mau"];

    $colors = explode(",", $input);

    echo "<h3>Danh sách màu:</h3>";

    foreach($colors as $c)
    {
        $c = trim($c);

        echo "<span style='color:$c; font-weight:bold;'>$c</span> ";
    }
}

?>

</body>
</html>