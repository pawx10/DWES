<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado</title>
</head>
<body>
    <h1>Resultado</h1>

    <?php
    if(isset($_POST['numero'])) {
        $numero = ($_POST['numero']);

        echo "<h2>Tabla de Cuadrados y Cubos para los 5 primeros números a partir de $numero:</h2>";
        echo "<table border='1'>";
        echo "<tr><th>Número</th><th>Cuadrado</th><th>Cubo</th></tr>";

        for ($i = $numero; $i < $numero + 5; $i++) {
            $cuadrado = $i * $i;
            $cubo = $i * $i * $i;
            echo "<tr><td>$i</td><td>$cuadrado</td><td>$cubo</td></tr>";
        }

        echo "</table>";
    } else {
        echo "<p>No se recibió ningún número.</p>";
    }
    ?>
</body>
</html>
