<?php
session_start();
include_once("TareaController.php");  

// Verificar si el usuario ha iniciado sesión
if(isset($_SESSION["id"])) {
// Miramos el valor de la variable "action", si existe. Si no, le asignamos una acción por defecto
if (isset($_REQUEST["action"])) {
    $action = $_REQUEST["action"];
} else {
    $action = "mostrarListatareas";  // Acción por defecto
}

// Creamos un objeto de tipo TareaController y llamamos al método $action()
$tareacontroller = new TareaController();
$tareacontroller->$action();

    // Obtener el objeto Usuario de la sesión
    $id = $_SESSION['id'];
   // $usuario = $tareacontroller->getUsuario($id); 

    // Mostrar el nombre de usuario y enlaces relevantes
  //  echo "<h2>Bienvenido, " . $usuario->usuario . "!</h2>";
    echo "<p>Selecciona una opción:</p>";
    //echo "<a href='dashboard.php'><button>Tareas</button></a>";
    echo "<a href='logout.php'><button>Cerrar Sesión</button></a>";
} else {

    echo "<h2>Modo invitado</h2>";
    echo "<a href='login.php'><button>Iniciar sesión</button></a>";
    echo "<a href='registro.php'><button>Registro</button></a>";
   
}
?>
