<?php
session_start();
if(isset($_SESSION["usuario"])){
    header("Location: Sesiones2.php");
}else{
    header("Location: Sesiones.php");
}
?>