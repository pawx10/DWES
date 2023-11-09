<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Area del Rectangulo</h1>
    <?php
    $base=$_POST['base'];
    $altura=$_POST['altura'];
    $area=$base * $altura;
    echo "El area del rectangulo de base " . $base . " y altura " . $altura . " es: " .$area;
    ?>
    
</body>
</html>