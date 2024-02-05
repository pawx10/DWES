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
        echo "<script>alert('Usuario o contraseña incorrectos.');</script>";
        include("login.html"); // Mostrar el formulario de login con el mensaje de error
    }
}
?>
