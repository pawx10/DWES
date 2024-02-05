<?php
session_start();
include('database.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $sql = "SELECT id FROM usuarios WHERE usuario = '$username' AND password = '$password'";
    $result = $conn->query($sql);

    if ($result->num_rows == 1) {
        $_SESSION['username'] = $username;
        
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
    <a href = "dashboard.php"><button>Ver las tareas</button></a>
    <br> <br>
      <a href ="index.php"><button>Inicio</button></a>
      <a href="dashboard.php"><button>Tareas</button></a>
    <?php if(isset($error)) echo "<p>$error</p>"; ?>
</body>
</html>


