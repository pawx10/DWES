<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php

$numero = $_POST["numero"];//Recoge el numero del formulario

    if ($numero < 1 || $numero > 1000) {//Error si es menor de 1 o mayor de 1000
        echo "ERROR <br><br> Numero no valido, tiene que ser entre 1 y 1000";
    echo "<br><a href ='Ej3_form.php'>Formulario</a>";
    } else {
        for ($i = 2; $i <= $numero; $i++) {
            if (esPrimo($i)) {//Funcion esPrimo
                echo "<br>$i";//Imprime numero
        }
    }
    }
//Funcion esPrimo
function esPrimo($num) {
    for ($i = 2; $i * $i <= $num; $i++) {
        if ($num % $i == 0) {
            return false;
    }
    }
    return true;
}
?>
</body>
</html>

