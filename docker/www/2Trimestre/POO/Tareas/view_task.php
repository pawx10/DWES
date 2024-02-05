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
        echo "No tienes permiso para ver esta tarea.";
        exit();
    }

    $sql_task = "SELECT * FROM tarea WHERE id = $task_id";
    $result_task = $conn->query($sql_task);
    $row_task = $result_task->fetch_object();

    if (!$row_task) {
        echo "La tarea no existe.";
        exit();
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
        <h3><?php echo $row_task->titulo; ?></h3>
        <p><?php echo $row_task->descripcion; ?></p>
    <?php } else { ?>
        <p>No se encontró la tarea.</p>
    <?php } ?>
    <a href="dashboard.php"><button>Volver a Tareas</button></a>
</body>
</html>
