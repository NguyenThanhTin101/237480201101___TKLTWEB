<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Bài tập PHP</title>
</head>
<body>

<h2>3a. Hai biến cho trước</h2>

<?php
$Sx = 3;
$Sy = 5;

echo "Sx = $Sx <br>";
echo "Sy = $Sy <br>";
echo "Cộng: ".($Sx + $Sy)."<br>";
echo "Trừ: ".($Sx - $Sy)."<br>";
echo "Nhân: ".($Sx * $Sy)."<br>";
echo "Chia: ".($Sx / $Sy)."<br>";
echo "Chia dư: ".($Sx % $Sy)."<br>";
?>

<hr>

<h2>3b. Số ngẫu nhiên</h2>

<?php
$Sx = rand(1,10);
$Sy = rand(1,10);

echo "Sx = $Sx <br>";
echo "Sy = $Sy <br>";
echo "Cộng: ".($Sx + $Sy)."<br>";
echo "Trừ: ".($Sx - $Sy)."<br>";
echo "Nhân: ".($Sx * $Sy)."<br>";
echo "Chia: ".($Sx / $Sy)."<br>";
echo "Chia dư: ".($Sx % $Sy)."<br>";
?>

<hr>

<h2>3c. Số ngẫu nhiên với điều kiện Sx > Sy</h2>

<?php
do{
    $Sx = rand(1,10);
    $Sy = rand(1,10);
}
while($Sx <= $Sy);

echo "Sx = $Sx <br>";
echo "Sy = $Sy <br>";
echo "Cộng: ".($Sx + $Sy)."<br>";
echo "Trừ: ".($Sx - $Sy)."<br>";
echo "Nhân: ".($Sx * $Sy)."<br>";
echo "Chia: ".($Sx / $Sy)."<br>";
echo "Chia dư: ".($Sx % $Sy)."<br>";
?>

</body>
</html>