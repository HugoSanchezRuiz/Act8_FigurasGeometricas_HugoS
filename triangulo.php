<?php

require_once "figurageometrica.php";
require_once "perimetro.php";

class Triangulo extends FiguraGeometrica implements PerimetroM {
    private $lado2;

    public function __construct($tipoFigura, $lado1, $lado2) {
        parent::__construct($tipoFigura, $lado1);
        $this->lado2 = $lado2;
    }

    public function getLado2() {
        return $this->lado2;
    }

    public function setLado2($lado2) {
        $this->lado2 = $lado2;
    }

    public function area() {
        return 0.5 * $this->lado1 * $this->lado2;
    }

    public function perimetro() {
        return $this->lado1 + $this->lado2 + $this->getLado2();
    }
}