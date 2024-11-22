$(document).ready(function() {
    const numero = parseInt($('#score').text());
    // Limpiar clases anteriores
    $('#score').removeClass('high medium low');

    if (numero >= 75) {
        $('#score').addClass('score'); 
        $('#score').addClass('high'); // Clase para puntaje alto
    } else if (numero < 75 && numero > 45) {
        $('#score').addClass('score'); 
        $('#score').addClass('medium'); // Clase para puntaje medio
    } else if (numero <= 45) {
        $('#score').addClass('score'); 
        $('#score').addClass('low'); // Clase para puntaje bajo
    }
});
