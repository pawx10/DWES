<?php
session_start();

session_destroy();
echo"
Sesion finalizada con exito
<a href=\"index.php\"><button>Volver a inicio</button></a>
";
?>