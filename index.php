<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>Calculadora de Figuras Geométricas</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f4f4f4;
            margin: 200px;
            align-items: center;
            justify-content: center;
            height: 100vh;
        }

        h1 {
            color: #333;
            text-align: center;
        }

        form {
            background-color: #fff;
            padding: 20px;
            margin-left: 400px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            width: 300px;
            text-align: center;
        }

        label {
            display: block;
            margin-bottom: 10px;
            font-weight: bold;
        }

        select {
            width: 100%;
            padding: 8px;
            margin-bottom: 15px;
            box-sizing: border-box;
        }

        input[type="submit"] {
            background-color: #4caf50;
            color: #fff;
            padding: 10px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            width: 100%;
        }

        input[type="submit"]:hover {
            background-color: #45a049;
        }
    </style>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
    <script>
        //Esta función mostrará un sweet alert cuando elija una forma o cuando no elija nada
        function confirmarSeleccion() {
            var tipoFigura = document.getElementById("tipoFigura").value;

            if (!tipoFigura) {
                Swal.fire({
                    title: 'Campo Vacío',
                    text: 'Por favor, selecciona una figura geométrica',
                    icon: 'error',
                    confirmButtonText: 'Aceptar'
                });
                return false;
            } else {
                Swal.fire({
                    title: '¿Estás seguro?',
                    text: 'Has elegido ' + tipoFigura + '. ¿Quieres continuar?',
                    icon: 'question',
                    showCancelButton: true,
                    confirmButtonText: 'Sí, continuar',
                    cancelButtonText: 'Cancelar'
                }).then((result) => {
                    if (result.isConfirmed) {
                        // Si el usuario hace clic en "Sí, continuar", el formulario se envía
                        document.getElementById("form").submit();
                    }
                });
                // Devuelve false para evitar el envío del formulario por el evento onsubmit del formulario
                return false;
            }
        }
    </script>
</head>

<body>
    <h1>Calculadora de Figuras Geométricas</h1>
    <br>
    <br>
    <!-- Controlaremos el evento de submit devolviendo una función -->
    <form id="form" action="procesar_formulario.php" method="post" onsubmit="return confirmarSeleccion()">
        <label for="tipoFigura">Seleccione el tipo de figura:</label>
        <select name="tipoFigura" id="tipoFigura">
            <option value="" disabled selected>Selecciona una figura geométrica</option>
            <option value="triangulo">Triángulo</option>
            <option value="rectangulo">Rectángulo</option>
            <option value="cuadrado">Cuadrado</option>
            <option value="circulo">Círculo</option>
        </select>
        <br>
        <input type="submit" value="Continuar">
    </form>
</body>

</html>