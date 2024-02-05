<?php

// VISTA PARA LA LISTA DE Tareas

// Recuperamos la lista de Tareas
$listatareas = $data["listatareas"];

echo "<form action='index.php'>
        <input type='hidden' name='action' value='buscarTareas'>
        <input type='text' name='textoBusqueda'>
        <input type='submit' value='Buscar'>
      </form><br>";

// Ahora, la tabla con los datos de los Tareas
if (count($listatareas) == 0) {
  echo "No hay datos";
} else {
  echo "<table border ='1'>";
  foreach ($listatareas as $fila) {
    echo "<tr>";
    echo "<td>" . $fila->titulo . "</td>";
    echo "<td>" . $fila->descripcion . "</td>";
  
    echo "<td><a href='index.php?action=formularioModificarTarea&idTarea=" . $fila->idTarea . "'>Modificar</a></td>";
    echo "<td><a href='index.php?action=borrarTarea&idTarea=" . $fila->idTarea . "'>Borrar</a></td>";
    echo "</tr>";
  }
  echo "</table>";
}
echo "<p><a href='index.php?action=formularioInsertarTarea'>Nuevo</a></p>";