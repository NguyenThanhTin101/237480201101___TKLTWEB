<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Danh sách năm</title>
</head>

<body>

<h2>Chọn năm</h2>

<form>

<select name="nam">

<?php

$nam_hientai = date("Y");   // lấy năm hiện tại

for($i = 1900; $i <= $nam_hientai; $i++)
{
    echo "<option>$i</option>";
}

?>

</select>

</form>

</body>
</html>