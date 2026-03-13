<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Tính USCLN và BSCNN</title>

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
</style>

</head>
<body>

<div class="box">

<h2>TÍNH USCLN VÀ BSCNN</h2>

<form method="post">

Số thứ 1:
<input type="text" name="so1"><br><br>

Số thứ 2:
<input type="text" name="so2"><br><br>

Kết quả:
<input type="text" value="
<?php

if(isset($_POST['uscln']) || isset($_POST['bscnn']))
{
    $a = $_POST['so1'];
    $b = $_POST['so2'];

    $x = $a;
    $y = $b;

    while($y != 0)
    {
        $r = $x % $y;
        $x = $y;
        $y = $r;
    }

    $uscln = $x;
    $bscnn = ($a * $b) / $uscln;

    if(isset($_POST['uscln']))
        echo $uscln;

    if(isset($_POST['bscnn']))
        echo $bscnn;
}
?>
"><br><br>

<input type="submit" name="uscln" value="USCLN">
<input type="submit" name="bscnn" value="BSCNN">

</form>

</div>

</body>
</html>