<?php

//Creamos una clase de figura geometrica que se aplicará a las demás clases
//Esta obligará a aplicar el metodo area() que se tendrá que usar en todas las clases a las que se extienda esta clase
//Generamos los metodos contruct y destruct. También los setters y getters

abstract class FiguraGeometrica {
    protected $tipoFigura;
    protected $lado1;

    public function __construct($tipoFigura, $lado1) {
        $this->tipoFigura = $tipoFigura;
        $this->lado1 = $lado1;
    }

    public function __destruct() {
        return "Método destruct: Objeto {$this->tipoFigura} eliminado";
    }

    public function getTipoFigura() {
        return $this->tipoFigura;
    }

    public function setTipoFigura($tipoFigura) {
        $this->tipoFigura = $tipoFigura;
    }

    public function getLado1() {
        return $this->lado1;
    }

    public function setLado1($lado1) {
        $this->lado1 = $lado1;
    }

    abstract public function area();
}