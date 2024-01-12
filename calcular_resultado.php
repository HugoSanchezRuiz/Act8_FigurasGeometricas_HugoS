<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>Resultado - Calculadora de Figuras Geométricas</title>
    <link rel="stylesheet" href="./styles/style1.css">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
</head>

<body>

    <?php

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $tipoFigura = $_POST['tipoFigura'];
        $lado1 = $_POST['lado1'];

        if (isset($_POST['lado2'])) {
            $lado2 = $_POST['lado2'];
        }

        // Cargar clases y sweet alerts para realizar cálculos según el tipo de figura y para que se muestre la imagen correcta en el sweet alert

        // También crearemos las instancias de las clases correspondientes
        switch ($tipoFigura) {
            case 'triangulo':
                include "triangulo.php";
            ?>
                <script src="./sw2.js"></script>
            <?php
                $figura = new Triangulo('triangulo', $lado1, $lado2);
                break;
            case 'rectangulo':
                include "rectangulo.php";
            ?>
                <script src="./sw4.js"></script>
            <?php
                $figura = new Rectangulo('rectangulo', $lado1, $lado2);
                break;
            case 'cuadrado':
                include "cuadrado.php";
            ?>
                <script src="./sw3.js"></script>
            <?php
                $figura = new Cuadrado('cuadrado', $lado1);
                break;
            case 'circulo':
                include "circulo.php";
            ?>
                <script src="./sw1.js"></script>
            <?php
                $figura = new Circulo('circulo', $lado1);
                break;
            default:
                break;
        }

        // Imprimir resultados accediendo a los atributos de las clases para mostrar las operaciones
        echo "<div class='result-container paddingt'>";
        echo "<h1>Resultado - Calculadora de Figuras Geométricas</h1>";
        echo "<p>Tipo de figura: {$figura->getTipoFigura()}</p>";
        echo "<p>Lado 1: {$figura->getLado1()}</p>";

        // Solo mostrará el segundo lado dependiendo de la figura
        if (method_exists($figura, 'getLado2')) {
            echo "<p>Lado 2: {$figura->getLado2()}</p>";
        }

        echo "<p>Área: {$figura->area()}</p>";
        echo "<p>Perímetro: {$figura->perimetro()}</p>";
        echo "<br>";
        echo "<br>";
        // Meteremos un botón para borrar la forma que se ha creado
        echo "<button class='clear-button' onclick='limpiarResultado()'>Borrar</button>";
        echo "</div>";
    } else {
        // Redirigir a la página principal si se intenta acceder directamente a este script
        header("Location: index.html");
        exit();
    }
    ?>

    <!-- Haremos una función para borrar el contenido del div donde se ven los resultados -->
    <script>
        function limpiarResultado() {
            var resultadoElement = document.querySelector('.result-container');
            resultadoElement.innerHTML = '';
            resultadoElement.classList.remove('result-container');

            //Se mostrará un sweet alert para avisar de que se ha borrado el objeto
            Swal.fire({
                title: 'Figura borrada',
                text: 'La figura ha sido borrada correctamente.',
                icon: 'success',
                confirmButtonText: '¡Entendido!',
                background: '#f5f5f5',
                iconHtml: '<img src="./img/papelera.svg" alt="papelera" height="30px" width="30px">',
                timer: 3000,
                timerProgressBar: true
            }).then((result) => {
                if (result.isConfirmed) {
                    console.log('SweetAlert confirmado!');
                } else if (result.dismiss === Swal.DismissReason.timer) {
                    console.log('SweetAlert cerrado automáticamente');
                }
            });

        }
    </script>

</body>

</html>