<?php

require_once "figurageometrica.php";
require_once "perimetro.php";

class Circulo extends FiguraGeometrica implements PerimetroM {
    // Métodos propios de getters y setters
    public function getRadio() {
        return $this->getLado1();
    }

    public function setRadio($radio) {
        $this->setLado1($radio);
    }

    // Método heredado de la clase abstracta
    public function area() {
        return M_PI * $this->getRadio() ** 2;
    }

    // Método de la interfaz PerimetroM
    public function perimetro() {
        return 2 * M_PI * $this->getRadio();
    }

    // Método toString
    public function __toString() {
        return "Circulo: Tipo={$this->getTipoFigura()}, Radio={$this->getLado1()}";
    }
}
