<?php
abstract class Animal {
    protected $nombre;

    public function __construct($nombre) {
        $this->nombre = $nombre;
    
}

public function getNombre() {
    return $this->nombre;


}

public function moverse() {
    echo "El animal se esta moviendo";
}

public function comer() {
    echo "El animal esta comiendo";
}

abstract public function getInfo();

}