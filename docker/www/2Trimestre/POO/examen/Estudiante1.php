<?php
require_once "Estudiante.php";

class Estudiante1 extends Estudiante{
private $nombre;
private $edad;
private $curso;
private $notas;

public function __construct($nombre,$edad,$curso){
    $this ->setNombre($nombre);
    $this ->setEdad($edad);
    $this ->setCurso($curso);
  

}
private function setNombre($nombre){
    $this->nombre=$nombre;

}
private function setEdad($edad){
    $this->edad=$edad;

}

private function setCurso($curso){ 
    $this->curso=$curso;

}


public function agregarNota($nota){
    $this->notas[]=$nota;
} 

public function obtenerMedia(){
    $suma=0;
    foreach($this->notas as $nota){
        $suma+=$nota;
    }
    return $suma/count($this->notas);
}
public function getNombre(){
    return $this->nombre;
}
public function getEdad(){
    return $this->edad;
}
public function getCurso(){
    return $this->curso;
}
}
?>