<?php
session_start();
include("functions/functions.php");
if(isset($_POST["name"]) && $_POST["name"]!==""){
    $_SESSION["name"]=$_POST["name"];
    homeButton("index.html");
}else{
    echo"
    Error, nombre vacio
   
    ";
    homeButton("index.html");
}

?>
