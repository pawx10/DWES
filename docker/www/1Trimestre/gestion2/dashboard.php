<?php
session_start();
include('database.php');

if (!isset($_SESSION['username'])) {
    header("location: login.php");
    exit();
}

$username = $_SESSION['username'];

$sql = "SELECT id FROM usuarios WHERE usuario = '$username'";
$result = $conn->query($sql);
$row = $result->fetch_assoc();
$user_id = $row['id'];

$sql_tasks = "SELECT id, titulo FROM tarea WHERE id IN (SELECT tarea FROM usuarios_tarea WHERE usuario = $user_id)";
$result_tasks = $conn->query($sql_tasks);
?>
<!DOCTYPE html>
<html>
<head>
    <title>Dashboard</title>
</head>
<body>
    <h2>Tareas Pendientes</h2>
    <?php if (mysqli_num_rows($result_tasks) > 0) { ?>
        <ul>
            <?php while ($row_task = $result_tasks->fetch_assoc()) { ?>
                <li>
                    <a href="task.php?id=<?php echo $row_task['id']; ?>"><?php echo $row_task['titulo']; ?></a>
                </li>
            <?php } ?>
        </ul>
    <?php } else { ?>
        <p>No hay tareas pendientes.</p>
    <?php } ?>
    <a href="index.php"><button>Inicio</button></a>
    <a href="add_task.php"><button>Añadir Tarea</button></a>
</body>
</html>

