<?php

// MODELO DE usuarios

include_once "model.php";

class Usuario extends Model {

    // Constructor. Conecta con la base de datos.
    public function __construct() {
        $this->table = "usuarios";
        $this->idColumn = "id";
        parent::__construct();
    }

    public function getUsuario($username) {
        // Obtenemos la información del usuario por su nombre de usuario
        $usuario = $this->db->dataQuery("SELECT * FROM usuarios WHERE usuario = '$username'");
        
        // Devolvemos el usuario (si existe)
        return $usuario;
    }
    
    
    public function insertTareaUsuario($id, $id) {
        return $this->db->dataManipulation("INSERT INTO usuarios_tarea (id, id) VALUES ('$id', '$id')");
    }


    // Inserta un libro. Devuelve 1 si tiene éxito o 0 si falla.
    public function insert($usuario, $password)
    {
       
        return $this->db->dataManipulation("INSERT INTO usuarios (usuario,password) VALUES ('$usuario','$password')");
    }

    // public function getAll($id) {
   
    //     $list = $this->db->dataQuery("SELECT * FROM ".$this->table. " t join usuarios_tareas ut on ut.id_tarea=t.id where ut.id=".$id);
       
    //     return $list;
    //   }
}
