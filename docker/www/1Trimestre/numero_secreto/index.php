<?php
session_start();

if (!isset($_SESSION['aleatorio'])) {
    $_SESSION['aleatorio'] = rand(1, 100); 
    $_SESSION['intentos'] = 0; 
}

$mensaje = "";

if (isset($_POST['numero'])) {
    $n = $_POST['numero'];
    $_SESSION['intentos']++; 


    if ($n > $_SESSION['aleatorio']) {
        $mensaje = "Mi número es MENOR";
    } elseif ($n < $_SESSION['aleatorio']) {
        $mensaje = "Mi número es MAYOR";
    } else {
        $mensaje = "<p>ENHORABUENA, HAS ACERTADO</p>";
        $mensaje .= "Has necesitado " . $_SESSION['intentos'] . " intentos";
     
        $_SESSION['aleatorio'] = rand(1, 100);
        $_SESSION['intentos'] = 0;
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Juego del número secreto</title>
</head>
<body>

    <?php

    if (empty($mensaje) || strpos($mensaje, "ENHORABUENA") === false) {
        echo "<form action='index.php' method='post'>
            Adivina mi número:
            <input type='text' name='numero'><br>            
            <input type='submit'>
            </form>";
    }

    if (!empty($mensaje)) {
        echo $mensaje;
   
        echo "<br><a href='index.php'>Sigue jugando...</a>";
    }
    ?>

</body>
</html>
