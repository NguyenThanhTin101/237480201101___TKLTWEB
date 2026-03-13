<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Bảng n và n²</title>

<style>
table{
    border-collapse: collapse;
}
td,th{
    border:1px solid black;
    padding:6px;
    text-align:center;
}
</style>

</head>
<body>

<h2>Bảng số n và n²</h2>

<table>

<tr>
<th>Số n</th>
<th>Số n²</th>
</tr>

<?php

for($n = 0; $n <= 50; $n++)
{
    echo "<tr>";
    echo "<td>$n</td>";
    echo "<td>".($n*$n)."</td>";
    echo "</tr>";
}

?>

</table>

</body>
</html>