<?php include "C:/xampp/htdocs/repo/PHP/include/header.php"?>
<?php
    include "C:/xampp/htdocs/repo/PHP/conexion/conexion.php";
    if(!isset($_SESSION['admin']) && !isset($_SESSION['usuario'])){
        echo "<script language=javascript> location.href='/repo/PHP/login.php';</script>";
        die();
    }?>
<title>Juegos - BestGamer</title>
<link rel="stylesheet" href="/repo/CSS/pag_juegos.css">

<div class="card-header text-center"><strong>Listado de Personas </strong></div>

<table class="table">
    <thead>
        <tr>
            <th>Nombre</th>
            <th>Nacionalidad</th>
            <th>Foto</th>
            <th>Sexo</th>
            <th>Dosis</th>
            <th>Fecha</th>
        </tr>
    </thead>

    <tbody>
        <?php
             
            $query = "SELECT * FROM juegos"; 
            // INNER JOIN requisitos_recomendados ON juegos.id_juego = requisitos_recomendados.id_reqRec";
            $resultado = mysqli_query($con,$query);
            while($row = mysqli_fetch_array($resultado)){
        ?>
        <tr>
            <td><?php echo $row['titulo'];?></td>
            <td><?php echo $row['desarrollador'];?></td>
            <td><?php echo "<img height='70px' width='60px' src='C:/xampp/htdocs/repo/img/juegos/".$row['img_portada']."'>";?></td>
            <td><?php echo $row['link_trailer']; ?></td>
            <td><?php echo $row['generos']; ?></td>
            <td><?php echo $row['lanzamiento']; ?></td>
        </tr>

        <?php } ?>
    </tbody>
</table>



