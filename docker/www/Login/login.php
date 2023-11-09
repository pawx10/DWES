<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $usuarios = array("usuario1", "usuario2", "usuario3"); // Array de usuarios
    $passwords = array("pass1", "pass2", "pass3"); // Array de contraseñas
    
    $user = $_POST["user"];
    $pass = $_POST["pass"];
    
    $index = array_search($user, $usuarios); // Buscar el usuario en el array
    
    if ($index !== false && $passwords[$index] == $pass) {
        header("Location: logueado.html"); // Redirigir al usuario logueado
    } else {
        header("Location: login.html"); // Redirigir de vuelta al formulario de login
    }
}
?>
