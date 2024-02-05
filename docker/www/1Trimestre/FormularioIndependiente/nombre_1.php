<?php
session_start();
include ("functions/functions.php");

if(!isset($_SESSION["name"])){
   
    echo"
        
        <form action=\"nombre_2.php\" method=\"post\">
           <label>Cual es tu nombre?</label>
           <br>
           <input type=\"text\" name=\"name\">
           <input type=\"submit\" value=\"Enviar\">
        </form>
    ";
}else{
    
    echo "
    Ya has iniciado sesion
    <br>
    Tu nombre es: " . $_SESSION["name"];
    
  
}
homeButton("index.html");
?>