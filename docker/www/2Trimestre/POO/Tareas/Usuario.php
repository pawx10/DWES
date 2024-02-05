<?php


class Usuario{
    private $usuario;
    private $id;
    private $password;




 public function __construct($usuario,$id,$password){
    $this->usuario=$usuario;
    $this->id=$id;
    $this->password=$password;
}

public function getUsuario(){
    return $this->usuario;
}

public function getId(){
    return $this->id;
}

public function getPassword(){
    return $this->password;
}

public function setUsuario($usuario){
    $this->usuario=$usuario;
}

public function setId($id){
    $this->id=$id;
}

public function setPassword($password){
    $this->password=$password;
}

}

?>