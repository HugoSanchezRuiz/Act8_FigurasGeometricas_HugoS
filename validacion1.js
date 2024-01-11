
document.addEventListener('DOMContentLoaded', function () {


    function validarFormulario() {
        var lado1 = document.getElementById('lado1').value;
        var lado2 = document.getElementById('lado2').value;

        // Verificar si los campos no están vacíos y son números
        if (lado1 === "") {
            document.getElementById('errorLado1').innerHTML = "El campo no puede estar vacío.";
            return false;
        } else {
            document.getElementById('errorLado1').innerHTML = "";
        }

        if (isNaN(lado1)) {
            document.getElementById('errorLado1').innerHTML = "El campo debe ser un número.";
            return false;
        } else {
            document.getElementById('errorLado1').innerHTML = "";
        }

        if (lado1 < 0) {
            document.getElementById('errorLado1').innerHTML = "Debe ser un número positivo.";
            return false;
        } else {
            document.getElementById('errorLado1').innerHTML = "";
        }

        if (lado2 === "") {
            document.getElementById('errorLado2').innerHTML = "El campo no puede estar vacío.";
            return false;
        } else {
            document.getElementById('errorLado2').innerHTML = "";
        }

        if (isNaN(lado2)) {
            document.getElementById('errorLado2').innerHTML = "El campo debe ser un número.";
            return false;
        } else {
            document.getElementById('errorLado2').innerHTML = "";
        }

        if (lado2 < 0) {
            document.getElementById('errorLado2').innerHTML = "Debe ser un número positivo.";
            return false;
        } else {
            document.getElementById('errorLado2').innerHTML = "";
        }

        // Si la validación pasa, se envía el formulario
        return true;
    }
});

