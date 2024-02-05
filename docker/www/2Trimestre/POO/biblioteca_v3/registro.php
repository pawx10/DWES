<?php
session_start();
include_once("db.php");
include_once("models/Usuario.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['usuario'];
    $password = $_POST['password'];
    $confirm_password = $_POST['confirm_password'];

    if ($password !== $confirm_password) {
        $error = "Las contraseñas no coinciden.";
        include("views/registro_view.php");
        exit(); // Detener la ejecución después de incluir la vista
    }

    $usuario = new Usuario();
    $usuario_existe = $usuario->getUsuario($username);

    if ($usuario_existe) {
        $error = "El usuario ya existe.";
        include("views/registro_view.php");
        exit(); // Detener la ejecución después de incluir la vista
    }

    $result = $usuario->insert($username, $password);

    if ($result === 1) {
        $_SESSION['usuario'] = $username;
        echo "Usuario registrado exitosamente.";
        echo "<a href='login.php'><button>Iniciar sesión</button></a>";
    } else {
        $error = "Error al registrar el usuario.";
        include("registro_view.php");
    }
} else {
    include("views/registro_view.php");
}
?>
