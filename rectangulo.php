<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Calculadora de Figuras Geométricas</title>
    <link rel="stylesheet" href="./styles/style.css">
    <script src="./validacion1.js"></script>
</head>
<body>
    <h1>Calculadora de Figuras Geométricas</h1>
    <!-- Controlamos el evento de submit para validar el formulario de dos lados -->
    <form action="calcular_resultado.php" method="post" onsubmit="return validarFormulario()">
        <label for="lado1">Introduce el lado 1:</label>
        <input type="text" name="lado1" id="lado1">
        <br>
        <br>
        <span id="errorLado1" style="color: red;"></span>
        <br>
        <br>

        <label for="lado2">Introduce el lado 2:</label>
        <input type="text" name="lado2" id="lado2">
        <br>
        <br>
        <span id="errorLado2" style="color: red;"></span>
        <br>
        <br>

        <input type="hidden" name="tipoFigura" id="rectangulo" value="rectangulo">
        <input type="submit" value="Calcular">
    </form>

    <a href="./index.php">Volver Inicio</a>
</body>
</html>


<?php

//Llamaremos a las paginas necesarias para que herede la clase FiguraGeometrica e implemente PerimetroM
require_once "figurageometrica.php";
require_once "perimetro.php";

//Creamos la clase Rectangulo
class Rectangulo extends FiguraGeometrica implements PerimetroM {
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
        return $this->lado1 * $this->lado2;
    }

    public function perimetro() {
        return 2 * ($this->lado1 + $this->lado2);
    }

    public function __toString() {
        return "Rectangulo: Tipo={$this->tipoFigura}, Lado1={$this->lado1}, Lado2={$this->lado2}";
    }
}