<?php

require_once "Estudiante1.php";

$Estudiante = new Estudiante1("Juan",22,1);
$Estudiante ->agregarNota(8,9,8);

echo"Nombre: ". $Estudiante -> getNombre(). "<br />";
echo "Media: ".$Estudiante ->obtenerMedia(). "<br />";
echo "Edad: ". $Estudiante -> getEdad(). "<br />";
echo "Curso: ". $Estudiante -> getCurso(). "<br />";


$Estudiante = new Estudiante1("Jose",42,3);
$Estudiante ->agregarNota(6,5,8);

echo"<br>Nombre: ". $Estudiante -> getNombre(). "<br />";
echo "Media: ".$Estudiante ->obtenerMedia(). "<br />";
echo "Edad: ". $Estudiante -> getEdad(). "<br />";
echo "Curso: ". $Estudiante -> getCurso(). "<br />";
?>
