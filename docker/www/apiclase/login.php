<?php
session_start();
include('db.php');
include('models/Usuario.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $db = new Db();
    $sql = "SELECT idUsuario, usuario, password FROM usuarios WHERE usuario = '$username' AND password = '$password'";
    $result = $db->dataQuery($sql);

    if ($result && count($result) == 1) {
        $row = $result[0];
        $usuario = new Usuario(); // Crear un objeto Usuario
        $usuario->idUsuario = $row->idUsuario; // Asignar el ID de usuario al objeto
        $usuario->usuario = $row->usuario; // Asignar el nombre de usuario al objeto (si lo deseas)
        // Aquí puedes asignar más propiedades del objeto Usuario si es necesario
    
        // Almacenar el objeto Usuario en la sesión
        $_SESSION['usuario'] = $usuario;
        $_SESSION['idUsuario'] = $row->idUsuario;
        header("Location: index.php");
    } else {
        $error = "Usuario o contraseña incorrectos.";
    }
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