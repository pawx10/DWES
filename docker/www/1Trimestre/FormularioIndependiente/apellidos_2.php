<?php
session_start();
include("functions/functions.php");
if(isset($_POST["surname"]) && $_POST["surname"]!==""){
    $_SESSION["surname"] = $_POST["surname"];
    homeButton("index.html");
}else{
    echo"
    Error,apellido vacio
    ";
    homeButton("index.html");
}
?>