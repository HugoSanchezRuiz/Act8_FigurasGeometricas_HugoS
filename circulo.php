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

        <input type="hidden" name="tipoFigura" id="circulo" value="circulo">
        <input type="submit" value="Calcular">
    </form>
    <a href="./index.php">Volver Inicio</a>
</body>

</html>

<?php

//Llamaremos a las paginas necesarias para que herede la clase FiguraGeometrica e implemente PerimetroM
require_once "figurageometrica.php";
require_once "perimetro.php";

//Creamos la clase circulo
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

    // Método toString para mostrar los datos
    public function __toString()
    {
        return "Circulo: Tipo={$this->getTipoFigura()}, Radio={$this->getLado1()}";
    }
}
