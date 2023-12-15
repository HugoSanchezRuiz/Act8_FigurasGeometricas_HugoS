<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Calculadora de Figuras Geométricas</title>
</head>
<body>
    <h1>Calculadora de Figuras Geométricas</h1>
    <form action="procesar_formulario.php" method="post">
        <label for="tipoFigura">Seleccione el tipo de figura:</label>
        <select name="tipoFigura" id="tipoFigura">
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
