<?php
/**
 * En esta página se encuentra el código de que comprueba que el usuario conectado es "test" y su password es "test".
 * Si el usuario es test/test se mostrará la página de contenido.php. En caso contrario se mostrará la de registro.php. 
 * 
 * Al recuperar la password automáticamente se le aplicará un cifrado sha512.
 * 
 * Autor: Nombre Apellidos
 * 
 */
session_start();
if(isset($_SESSION["usuario"]) && isset($_SESSION["password"])){
    if($_SESSION["usuario"] == "test" && $_SESSION["password"] == "test"){
        header("Location: contenido.php");
    }else{
        header("Location: registro.php");
    }


}
include("./views/login.view.php");
?>