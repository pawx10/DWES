<?php
session_start();
include("functions/functions.php");
if(isset($_SESSION["name"]) && $_SESSION["surname"]){
    echo"Tu Nombre es ". $_SESSION["name"] . " " . $_SESSION["surname"];

}else{
    echo"Esta vacio tontorron";
}

?>