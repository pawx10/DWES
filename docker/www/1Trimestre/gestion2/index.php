<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
    <title>Inicio</title>
</head>
<body>
    <?php if(isset ($_SESSION["username"])){
         echo "<h2> Bienvenido " . $_SESSION['username'] . "</h2>
         <p>Selecciona una opción:</p>
         <a href='dashboard.php'><button>Tareas</button></a>
         <a href='logout.php'><button>Cerrar Sesion</button></a>
         ";
    }else{
        echo "<h2>Modo invitado</h2>
        <a href='login.php'><button>Iniciar sesión</button></a>
        <a href='registro.php'><button>Registro</button></a>
        ";
        
    }

     ?>
  
  
</body>
</html>
