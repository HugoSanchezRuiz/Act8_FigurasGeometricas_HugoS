<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Calculadora de Figuras Geométricas</title>
</head>
<body>
    <h1>Calculadora de Figuras Geométricas</h1>
    <form action="calcular_resultado.php" method="post">
        <label for="lado1">Introduce el lado 1:</label>
        <input type="number" name="lado1" required>

        <input type="hidden" name="tipoFigura" value="cuadrado">
        <input type="submit" value="Calcular">
    </form>
</body>
</html>


<?php

require_once "figurageometrica.php";
require_once "perimetro.php";

class Cuadrado extends FiguraGeometrica implements PerimetroM {

    // Métodos propios de getters y setters
    public function getLado1() {
        return $this->lado1;
    }

    public function setLado1($lado1) {
        $this->lado1 = $lado1;
    }

    // Método heredado de la clase abstracta
    public function area() {
        return $this->getLado1() ** 2;
    }

    // Método de la interfaz PerimetroM
    public function perimetro() {
        return 4 * $this->getLado1();
    }

    // Método toString
    public function __toString() {
        return "Cuadrado: Tipo={$this->getTipoFigura()}, Lado={$this->getLado1()}";
    }
}
