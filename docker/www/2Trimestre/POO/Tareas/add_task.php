<?php
session_start();
include('database.php');

if (!isset($_SESSION['username'])) {
    header("location: login.php");
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $title = $_POST['title'];
    $description = $_POST['description'];
    
    $username = $_SESSION['username'];

    // Obtener el ID del usuario actual
    $get_user_id = "SELECT id FROM usuarios WHERE usuario = '$username'";
    $user_result = $conn->query($get_user_id);
    
    if ($user_result->num_rows > 0) {
        $row = $user_result->fetch_object("Usuario");
        $user_id = $row ->id;

        // Insertar la tarea asociada al usuario actual
        $insert_task_query = "INSERT INTO tarea (titulo, descripcion) VALUES ('$title', '$description')";
        if ($conn->query($insert_task_query) === TRUE) {
            $task_id = $conn->insert_id;

            // Asociar la tarea al usuario en la tabla usuarios_tarea
            $associate_query = "INSERT INTO usuarios_tarea (tarea, usuario) VALUES ($task_id, $user_id)";
            $conn->query($associate_query);
        } else {
            echo "Error al agregar la tarea: " . $conn->error;
        }
    } else {
        echo "Usuario no encontrado.";
    }
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Añadir Tarea</title>
</head>
<body>
    <h2>Añadir Tarea</h2>
    <form method="post" action="">
        <label>Título:</label><br>
        <input type="text" name="title" required><br>
        <label>Descripción:</label><br>
        <textarea name="description" ></textarea><br><br>
        <input type="submit" value="Agregar Tarea">
    </form>
    <br>
    <a href ="index.php"><button>Inicio</button></a>
    <br><br>
    <a href="dashboard.php"><button>Tareas</button></a>
</body>
</html>
