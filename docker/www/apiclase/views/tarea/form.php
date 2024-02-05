<?php

// VISTA PARA INSERCIÓN/EDICIÓN DE tareas

extract($data);   // Extrae el contenido de $data y lo convierte en variables individuales ($tarea)
//echo extract($data);
//echo $data["tarea"]->titulo;
// Vamos a usar la misma vista para insertar y modificar. Para saber si hacemos una cosa u otra,
// usaremos la variable $Tarea: si existe, es porque estamos modificando un Tarea. Si no, estamos insertando uno nuevo.
if (isset($tarea)) {   
    echo "<h1>Modificación de tareas</h1>";
} else {
    echo "<h1>Inserción de tareas</h1>";
}

// Sacamos los datos del Tarea (si existe) a variables individuales para mostrarlo en los inputs del formulario.
// (Si no hay Tarea, dejamos los campos en blanco y el formulario servirá para inserción).
$idTarea = $tarea->idTarea ?? ""; 
$titulo = $tarea->titulo ?? "";
$descripcion = $tarea->descripcion ?? "";

echo "<form action='index.php' method='post'>";
echo "    <input type='hidden' name='idTarea' value='$idTarea'>";
echo "    Título: <input type='text' name='titulo' value='$titulo'><br>";
echo "    Descripcion: <input type='text' name='descripcion' value='$descripcion'><br>";
//echo "    Descripción: <input type='text' name='descripcion' value='" . ($tarea->descripcion ?? "") . "'><br>";


if (isset($tarea)) {
    echo "    <input type='submit' name='action' value='modificarTarea'>";
} else {
    echo "    <input type='submit' name='action' value='insertarTarea'>";
}


echo "</form>";
echo "<p><a href='index.php'>Volver</a></p>";
