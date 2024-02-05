<?php
session_start();
include("functions/functions.php");
if(!isset($_SESSION["surname"])){
    echo"
    <form action=\"apellidos_2.php\" method=\"post\">
    <label> Como te apellidas?</label>
    <input type=\"text\" name=\"surname\">
    <input type=\"submit\" value=\"Enviar\">
    </form>
    ";
}else{
    echo "
    Ya has inciado sesion
    <br>
    Tu apellido es:" . $_SESSION["surname"];
    
}
homeButton("index.html");
?>
