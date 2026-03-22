<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Bảng cửu chương</title>

<style>
table{
    border-collapse: collapse;
}
td{
    padding:8px;
    border:1px solid black;
}
</style>

</head>
<body>

<h2>BẢNG CỬU CHƯƠNG 1 → 10</h2>

<table>

<?php

for($i = 1; $i <= 10; $i++)
{
    echo "<tr>";
    
    for($j = 1; $j <= 10; $j++)
    {
        $kq = $i * $j;
        echo "<td>$i x $j = $kq</td>";
    }

    echo "</tr>";
}

?>

</table>

</body>
</html>