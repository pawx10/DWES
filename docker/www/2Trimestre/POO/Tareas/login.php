<?php
session_start();
include('database.php');
include('Usuario.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $conn->real_escape_string($_POST['username']); // Escape de la entrada del usuario
    $password = $conn->real_escape_string($_POST['password']);

    $hashedPassword = hashPassword($password); // Función para hashear la contraseña (usando bcrypt)

    $sql = "SELECT id, usuario FROM usuarios WHERE usuario = '$username' AND password = '$hashedPassword'";
    $result = $conn->query($sql);

    if ($result && $result->num_rows == 1) {
        $row = $result->fetch_assoc();

        // Crear un objeto Usuario usando el constructor
        $usuario = new Usuario($row['usuario'], $row['id']);

        // Almacenar el objeto Usuario en la sesión
        $_SESSION['username'] = $usuario->getUsuario();

        // Regenerar el ID de la sesión después de la autenticación
        session_regenerate_id(true);
        
    } else {
        $error = "Usuario o contraseña incorrectos.";
    }
}

// Función para hashear la contraseña utilizando bcrypt
function hashPassword($password) {
    $options = [
        'cost' => 12, // Ajusta el costo según tus necesidades de seguridad
    ];
    return password_hash($password, PASSWORD_BCRYPT, $options);
}
?>



<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
</head>
<body>
    <h2>Login</h2>
    <form method="post" action="">
        <label>Usuario:</label><br>
        <input type="text" name="username"><br>
        <label>Contraseña:</label><br>
        <input type="password" name="password"><br><br>
        <input type="submit" value="Iniciar sesión">
    </form>
    <br>
    <a href="dashboard.php"><button>Ver las tareas</button></a>
    <br> <br>
    <a href="index.php"><button>Inicio</button></a>
    <a href="dashboard.php"><button>Tareas</button></a>
    <?php if(isset($error)) echo "<p>$error</p>"; ?>
</body>
</html>
