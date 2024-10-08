<?php include "C:/xampp/htdocs/repo/PHP/include/header.php"?>
<?php
    if(isset($_SESSION("admin")) == null && isset($_SESSION("usuario")) == null){
        header("location:../login.php");
        die();
    }?>

<title>Juegos - BestGamer</title>
<link rel="stylesheet" href="/repo/CSS/pag_juegos.css">

<div class="container">
    <div class="row g-4 justify-content-md-center">
        <h2 class="text-center">Juegos</h2>
        <div class="col-sm-4">
            <a href="/repo/PHP/Juegos/gtaV.php">
                <div class="carta">
                    <img src="/repo/img/juegos/gtav/grand-theft-auto-v.jpg" alt="">
                    <div class="card__content">
                        <p class="card__title">Grand Theft Auto V</p>
                        <p class="card__description">Cuando un joven estafador callejero, un ladrón de bancos retirado y
                            un psicópata aterrador se ven involucrados con lo peor y más desquiciado del mundo criminal
                            tendrán que llevar a cabo una serie de peligrosos golpes para sobrevivir en una ciudad
                            implacable en la que no pueden confiar en nadie.
                        </p>
                    </div>
                </div>
            </a>
        </div>
        <div class="col-sm-4">
            <a href="/repo/PHP/Juegos/cyberpunk.php">
                <div class="carta">
                    <img src="/repo/img/juegos/cp2077/cyberpunk-2077-horizontal.jpg" alt="">
                    <div class="card__content">
                        <p class="card__title">Cyberpunk 2077</p>
                        <p class="card__description">Cyberpunk 2077 es un RPG de aventura y acción de mundo abierto
                            ambientado en el futuro sombrío de Night City, una peligrosa megalópolis obsesionada con el
                            poder, el glamur y las incesantes modificaciones corporales.
                        </p>
                    </div>
                </div>
            </a>
        </div>
        <div class="col-sm-4">
            <a href="/repo/PHP/Juegos/borderlands2.php">
                <div class="carta">
                    <img src="/repo/img/juegos/Borderlands2/horizontal.jpg" alt="">
                    <div class="card__content">
                        <p class="card__title">Borderlands 2</p>
                        <p class="card__description">Una nueva era de disparos y saqueos está a punto de comenzar. Juega
                            como uno de los cuatro nuevos buscadores de la Cámara y enfréntate a legiones de nuevas
                            criaturas, psicópatas y al villano que las controla, Jack el Guapo.
                        </p>
                    </div>
                </div>
            </a>
        </div>
        <div class="col-sm-4">
            <a href="">
                <div class="carta">
                    <img src="/repo/img/juegos/darkSouls3/DS_horizontal.jpg" alt="">
                    <div class="card__content">
                        <p class="card__title">Dark Souls 3</p>
                        <p class="card__description">Dark Souls continúa redefiniendo los límites con el nuevo y
                            ambicioso capítulo de esta serie revolucionaria, tan aclamada por la crítica. ¡Prepárate
                            para sumergirte en la oscuridad!
                        </p>
                    </div>
                </div>
            </a>
        </div>
        <div class="col-sm-4">
            <a href="">
                <div class="carta">
                    <img src="/repo/img/juegos/Valhalla/ac_horizontal.jfif" alt="">
                    <div class="card__content">
                        <p class="card__title">Assassin's Creed Valhalla</p>
                        <p class="card__description">Ponte en la piel de Eivor, una leyenda vikinga en busca de gloria.
                            Saquea a tus enemigos, haz prosperar tu asentamiento y consolida tu poder político.
                        </p>
                    </div>
                </div>
            </a>
        </div>
        <div class="col-sm-4">
            <a href="">
                <div class="carta">
                    <img src="/repo/img/juegos/sekiro/sekiro_horizontal.jpg" alt="">
                    <div class="card__content">
                        <p class="card__title">Sekiro: Shadows Die Twice</p>
                        <p class="card__description">En Sekiro™: Shadows Die Twice encarnas al 'lobo manco', un guerrero
                            desfigurado y caído en desgracia que ha sido rescatado al borde de la muerte.
                        </p>
                    </div>
                </div>
            </a>
        </div>
        <div class="col-sm-4">
            <a href="">
                <div class="carta">
                    <img src="/repo/img/juegos/fallout_4/fallout_horizontal.jpg" alt="">
                    <div class="card__content">
                        <p class="card__title">Fallout 4</p>
                        <p class="card__description">Eres el único superviviente del Refugio 111 en un mundo destruido
                            por la guerra nuclear. Cada segundo es una lucha por la supervivencia, y en tus manos
                            estarán todas las decisiones. Solo tú puedes reconstruir el yermo y decidir su futuro.
                            Bienvenido a casa.
                        </p>
                    </div>
                </div>
            </a>
        </div>
        <div class="col-sm-4">
            <a href="/repo/PHP/Juegos/RDR2.php">
                <div class="carta">
                    <img src="/repo/img/juegos/RDR2/red-dead-redemption-2-horizontal.jpg" alt="">
                    <div class="card__content">
                        <p class="card__title">Red Dead Redemption 2</p>
                        <p class="card__description">Red Dead Redemption 2 es la épica historia de Arthur Morgan y la
                            banda de Van der Linde, que huyen por toda América en el albor de una nueva era.
                        </p>
                    </div>
                </div>
            </a>
        </div>
        <div class="col-sm-4">
            <a href="/repo/PHP/Juegos/skyrim.php">
                <div class="carta">
                    <img src="/repo/img/juegos/skyrim/portada_Skyrim.jpg" alt="">
                    <div class="card__content">
                        <p class="card__title">The Elder Scrolls V: Skyrim</p>
                        <p class="card__description">En Skyrim, un mundo abierto completo cobra vida para que puedas
                            disfrutarlo a tu antojo, enfrentándote a dragones ancestrales, explorando montañas abruptas
                            y muchas otras cosas.
                        </p>
                    </div>
                </div>
            </a>
        </div>
        <div class="col-sm-4 mx-auto">
            <a href="">
                <div class="carta">
                    <img src="/repo/img/juegos/dbz_zero/dbz_horizontal.jpg" alt="">
                    <div class="card__content">
                        <p class="card__title">DRAGON BALL: Sparking! ZERO</p>
                        <p class="card__description">DRAGON BALL: Sparking! ZERO lleva a un nuevo nivel el legendario
                            estilo de juego de la serie Budokai Tenkaichi. ¡Domina el poder destructivo de los
                            luchadores más fuertes que han aparecido en DRAGON BALL!
                        </p>
                    </div>
                </div>
            </a>
        </div>
    </div>
</div>
<div class="btn-toolbar justify-content-center my-3" role="toolbar" aria-label="Toolbar with button groups">
    <div class="btn-group" role="group" aria-label="First group">
        <button type="button" class="btn btn-primary">1</button>
        <button type="button" class="btn btn-primary">2</button>
        <button type="button" class="btn btn-primary">3</button>
        <button type="button" class="btn btn-primary">4</button>
        <button type="button" class="btn btn-primary">5</button>
    </div>
</div>
<script src="/repo/JS/filtrado_pag_juegos.js"></script>
<?php include "C:/xampp/htdocs/repo/PHP/include/footer.php"?>