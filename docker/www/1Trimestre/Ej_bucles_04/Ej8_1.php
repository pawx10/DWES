<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
$numero=$_POST["numero"];
?>
<h1>Tabla de multiplicar del numero: <?php echo $numero ?> </h1>
<table border="1";
<tr>
    <th>Numero</th>
    <th>Resultado</th>
<?php


for ( $i=1 ;$i<=10 ; $i++) { 
    echo "<tr>";
    echo "<td>$numero</td>";
    echo "<td>".$numero*$i."</td>";
    echo "</tr>";
 }
 ?>
 </table>
    
</body>
</html>
