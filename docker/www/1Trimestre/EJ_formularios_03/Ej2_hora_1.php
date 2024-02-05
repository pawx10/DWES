<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Saludo según la hora</title>
</head>
<body>
    <h1>Saludo según la hora del día</h1>
    <form method="get" action="Ej2_hora">
        <label for="hora">Introduce la hora (formato de 0 a 23):</label>
        <input type="number" name="hora" id="hora" min="0" max="23" required>
        <button type="submit">Enviar</button>
    </form>

    <?php
    if ($_SERVER) {
       ;

        if ($hora >= 6 && $hora <= 12) {
            echo "<h2>Buenos días</h2>";
        } elseif ($hora >= 13 && $hora <= 20) {
            echo "<h2>Buenas tardes</h2>";
        } else {
            echo "<h2>Buenas noches</h2>";
        }
    }
    ?>
</body>
</html>

















