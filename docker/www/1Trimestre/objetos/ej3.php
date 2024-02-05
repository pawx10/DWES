<?php

class Animal {
    public function comer() {
        echo "El animal está comiendo.<r>";
    }

    public function dormir() {
        echo "El animal está durmiendo.<br>";
    }

    public function moverse() {
        echo "El animal se está moviendo.<br>";
    }
}

class Mamifero extends Animal {
    public function amamantar() {
        echo "El mamífero está amamantando a sus crías.<br>";
    }

    public function darALuz() {
        echo "El mamífero está dando a luz.<br>";
    }
}

class Ave extends Animal {
    public function volar() {
        echo "El ave está volando.<br>";
    }

    public function ponerHuevos() {
        echo "El ave está poniendo huevos.<br>";
    }
}

class Gato extends Mamifero {
    public function maullar() {
        echo "El gato está maullando.<br>";
    }

    public function jugar() {
        echo "El gato está jugando con un juguete.<br>";
    }
}

class Perro extends Mamifero {
    public function ladrar() {
        echo "El perro está ladrando.<br>";
    }

    public function excavar() {
        echo "El perro está excavando un agujero.<br>";
    }
}

class Canario extends Ave {
    public function cantar() {
        echo "El canario está cantando.<br>";
    }

    public function construirNido() {
        echo "El canario está construyendo su nido.<br>";
    }
}

class Pinguino extends Ave {
    public function deslizarse() {
        echo "El pingüino se está deslizando sobre el hielo.<br>";
    }

    public function nadar() {
        echo "El pingüino está nadando en el agua.<br>";
    }
}

class Lagarto extends Animal {
    public function camuflarse() {
        echo "El lagarto se está camuflando con su entorno.<br>";
    }

    public function tomarSol() {
        echo "El lagarto está tomando el sol.<br>";
    }
}

// Crear instancias y probar métodos
$gato = new Gato();
$gato->comer();
$gato->maullar();
$gato->dormir();

$perro = new Perro();
$perro->excavar();
$perro->ladrar();
$perro->moverse();

$canario = new Canario();
$canario->volar();
$canario->cantar();
$canario->ponerHuevos();

$pinguino = new Pinguino();
$pinguino->deslizarse();
$pinguino->nadar();
$pinguino->dormir();

$lagarto = new Lagarto();
$lagarto->camuflarse();
$lagarto->tomarSol();
$lagarto->moverse();
