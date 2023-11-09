<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php

$dolares =$_POST['dolares'];  


$tasaCambio = 1.15;


$euros = $dolares / $tasaCambio;


echo "$dolares dolares equivalen a $euros euros.";
?>
</body>
</html>