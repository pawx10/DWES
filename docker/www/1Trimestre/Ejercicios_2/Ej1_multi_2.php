<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
        $num_1 = $_POST['num_1'];
        $num_2 = $_POST['num_2'];
        $resultado = $num_1 * $num_2; 
    echo "El resultado es: " .$resultado;
    ?>
</body>
</html>