<?php
for ($i = 1; $i <= 100; $i++) { //Iniciamos el bucle
    if ($i % 3 == 0 && $i % 5 == 0) { //Comprobamos si es multiplo de 3 y 5
        echo "<br>fizzbuzz ";
    } elseif ($i % 3 == 0) { //Comprobamos si es multiplo de 3
     echo "<br>fizz ";
    }elseif ($i % 5 == 0) {//Comprobamos si es multiplo de 5
    echo "<br>buzz ";

    } else {
        echo " <br>$i "; //Si no es multiplo de los anteriores imprime el numero por pantalla
    }
}
?>

