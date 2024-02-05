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
$row = $result->fetch_object();
$user_id = $row ->id;

$sql_tasks = "SELECT id, titulo, descripcion FROM tarea WHERE id IN (SELECT tarea FROM usuarios_tarea WHERE usuario = $user_id)";
$result_tasks = $conn->query($sql_tasks);
?>
<!DOCTYPE html>
<html>
<head>
    <title>Dashboard</title>
    <style>
        table {
            border-collapse: collapse;
            width: 100%;
        }

        th, td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: left;
        }

        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>
    <h2>Tareas Pendientes</h2>
    <?php if (mysqli_num_rows($result_tasks) > 0) { ?>
        <table>
            <thead>
                <tr>
                    <th>Título</th>
                    <th>Descripción</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                <?php while ($row_task = $result_tasks->fetch_object()) { ?>
                    <tr>
                        <td><?php echo $row_task ->titulo; ?></td>
                        <td><?php echo substr($row_task ->descripcion, 0, 20); ?>...</td>
                        <td>
                            <a href="view_task.php?id=<?php echo $row_task ->id; ?>"><button>Ver</button></a>
                            <a href="task.php?id=<?php echo $row_task ->id; ?>"><button>Modificar</button></a>
                        </td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    <?php } else { ?>
        <p>No hay tareas pendientes.</p>
    <?php } ?>
    <a href="index.php"><button>Inicio</button></a>
    <a href="add_task.php"><button>Añadir Tarea</button></a>
</body>
</html>
