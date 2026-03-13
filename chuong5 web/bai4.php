<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Tính toán số học</title>

<style>
.box{
    width:350px;
    border:2px solid black;
    padding:20px;
    border-radius:20px;
    margin:auto;
}
h2{
    text-align:center;
}
input{
    margin:5px;
}
</style>

</head>
<body>

<div class="box">

<h2>TÍNH TOÁN SỐ HỌC</h2>

<form method="post">

Số thứ 1:
<input type="text" name="so1"><br>

Số thứ 2:
<input type="text" name="so2"><br>

Kết quả:
<input type="text" value="
<?php

if(isset($_POST['cong']))
{
    echo $_POST['so1'] + $_POST['so2'];
}

if(isset($_POST['tru']))
{
    echo $_POST['so1'] - $_POST['so2'];
}

if(isset($_POST['nhan']))
{
    echo $_POST['so1'] * $_POST['so2'];
}

if(isset($_POST['chia']))
{
    echo $_POST['so1'] / $_POST['so2'];
}

if(isset($_POST['mod']))
{
    echo $_POST['so1'] % $_POST['so2'];
}

?>
"><br><br>

<input type="submit" name="cong" value="Cộng">
<input type="submit" name="tru" value="Trừ">
<input type="submit" name="nhan" value="Nhân">
<input type="submit" name="chia" value="Chia">
<input type="submit" name="mod" value="Mod">

</form>

</div>

</body>
</html>