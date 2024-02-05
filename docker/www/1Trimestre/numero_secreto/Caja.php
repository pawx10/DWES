<?php
  session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>ejercicio 7</title>
</head>
<body>
    <?php


    $intentosRestantes = isset($_SESSION["intentosRestantes"]) ? $_SESSION["intentosRestantes"] : 4;

    if ($_SERVER["REQUEST_METHOD"] === "POST") {
        if (isset($_POST["combinacion"])) {
            $combinacion = $_POST["combinacion"];
            $clave = isset($_SESSION["clave"]) ? $_SESSION["clave"] : rand(1000, 9999);

            if ($combinacion == $clave) {
                echo "La combinación es correcta";
            } else {
                $intentosRestantes -= 1;
                $_SESSION["intentosRestantes"] = $intentosRestantes;

                if ($intentosRestantes > 0) {
                    echo "
                        <form method=\"post\">
                            <label for=\"combinacion\">Combinación <input name=\"combinacion\" type=\"number\" min=\"1000\" max=\"9999\" required /></label>
                            <br /><br />
                            <input type=\"submit\" value=\"submit\" />
                        </form>
                    ";
                    echo "<br />La combinación es incorrecta, intentos restantes: $intentosRestantes";
                } else {
                    echo "La combinación es incorrecta, no se ha podido abrir la caja fuerte";
                    session_destroy(); // Reinicia la sesión al agotar los intentos
                }
            }
        }
    } else {
        // Mostrar el formulario por primera vez
        $_SESSION["clave"] = rand(1000, 9999); // Genera una nueva clave en cada visita
        $_SESSION["intentosRestantes"] = 4;
        echo "
            <form method=\"post\">
                <label for=\"combinacion\">Combinación <input name=\"combinacion\" type=\"number\" min=\"1000\" max=\"9999\" required /></label>
                <br /><br />
                <input type=\"submit\" value=\"submit\" />
            </form>
        ";
    }

    // Botón de reset
    echo "
        <form method=\"get\">
            <input type=\"submit\" value=\"reset\" />
        </form>
    ";
    ?>
</body>
</html>
