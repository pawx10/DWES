<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php

$euros =$_POST['euros'];  


$tasaCambio = 1.15;


$dolares = $euros * $tasaCambio;


echo "$euros euros equivalen a $dolares dólares.";
?>
</body>
</html>