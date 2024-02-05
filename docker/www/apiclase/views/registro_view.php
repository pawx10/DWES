<!DOCTYPE html>
<html>
<head>
    <title>Registro</title>
</head>
<body>
    <h2>Registro</h2>
    <form method="post" action="">
        <label>Usuario:</label><br>
        <input type="text" name="usuario" required><br> <!-- Corregir el nombre del campo del formulario -->
        <label>Contraseña:</label><br>
        <input type="password" name="password" required><br><br>
        <label>Confirmar Contraseña:</label><br>
        <input type="password" name="confirm_password" required><br><br> <!-- Confirmar la contraseña -->
        <input type="submit" value="Registrar">
    </form>
    
    <?php if(isset($error)) echo "<p>$error</p>"; ?>
    <p>¿Ya tienes una cuenta? <a href="login.php"><button>Iniciar sesión</button></a></p>

    <br><br>
    <a href="index.php"><button>Volver</button></a>
</body>
</html>
