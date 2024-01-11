<?php
// Si se envia información por POST entrará al condicional
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $tipoFigura = $_POST['tipoFigura'];

    //Creamos la variable pagina para modificarla en el switch
    $pagina = '';

    //Depende el valor del tipo de figura según lo que se elija en el select del index y irá a una página o a otra
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
        case '':
            //Si lo deja vacío lo tirará para atrás
            $pagina = 'index.php';
            break;
        default:
            // Manejar un tipo de figura no válido
            break;
    }

    //Dependiendo del valor del input tipo de figura irá a una de las cinco páginas posibles
    header("Location: $pagina");
    exit();
} else {
    // Redirigir a la página principal si se intenta acceder directamente a este script
    header("Location: index.php");
    exit();
}
?>
