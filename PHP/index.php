<?php include "C:/xampp/htdocs/repo/PHP/include/header.php"?>
<title>Inicio - BestGamer</title>
<!-- Gallery -->
<div class="gallery">
    <ul class="contenedor">
        <li class="card cartas from">
            <a role="link" href="#" tabindex="0">
                <img src="/repo/img/Fromsoftware_logo.png" alt="">
            </a>
        </li>
        <li class="card cartas ubi">
            <a role="link" href="#" tabindex="0">
                <img src="/repo/img/Ubisoft_logo.png" alt="">
            </a>
        </li>
        <li class="card cartas rock">
            <a role="link" href="#" tabindex="0">
                <img src="/repo/img/logoRockstar.svg" alt="">
            </a>
        </li>
        <li class="card cartas beth">
            <a role="link" href="#" tabindex="0">
                <img src="/repo/img/bgs-logo.png" alt="">
            </a>
        </li>
        <li class="card cartas dog">
            <a role="link" href="#" tabindex="0">
                <img src="/repo/img/Naughty_Dog_logo.png" alt="">
            </a>
        </li>
    </ul>
</div>

<hr class="border border-secundary border-2 opacity-75 mx-3">
<!--     Main      -->
<main>
    <div class="container">
        <h2>Los Juegos Mas Populares:</h2>
    </div>
    <div class="row row-cols-1 row-cols-md-4 juegos">
        <div class="col">
            <div class="card juego">
                <a href="/repo/PHP/Juegos/gtaV.php">
                    <img src="/repo/img/juegos/gtav/gtaV.jpg" class="card-img-top" alt="...">
                </a>
                <div class="card-body">
                    <h5 class="card-title">Grand Theft Auto V</h5>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card juego">
                <a href="/repo/PHP/Juegos/skyrim.php">
                    <img src="/repo/img/juegos/skyrim/Skyrim.jpg" class="card-img-top" alt="...">
                </a>
                <div class="card-body">
                    <h5 class="card-title">The Elder Scrolls V: Skyrim</h5>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card juego">
                <a href="../PHP/Juegos/RDR2.php">
                    <img src="/repo/img/juegos/RDR2/RDR2.jpg" class="card-img-top" alt="...">
                </a>
                <div class="card-body">
                    <h5 class="card-title">Red Dead Redemption 2</h5>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card juego">
                <a href="../PHP/Juegos/borderlands2.php">
                    <img src="/repo/img/juegos/Borderlands2/Borderlands2.jpg" class="card-img-top" alt="...">
                </a>
                <div class="card-body">
                    <h5 class="card-title">Borderlands 2</h5>
                </div>
            </div>
        </div>
    </div>
    <div class="row row-cols-1 row-cols-md-4 justify-content-center juegos">
        <div class="col">
            <div class="card juego">
                <a href="../PHP/Juegos/cyberpunk.php">
                    <img src="/repo/img/juegos/cp2077/Cyberpunk-2077-portada.jpg" class="card-img-top" alt="...">
                </a>
                <div class="card-body">
                    <h5 class="card-title">Cyberpunk 2077</h5>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card juego">
                <a href="#">
                    <img src="/repo/img/juegos/wukong/black-myth-wukong.png" class="card-img-top" alt="...">
                </a>
                <div class="card-body">
                    <h5 class="card-title">Black Myth: Wukong</h5>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card juego">
                <a href="#">
                    <img src="/repo/img/juegos/elden/Elden_Ring_portada.jpg" class="card-img-top" alt="...">
                </a>
                <div class="card-body">
                    <h5 class="card-title">Elden Ring</h5>
                </div>
            </div>
        </div>
        
    </div>
    <div class="d-grid gap-2 col-6 mx-auto">
        <a href="/repo/PHP/pag_juegos.php" class="btn active boton" aria-pressed="true">Ver Mas</a>
    </div>
    
    <h2 class="container text-center mt-4">Preguntas frecuentes</h2>
    <div class="accordion" id="accordionPanelsStayOpenExample">
        <div class="accordion-item">
            <h2 class="accordion-header">
                <button class="accordion-button" type="button" data-bs-toggle="collapse"
                data-bs-target="#panelsStayOpen-collapseOne" aria-expanded="true"
                aria-controls="panelsStayOpen-collapseOne">
                ¿Quienes somos?
            </button>
        </h2>
        <div id="panelsStayOpen-collapseOne" class="accordion-collapse collapse show">
            <div class="accordion-body">
                Bienvenidos a BestGamer, tu fuente definitiva de información sobre el fascinante mundo de los
                videojuegos. Somos un grupo de geeks apasionados, unidos por nuestro amor incondicional a los
                píxeles, polígonos y líneas de código que dan vida a nuestros mundos virtuales favoritos.
            </div>
        </div>
    </div>
    <div class="accordion-item">
        <h2 class="accordion-header">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
            data-bs-target="#panelsStayOpen-collapseTwo" aria-expanded="false"
            aria-controls="panelsStayOpen-collapseTwo">
                    Nuestra Mision
                </button>
            </h2>
            <div id="panelsStayOpen-collapseTwo" class="accordion-collapse collapse">
                <div class="accordion-body">
                    Nos dedicamos a explorar cada rincón del universo gaming, desde los clásicos de 8 bits hasta los
                    últimos avances en realidad virtual. Nuestro objetivo es proporcionar análisis profundos, noticias
                    frescas y debates acalorados sobre todo lo relacionado con los videojuegos.
                </div>
            </div>
        </div>
        <div class="accordion-item">
            <h2 class="accordion-header">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                data-bs-target="#panelsStayOpen-collapseThree" aria-expanded="false"
                aria-controls="panelsStayOpen-collapseThree">
                Nuestra Promesa
            </button>
        </h2>
        <div id="panelsStayOpen-collapseThree" class="accordion-collapse collapse">
            <div class="accordion-body">
                En BestGamer, nos comprometemos a mantener viva la llama del gaming. Ya seas un novato curioso o un
                veterano curtido en mil batallas virtuales, aquí encontrarás un hogar entre aquellos que entienden
                que la vida es mejor con un controlador en la mano.
                <br>
                ¡Únete a nosotros en esta aventura épica a través del vasto mundo de los videojuegos! Y recuerda:
                puede que el cake sea una mentira, pero nuestra pasión es 100% real.
            </div>
        </div>
    </div>
</div>
</main>

<?php include "C:/xampp/htdocs/repo/PHP/include/footer.php" ?>