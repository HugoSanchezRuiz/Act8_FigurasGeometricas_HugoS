<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>Calculadora de Figuras Geométricas</title>
    <link rel="stylesheet" href="./styles/style.css">
    <script src="./validacion2.js" defer></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
</head>

<body>
    <h1>Calculadora de Figuras Geométricas</h1>
    <form action="calcular_resultado.php" method="post">
        <label for="lado1">Introduce el lado 1:</label>
        <input type="text" name="lado1" id="lado1">
        <br>
        <br>
        <span id="errorLado1" style="color: red;"></span>
        <br>
        <br>

        <input type="hidden" name="tipoFigura" value="circulo">
        <input type="submit" value="Calcular" onclick="return mostrarSweetAlert()">
    </form>

    <a href="./index.php">Volver Inicio</a>
</body>

</html>

<?php

require_once "figurageometrica.php";
require_once "perimetro.php";

class Circulo extends FiguraGeometrica implements PerimetroM
{
    // Métodos propios de getters y setters
    public function getRadio()
    {
        return $this->getLado1();
    }

    public function setRadio($radio)
    {
        $this->setLado1($radio);
    }

    // Método heredado de la clase abstracta
    public function area()
    {
        return M_PI * $this->getRadio() ** 2;
    }

    // Método de la interfaz PerimetroM
    public function perimetro()
    {
        return 2 * M_PI * $this->getRadio();
    }

    // Método toString
    public function __toString()
    {
        return "Circulo: Tipo={$this->getTipoFigura()}, Radio={$this->getLado1()}";
    }
}


