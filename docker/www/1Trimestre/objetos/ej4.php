<?php

abstract class Poligono {
    abstract public function calcularArea();
}

class Triangulo extends Poligono {
    private $base;
    private $altura;

    public function __construct($base, $altura) {
        $this->base = $base;
        $this->altura = $altura;
    }

    public function calcularArea() {
        return ($this->base * $this->altura) / 2;
    }
}

class Cuadrado extends Poligono {
    private $lado;

    public function __construct($lado) {
        $this->lado = $lado;
    }

    public function calcularArea() {
        return $this->lado * $this->lado;
    }
}

class Rectangulo extends Poligono {
    private $base;
    private $altura;

    public function __construct($base, $altura) {
        $this->base = $base;
        $this->altura = $altura;
    }

    public function calcularArea() {
        return $this->base * $this->altura;
    }
}

function calcularYMostrarArea(Poligono $poligono) {
    $area = $poligono->calcularArea();
    echo "El área del polígono es: $area <br>";
}

// Crear instancias de polígonos y calcular áreas
$triangulo = new Triangulo(5, 8);
echo "Área del Triángulo: ";
calcularYMostrarArea($triangulo);

$cuadrado = new Cuadrado(4);
echo "Área del Cuadrado: ";
calcularYMostrarArea($cuadrado);

$rectangulo = new Rectangulo(6, 10);
echo "Área del Rectángulo: ";
calcularYMostrarArea($rectangulo);
