<?php
$servername = "db";
$username = "root";
$password = "test";
$dbname = "tareas";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
