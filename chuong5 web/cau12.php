<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Bàn cờ vua</title>

<style>
table{
border-collapse: collapse;
}

td{
width:50px;
height:50px;
}
</style>

</head>

<body>

<h2>Bàn cờ vua</h2>

<table>

<?php

for($i=0;$i<8;$i++)
{
    echo "<tr>";

    for($j=0;$j<8;$j++)
    {
        if(($i+$j)%2==0)
            echo "<td style='background:white'></td>";
        else
            echo "<td style='background:black'></td>";
    }

    echo "</tr>";
}

?>

</table>

</body>
</html>