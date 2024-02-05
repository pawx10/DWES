<?php

// MODELO DE tareas

include_once "model.php";

class Tarea extends Model
{

    // Constructor. Especifica el nombre de la tabla de la base de datos
    public function __construct()
    {
        $this->table = "tarea";
        $this->idColumn = "idTarea";
        parent::__construct();
    }

    // Devuelve el último id asignado en la tabla de tareas
    public function getMaxId()
    {
        $result = $this->db->dataQuery("SELECT MAX(idTarea) AS ultimoidTarea FROM tarea");
        return $result[0]->ultimoidTarea;
    }

    // Inserta una tarea. Devuelve 1 si tiene éxito o 0 si falla.
    public function insert($titulo, $descripcion,$idUsuario)
    {
        $this->db->dataManipulation("INSERT INTO tarea (titulo, descripcion) VALUES ('$titulo', '$descripcion')");
        $idTarea = $this->getMaxId(); // Obtener el ID de la tarea recién creada
        $this->db->dataManipulation("INSERT INTO usuarios_tarea (tarea, usuario) VALUES ('$idTarea', '$idUsuario')");
    }
    


    public function deleteAutores($idTarea)
    {
        $correctos = 0;
        $sql = "DELETE FROM escriben WHERE idTarea = $idTarea";
        $correctos = $this->db->dataManipulation($sql);
        return $correctos;
    }


    public function update($idTarea, $titulo, $descripcion)
    {
        $ok = $this->db->dataManipulation("UPDATE tarea SET
        
                                titulo = '$titulo',
                                descripcion='$descripcion'
                                WHERE idTarea = '$idTarea'");
        return $ok;
    }

    public function getTareasByUsuario($idUsuario)
    {
    return $this->db->dataQuery("SELECT tarea.* FROM tarea
                                 INNER JOIN usuarios_tarea ON tarea.idTarea = usuarios_tarea.tarea
                                 WHERE usuarios_tarea.usuario = '$idUsuario'");
    }
    
    // Busca un texto en las tablas de tareas y autores. Devuelve un array de objetos con todos los tareas
    // que cumplen el criterio de búsqueda.
    public function delete($idTarea) {
        $result = $this->db->dataManipulation("DELETE FROM usuarios_tarea WHERE tarea = $idTarea");
        $result = $this->db->dataManipulation("DELETE FROM tarea WHERE idTarea = $idTarea");
        return $result;
    }
    

   public function search($textoBusqueda, $idUsuario)
{
    // Buscamos las tareas del usuario logeado que coincidan con el texto de búsqueda
    $result = $this->db->dataQuery("SELECT tarea.* FROM tarea
                                    INNER JOIN usuarios_tarea ON tarea.idTarea = usuarios_tarea.tarea
                                    WHERE (tarea.titulo LIKE '%$textoBusqueda%'
                                    OR tarea.descripcion LIKE '%$textoBusqueda%')
                                    AND usuarios_tarea.usuario = '$idUsuario'
                                    ORDER BY tarea.titulo");
    return $result;
}

}