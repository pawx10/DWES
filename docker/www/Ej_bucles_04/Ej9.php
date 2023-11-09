<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Resultado</title>
</head>
<body>
    <h2>Resultado</h2>
    <?php
    $cantidadDigitos=0;
    $numero=$_POST["numero"];
    for ($n = $numero; $n > 0; $n = (int)($n / 10)) {
        $cantidadDigitos++;
    }
    echo "El numero tiene ".$cantidadDigitos. " digitos";
    ?>
</body>
</html>
