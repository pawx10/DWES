<?
session_start();
if(isset($_SESSION["usuario"])){
    header("Location: contenido.view.php");
}else{
    header("Location: registro.view.php");
}

?>
?>