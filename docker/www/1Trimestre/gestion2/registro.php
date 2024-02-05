<?php
session_start();
include('database.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Verificar si el usuario ya existe
    $check_user_query = "SELECT * FROM usuarios WHERE usuario = '$username'";
    $check_user_result = $conn->query($check_user_query);

    if ($check_user_result->num_rows > 0) {
        $error = "El usuario ya existe.";
    } else {
        // Insertar el nuevo usuario
        $insert_user_query = "INSERT INTO usuarios (usuario, password) VALUES ('$username', '$password')";
        if ($conn->query($insert_user_query) === TRUE) {
            $_SESSION['username'] = $username;
            echo "Usuario registrado exitosamente.";
        } else {
            $error = "Error al registrar el usuario: " . $conn->error;
        }
    }
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Registro</title>
</head>
<body>
    <h2>Registro</h2>
    <form method="post" action="">
        <label>Usuario:</label><br>
        <input type="text" name="username"><br>
        <label>Contraseña:</label><br>
        <input type="password" name="password"><br><br>
        <input type="submit" value="Registrar">
    </form>
    <a href="dashboard.php"><button>Tareas</button></a>
    <?php if(isset($error)) echo "<p>$error</p>"; ?>
    <p>¿Ya tienes una cuenta? <a href="login.php"><button>Iniciar sesión</button></a>

    <br><br>
    <a href="index.php"><button>Volver</button></a>
</body>
</html>

