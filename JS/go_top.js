window.addEventListener('scroll', function() {
    var scrollPosition = window.scrollY;
    var btnSubir = document.getElementById('gp-to-top');

    if (scrollPosition > 0) {
        btnSubir.classList.add('mostrar');
    } else {
        btnSubir.classList.remove('mostrar');
    }
});