<!-- 
<table id="example">
    <tbody>
        <tr class="row">
            <td class="col">
                <div class="carta">
                    <a href="/repo/PHP/Juegos/gtaV.php">
                        <img src="/repo/img/juegos/gtav/grand-theft-auto-v.jpg" alt="">
                        <div class="card__content">
                            <p class="card__title">Grand theft Auto V</p>
                            <p class="card__description">Cuando un joven estafador callejero, un ladrón de bancos
                                retirado y
                                un psicópata aterrador se ven involucrados con lo peor y más desquiciado del mundo
                                criminal
                                tendrán que llevar a cabo una serie de peligrosos golpes para sobrevivir en una
                                ciudad
                                implacable en la que no pueden confiar en nadie.
                            </p>
                        </div>
                    </a>
                </div>
            </td>
            <td class="col">
                <div class="carta">
                    <a href="/repo/PHP/Juegos/cyberpunk.php">
                        <img src="/repo/img/juegos/cp2077/cyberpunk-2077-horizontal.jpg" alt="">
                        <div class="card__content">
                            <p class="card__title">Cyberpunk 2077</p>
                            <p class="card__description">Cyberpunk 2077 es un RPG de aventura y acción de mundo
                                abierto
                                ambientado en el futuro sombrío de Night City, una peligrosa megalópolis obsesionada
                                con
                                el
                                poder, el glamur y las incesantes modificaciones corporales.
                            </p>
                        </div>
                    </a>
                </div>
            </td>
            <td class="col">
                <div class="carta">
                    <a href="">
                        <img src="/repo/img/juegos/darkSouls3/DS_horizontal.jpg" alt="">
                        <div class="card__content">
                            <p class="card__title">Dark Souls 3</p>
                            <p class="card__description">Dark Souls continúa redefiniendo los límites con el nuevo y
                                ambicioso capítulo de esta serie revolucionaria, tan aclamada por la crítica.
                                ¡Prepárate
                                para sumergirte en la oscuridad!
                            </p>
                        </div>
                    </a>
                </div>
            </td>
        </tr>
        <tr class="row">
            <td class="col">
                <div class="carta">
                    <a href="">
                        <img src="/repo/img/juegos/Valhalla/ac_horizontal.jfif" alt="">
                        <div class="card__content">
                            <p class="card__title">Assassin's Creed Valhalla</p>
                            <p class="card__description">Ponte en la piel de Eivor, una leyenda vikinga en busca de
                                gloria.
                                Saquea a tus enemigos, haz prosperar tu asentamiento y consolida tu poder político.
                            </p>
                        </div>
                    </a>
                </div>
            </td>
            <td class="col">
                <div class="carta">
                    <a href="">
                        <img src="/repo/img/juegos/sekiro/sekiro_horizontal.jpg" alt="">
                        <div class="card__content">
                            <p class="card__title">Sekiro: Shadows Die Twice</p>
                            <p class="card__description">En Sekiro™: Shadows Die Twice encarnas al 'lobo manco', un
                                guerrero
                                desfigurado y caído en desgracia que ha sido rescatado al borde de la muerte.
                            </p>
                        </div>
                    </a>
                </div>
            </td>
            <td class="col">
                <div class="carta">
                    <a href="">
                        <img src="/repo/img/juegos/fallout_4/fallout_horizontal.jpg" alt="">
                        <div class="card__content">
                            <p class="card__title">Fallout 4</p>
                            <p class="card__description">Eres el único superviviente del Refugio 111 en un mundo
                                destruido
                                por la guerra nuclear. Cada segundo es una lucha por la supervivencia, y en tus
                                manos
                                estarán todas las decisiones. Solo tú puedes reconstruir el yermo y decidir su
                                futuro.
                                Bienvenido a casa.
                            </p>
                        </div>
                    </a>
                </div>
            </td>
        </tr>
        <tr class="row">
            <td class="col">
                <div class="carta">
                    <a href="/repo/PHP/Juegos/RDR2.php">
                        <img src="/repo/img/juegos/RDR2/red-dead-redemption-2-horizontal.jpg" alt="">
                        <div class="card__content">
                            <p class="card__title">Red Dead Redemption 2</p>
                            <p class="card__description">Red Dead Redemption 2 es la épica historia de Arthur Morgan
                                y
                                la
                                banda de Van der Linde, que huyen por toda América en el albor de una nueva era.
                            </p>
                        </div>
                    </a>
                </div>
            </td>
            <td class="col">
                <div class="carta">
                    <a href="/repo/PHP/Juegos/borderlands2.php">
                        <img src="/repo/img/juegos/Borderlands2/horizontal.jpg" alt="">
                        <div class="card__content">
                            <p class="card__title">Borderlands 2</p>
                            <p class="card__description">Una nueva era de disparos y saqueos está a punto de
                                comenzar.
                                Juega
                                como uno de los cuatro nuevos buscadores de la Cámara y enfréntate a legiones de
                                nuevas
                                criaturas, psicópatas y al villano que las controla, Jack el Guapo.
                            </p>
                        </div>
                    </a>
                </div>
            </td>
            <td class="col">
                <div class="carta">
                    <a href="/repo/PHP/Juegos/skyrim.php">
                        <img src="/repo/img/juegos/skyrim/portada_Skyrim.jpg" alt="">
                        <div class="card__content">
                            <p class="card__title">The Elder Scrolls V: Skyrim</p>
                            <p class="card__description">En Skyrim, un mundo abierto completo cobra vida para que
                                puedas
                                disfrutarlo a tu antojo, enfrentándote a dragones ancestrales, explorando montañas
                                abruptas
                                y muchas otras cosas.
                            </p>
                        </div>
                    </a>
                </div>
            </td>
        </tr>
        <tr class="row">
            <td class="col">
                <div class="carta">
                    <a href="">
                        <img src="/repo/img/juegos/dbz_zero/dbz_horizontal.jpg" alt="">
                        <div class="card__content">
                            <p class="card__title">DRAGON BALL: Sparking! ZERO</p>
                            <p class="card__description">DRAGON BALL: Sparking! ZERO lleva a un nuevo nivel el
                                legendario
                                estilo de juego de la serie Budokai Tenkaichi. ¡Domina el poder destructivo de los
                                luchadores más fuertes que han aparecido en DRAGON BALL!
                            </p>
                        </div>
                    </a>
                </div>
            </td>
        </tr>
    </tbody>
</table>

<div class="btn-toolbar justify-content-center my-3" role="toolbar" aria-label="Toolbar with button groups">
    <div class="btn-group" role="group" aria-label="First group">
        <button type="button" class="btn btn-primary">1</button>
        <button type="button" class="btn btn-primary">2</button>
        <button type="button" class="btn btn-primary">3</button>
        <button type="button" class="btn btn-primary">4</button>
        <button type="button" class="btn btn-primary">5</button>
    </div>
</div>
<div id="game_data"></div> -->

<script>
new DataTable('#example');
</script>
<script type="text/javascript">
// paginacion
function fetch_data(page) {
    $.ajax({
        url: "/Juegos/paginacion.php",
        method: "POST",
        dataType: "json",
        data: {
            page: page
        },
        success: function(data) {
            console.log(page);
            $('#game_data').html(data);
        }
        error: function(xhr, status, error) {
            console.log(xhr.responseText); // Verificar si hay algún error
        }
    });
}
fetch_data();
$(document).on("click", ".page-item", function() {
    var page = $(this).attr("id_juego");
    fetch_data(page);
})
</script>
<?php include "C:/xampp/htdocs/repo/PHP/include/footer.php"?>