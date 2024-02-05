<?php

// MODELO DE usuarios

include_once "model.php";

class Usuario extends Model {

    // Constructor. Conecta con la base de datos.
    public function __construct() {
        $this->table = "usuarios";
        $this->idColumn = "idUsuario";
        parent::__construct();
    }

    public function getUsuario($username) {
        // Obtenemos la información del usuario por su nombre de usuario
        $usuario = $this->db->dataQuery("SELECT * FROM usuarios WHERE usuario = '$username'");
        
        // Devolvemos el usuario (si existe)
        return $usuario;
    }
    
    
    public function insertTareaUsuario($idUsuario, $idTarea) {
        return $this->db->dataManipulation("INSERT INTO usuarios_tarea (idUsuario, idTarea) VALUES ('$idUsuario', '$idTarea')");
    }


    // Inserta un libro. Devuelve 1 si tiene éxito o 0 si falla.
    public function insert($usuario, $password)
    {
       
        return $this->db->dataManipulation("INSERT INTO usuarios (usuario,password) VALUES ('$usuario','$password')");
    }

    // public function getAll($idUsuario) {
   
    //     $list = $this->db->dataQuery("SELECT * FROM ".$this->table. " t join usuarios_tareas ut on ut.id_tarea=t.idTarea where ut.idUsuario=".$idUsuario);
       
    //     return $list;
    //   }
}
