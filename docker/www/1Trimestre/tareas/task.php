<?php
session_start();
include('database.php');

if (!isset($_SESSION['username'])) {
    header("location: login.php");
    exit();
}

if (isset($_GET['id'])) {
    $task_id = $_GET['id'];
    $username = $_SESSION['username'];

    $sql_check_task = "SELECT tarea FROM usuarios_tarea WHERE usuario IN (SELECT id FROM usuarios WHERE usuario = '$username') AND tarea = $task_id";
    $result_check_task = $conn->query($sql_check_task);

    if ($result_check_task->num_rows === 0) {
        echo "No tienes permiso para acceder a esta tarea.";
        exit();
    }

    $sql_task = "SELECT * FROM tarea WHERE id = $task_id";
    $result_task = $conn->query($sql_task);
    $row_task = $result_task->fetch_assoc();

    if (!$row_task) {
        echo "La tarea no existe.";
        exit();
    }

    // Proceso de actualización si se envía el formulario
    if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['update'])) {
        $new_title = $_POST['new_title'];
        $new_description = $_POST['new_description'];

        $update_query = "UPDATE tarea SET titulo = '$new_title', descripcion = '$new_description' WHERE id = $task_id";
        if ($conn->query($update_query) === TRUE) {
            header("Location: task.php?id=$task_id");
            exit();
        } else {
            echo "Error al actualizar la tarea: " . $conn->error;
        }
    }

    // Proceso de eliminación si se envía el formulario
    if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['delete'])) {
        // Eliminar las referencias en usuarios_tarea primero
        $delete_references_query = "DELETE FROM usuarios_tarea WHERE tarea = $task_id";
        $conn->query($delete_references_query);

        // Luego eliminar la tarea
        $delete_query = "DELETE FROM tarea WHERE id = $task_id";
        if ($conn->query($delete_query) === TRUE) {
            header("Location: dashboard.php");
            exit();
        } else {
            echo "Error al eliminar la tarea: " . $conn->error;
        }
    }
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Detalles de Tarea</title>
</head>
<body>
    <h2>Detalles de Tarea</h2>
    <?php if(isset($row_task)) { ?>
        <form method="post" action="">
            <label>Título:</label><br>
            <input type="text" name="new_title" value="<?php echo $row_task['titulo']; ?>"><br>
            <label>Descripción:</label><br>
            <textarea name="new_description"><?php echo $row_task['descripcion']; ?></textarea><br><br>
            <input type="submit" name="update" value="Actualizar Tarea">
            <input type="submit" name="delete" value="Eliminar Tarea">
        </form>
    <?php } else { ?>
        <p>No se encontró la tarea.</p>
    <?php } ?>
    <br>
    <a href="index.php"><button>Inicio</button></a>
    <a href="dashboard.php"><button>Volver a Tareas</button></a>
</body>
</html>
