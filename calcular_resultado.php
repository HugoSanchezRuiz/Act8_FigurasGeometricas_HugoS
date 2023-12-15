<?php

if ($_POST['tipoFigura'] === "rectangulo") {
    include "rectangulo.php";
} elseif ($_POST['tipoFigura'] === "cuadrado") {
    include "cuadrado.php";
} elseif ($_POST['tipoFigura'] === "triangulo") {
    include "triangulo.php";
} elseif ($_POST['tipoFigura'] === "circulo") {
    include "circulo.php";
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {


    $tipoFigura = $_POST['tipoFigura'];
    $lado1 = $_POST['lado1'];
    if (isset($_POST['lado2'])) {
        $lado2 = $_POST['lado2'];
    }
    

    // Cargar clases y realizar cálculos según el tipo de figura

    switch ($tipoFigura) {
        case 'triangulo':
            $figura = new Triangulo('triangulo', $lado1, $lado2);
            break;
        case 'rectangulo':
            $figura = new Rectangulo('rectangulo', $lado1, $lado2);
            break;
        case 'cuadrado':
            $figura = new Cuadrado('cuadrado', $lado1);
            break;
        case 'circulo':
            $figura = new Circulo('circulo', $lado1);
            break;
        default:
            // Manejar un tipo de figura no válido
            break;
    }

    // Imprimir resultados
    echo "<h1>Resultado - Calculadora de Figuras Geométricas</h1>";
    echo "<p>Tipo de figura: {$figura->getTipoFigura()}</p>";
    echo "<p>Lado 1: {$figura->getLado1()}</p>";

    if (method_exists($figura, 'getLado2')) {
        echo "<p>Lado 2: {$figura->getLado2()}</p>";
    }

    echo "<p>Área: {$figura->area()}</p>";
    echo "<p>Perímetro: {$figura->perimetro()}</p>";
} else {
    // Redirigir a la página principal si se intenta acceder directamente a este script
    header("Location: index.html");
    exit();
}
?>