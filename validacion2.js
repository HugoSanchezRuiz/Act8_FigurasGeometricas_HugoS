//Creamos la función para poder controlar el evento en un futuro
function validarFormulario() {
    //Cogeremos el valor del input correspondiente al primer lado
    var lado1 = document.getElementById('lado1').value;

    // Verificar si los campos no están vacíos y son números positivos
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
    return true;
}
