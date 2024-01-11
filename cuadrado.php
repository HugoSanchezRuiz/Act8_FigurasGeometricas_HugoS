<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Calculadora de Figuras Geométricas</title>
    <link rel="stylesheet" href="./styles/style.css">
    <script src="./validacion2.js"></script>
</head>
<body>
    <h1>Calculadora de Figuras Geométricas</h1>
    <!-- Controlamos el evento de submit para validar el formulario de un lado -->
    <form action="calcular_resultado.php" method="post" onsubmit="return validarFormulario()">
        <label for="lado1">Introduce el lado 1:</label>
        <input type="text" name="lado1" id="lado1">
        <br>
        <br>
        <span id="errorLado1" style="color: red;"></span>
        <br>
        <br>

        <input type="hidden" name="tipoFigura" id="cuadrado" value="cuadrado">
        <input type="submit" value="Calcular">
    </form>

    <a href="./index.php">Volver Inicio</a>
</body>
</html>


<?php

//Llamaremos a las paginas necesarias para que herede la clase FiguraGeometrica e implemente PerimetroM
require_once "figurageometrica.php";
require_once "perimetro.php";

//Creamos la clase cuadrado
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
