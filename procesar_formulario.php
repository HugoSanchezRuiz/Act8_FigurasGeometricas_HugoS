<?php

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $tipoFigura = $_POST['tipoFigura'];
    $pagina = '';

    switch ($tipoFigura) {
        case 'triangulo':
            $pagina = 'triangulo.php';
            break;
        case 'rectangulo':
            $pagina = 'rectangulo.php';
            break;
        case 'cuadrado':
            $pagina = 'cuadrado.php';
            break;
        case 'circulo':
            $pagina = 'circulo.php';
            break;
        default:
            // Manejar un tipo de figura no válido
            break;
    }

    header("Location: $pagina");
    exit();
} else {
    // Redirigir a la página principal si se intenta acceder directamente a este script
    header("Location: index.html");
    exit();
}
?>
