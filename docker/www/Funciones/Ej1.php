<?php
include("Funciones.php");
for ($i = 1; $i < 1000; $i++) {

    if(esPrimo($i)==true){
        echo " ".$i." ";
    }
}
?>