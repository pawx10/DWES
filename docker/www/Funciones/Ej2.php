<?php
include("Funciones.php");
for ($i = 0; $i < 99999; $i++) {
if(esCapicua($i) ==true) {
    echo $i. " ";
}
}
?>