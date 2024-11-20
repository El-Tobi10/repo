$(document).ready(function() {
    const numero = parseInt($('#score').text());
    // Limpiar clases anteriores
    $('#score').removeClass('high medium low');

    if (numero >= 70) {
        $('#score').addClass('score'); 
        $('#score').addClass('high'); // Clase para puntaje alto
    } else if (numero < 70 && numero > 40) {
        $('#score').addClass('score'); 
        $('#score').addClass('medium'); // Clase para puntaje medio
    } else if (numero <= 40) {
        $('#score').addClass('score'); 
        $('#score').addClass('low'); // Clase para puntaje bajo
    }
});
