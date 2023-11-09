<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1>Area del Triangulo</h1>
    <?php
    $base=$_POST['base'];
    $altura=$_POST['altura'];
    $area=$base * $altura/2;
    echo "El area del triangulo de base " . $base . " y altura " . $altura . " es: " .$area;
    ?>
    
</body>
</html>