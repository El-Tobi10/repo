<?php include "C:/xampp/htdocs/repo/include/header.php"?>
<?php
    if(!isset($_SESSION['admin']) && !isset($_SESSION['usuario'])){
        echo "<script language=javascript> location.href='/repo/login.php';</script>";
        die();
    }
    $id_juego = $_GET["id"];
    $_SESSION["id_juego"] = $id_juego;
    $query = mysqli_query($con, "SELECT * FROM juegos WHERE id_juego = $id_juego");
    while($juego = mysqli_fetch_array($query)){
        $img_portada_dir = '/repo/img/juegos/' . str_replace(" ", "-" , $juego['titulo']);
        $query2 = mysqli_query($con, 
        "SELECT metacritic.*, juegos.id_juego FROM metacritic 
        INNER JOIN juegos ON metacritic.id_critic = juegos.id_critic 
        WHERE juegos.id_juego = $id_juego;");
        $metacritic = mysqli_fetch_assoc($query2);
    ?>
<title><?php echo $juego["titulo"];?> - BestGamer</title>
<link rel="stylesheet" href="/repo/CSS/juegos.css">
<h1 class="text-center text-white"><?php echo $juego["titulo"];?></h1>

<div class="container">
    <img src="<?php echo $img_portada_dir . "/" . $juego['img_portada']?>" alt="imagen portada, <?php echo $juego["titulo"];?>" class="img-fluid min-100">
    <div class="bottom">
        <details>
            <summary>Detalles Generales</summary>
            <p><strong>Generos</strong>: <?php echo str_replace("/",", ",$juego["generos"]);?></p>
            <p><strong>Desarrollador</strong>: <?php echo $juego["desarrollador"];?></p>
            <p><strong>Lanzamiento</strong>: <?php echo $juego["lanzamiento"];?></p>
        </details>
        <div id="metacritic" class="d-flex flex-row-reverse">
            <div id="game_area_metascore">
                <div class="" id="score"><?php echo $metacritic["score"];?></div>
                <div class="logo"></div>
                <div class="wordmark">
                    <div class="metacritic">metacritic</div>
                    <div id="game_area_metalink">
                        <a href="<?php echo $metacritic['link'];?>" class="link-info"
                            target="_blank">Leer las reseñas</a> <img
                            src="https://store.akamai.steamstatic.com/public/images/ico/iconExternalLink.gif">
                    </div>
                </div>
            </div>
            <div style="clear: both"></div>
        </div>
    </div>
</div>

<div class="container">
    <h2 class="mt-4">Descripcion del VideoJuego</h2>
    <p><?php echo $juego["descripcion"];?></p>
</div>

<div class="container">
    <h2 class="mt-4">Gameplay/Trailer</h2>
    <?php 
        // Aquí puedes definir el enlace que deseas usar
        $enlace = isset($juego["link_trailer"]) ? $juego["link_trailer"] : "https://www.youtube.com/embed/CJaoHAlzZtI";
    ?>
    <iframe class="rounded mx-auto d-block" width="60%" height="425px" src="<?php echo htmlspecialchars($enlace); ?>" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
</div>

<?php 
    $cap_juego = mysqli_query($con ,"SELECT * FROM capturas WHERE id_juego = '$id_juego'");
    if(mysqli_num_rows($cap_juego) > 0){
        $resul_cap_juego = mysqli_fetch_assoc($cap_juego);
?>
        <div class="container">
            <h2 class="mt-4">Capturas</h2>
            <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"
                        aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
                        aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
                        aria-label="Slide 3"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="3"
                        aria-label="Slide 4"></button>
                </div>
                <div class="carousel-inner">
                    <div class="carousel-item active" data-bs-interval="4000">
                        <img src="<?php echo $img_portada_dir ."/". $resul_cap_juego['cap1']; ?>" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item" data-bs-interval="2000">
                        <img src="<?php echo $img_portada_dir ."/". $resul_cap_juego['cap2']; ?>" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="<?php echo $img_portada_dir ."/". $resul_cap_juego['cap3']; ?>" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="<?php echo $img_portada_dir ."/". $resul_cap_juego['cap4']; ?>" class="d-block w-100" alt="...">
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
                    data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
                    data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>
<?php } else { ?>
        <div class="container">
            <h2 class="mt-4">Capturas</h2>
            <p>No hay capturas disponibles.</p>
            <?php if(isset($_SESSION['admin'])){?>
                <a href="/repo/Juegos/admin_juegos/ingresar_cap.php?id=<?php echo $id_juego; ?>">
                    <button class="btn btn-primary">Agregar Capturas</button>
                </a>
            <?php }?>
        </div>
<?php };?>

<?php $query3 = mysqli_query($con, 
        "SELECT linkcompra.*, juegos.id_juego FROM linkcompra 
        INNER JOIN juegos ON linkcompra.id_links = juegos.id_links 
        WHERE juegos.id_juego = $id_juego;");
        $linkcompra = mysqli_fetch_assoc($query3);?>
<div class="container">
    <h2 class="mt-4">Compralo aqui</h2>
    <div class="row">
        <div class="col compra steam ">
            <a href="<?php echo $linkcompra['steam']?>" rel="nofollow noopener noreferrer"
                target="_blank">
                <div class="left">
                    <img class="logoCompra" src="/repo/img/steam.png"
                        alt="Logo steam, Steam, juegos, compra videojuegos">
                    Steam
                </div>
                <div class="right">
                    <div class="container_precio">
                        <div class="precio">
                            $<?php echo $linkcompra['precio_steam']?>
                        </div>
                    </div>
                </div>
            </a>
        </div>
        <div class="col compra epic ">
            <a href="<?php echo $linkcompra['epic']?>" rel="nofollow noopener noreferrer"
                target="_blank">
                <div class="left">
                    <img class="logoCompra" src="/repo/img/logo_epic.svg"
                        alt="Logo epic games, Epic Games, juegos, compra videojuegos">
                    <p>Epic Games</p>
                </div>
                <div class="right">
                    <div class="container_precio">
                        <div class="precio">
                            $<?php echo $linkcompra['precio_epic']?>
                        </div>
                    </div>
                </div>
            </a>
        </div>
        <div class="col compra micro">
            <a href="<?php echo $linkcompra['xbox']?>"
                rel="nofollow noopener noreferrer" target="_blank">
                <div class="left">
                    <svg xmlns="http://www.w3.org/2000/svg" class="logoCompra" fill="currentColor" class="bi bi-xbox"
                        viewBox="0 0 16 16">
                        <path
                            d="M7.202 15.967a8 8 0 0 1-3.552-1.26c-.898-.585-1.101-.826-1.101-1.306 0-.965 1.062-2.656 2.879-4.583C6.459 7.723 7.897 6.44 8.052 6.475c.302.068 2.718 2.423 3.622 3.531 1.43 1.753 2.088 3.189 1.754 3.829-.254.486-1.83 1.437-2.987 1.802-.954.301-2.207.429-3.239.33m-5.866-3.57C.589 11.253.212 10.127.03 8.497c-.06-.539-.038-.846.137-1.95.218-1.377 1.002-2.97 1.945-3.95.401-.417.437-.427.926-.263.595.2 1.23.638 2.213 1.528l.574.519-.313.385C4.056 6.553 2.52 9.086 1.94 10.653c-.315.852-.442 1.707-.306 2.063.091.24.007.15-.3-.319Zm13.101.195c.074-.36-.019-1.02-.238-1.687-.473-1.443-2.055-4.128-3.508-5.953l-.457-.575.494-.454c.646-.593 1.095-.948 1.58-1.25.381-.237.927-.448 1.161-.448.145 0 .654.528 1.065 1.104a8.4 8.4 0 0 1 1.343 3.102c.153.728.166 2.286.024 3.012a9.5 9.5 0 0 1-.6 1.893c-.179.393-.624 1.156-.82 1.404-.1.128-.1.127-.043-.148ZM7.335 1.952c-.67-.34-1.704-.705-2.276-.803a4 4 0 0 0-.759-.043c-.471.024-.45 0 .306-.358A7.8 7.8 0 0 1 6.47.128c.8-.169 2.306-.17 3.094-.005.85.18 1.853.552 2.418.9l.168.103-.385-.02c-.766-.038-1.88.27-3.078.853-.361.176-.676.316-.699.312a12 12 0 0 1-.654-.319Z" />
                    </svg>
                    Xbox
                </div>
                <div class="right">
                    <div class="container_precio">
                        <div class="precio">
                            $<?php echo $linkcompra['precio_xbox']?>
                        </div>
                    </div>
                </div>
            </a>
        </div>
    </div>
</div>

<?php $query4 = mysqli_query($con, 
        "SELECT requisitos_minimos.*, juegos.id_juego FROM requisitos_minimos 
        INNER JOIN juegos ON requisitos_minimos.id_reqMin = juegos.id_reqMin 
        WHERE juegos.id_juego = $id_juego;");
        $requisitos_minimos = mysqli_fetch_assoc($query4);?>
<div class="container">
    <h2 class="mt-4">Requisitos del sistema</h2>
    <h3 class="mt-2">Minimos</h3>
    <ul>
        <li>
            <strong>Sistema Operativo: </strong><span style="font-size: inherit;"><?php echo $requisitos_minimos['so']?></span>
        </li>
        <li>
            <strong>Procesador: </strong><span style="font-size: inherit;"><?php echo $requisitos_minimos['proce']?></span>
        </li>
        <li>
            <strong>Memoria RAM: </strong><span style="font-size: inherit;"><?php echo $requisitos_minimos['ram']?> GB</span>
        </li>
        <li>
            <strong>Tarjeta de Video: </strong><span style="font-size: inherit;"><?php echo $requisitos_minimos['video']?></span>
        </li>
        <li>
            <strong>Tarjeta de Sonido: </strong><span style="font-size: inherit;"><?php echo $requisitos_minimos['audio']?></span>
        </li>
        <li>
            <strong>Espacio de Almacenamiento: </strong><span style="font-size: inherit;"><?php echo $requisitos_minimos['espacio']?> GB</span>
        </li>
    </ul>
    <?php $query5 = mysqli_query($con, 
        "SELECT requisitos_recomendados.*, juegos.id_juego FROM requisitos_recomendados 
        INNER JOIN juegos ON requisitos_recomendados.id_reqRec = juegos.id_reqRec 
        WHERE juegos.id_juego = $id_juego;");
        $requisitos_recomendados = mysqli_fetch_assoc($query5);?>
    <h3 class="mt-2">Recomendados</h3>
    <ul>
        <li>
            <strong>Sistema Operativo: </strong><span style="font-size: inherit;"><?php echo $requisitos_recomendados['so']?></span>
        </li>
        <li>
            <strong>Procesador: </strong><span style="font-size: inherit;"><?php echo $requisitos_recomendados['proce']?></span>
        </li>
        <li>
            <strong>Memoria RAM: </strong><span style="font-size: inherit;"><?php echo $requisitos_recomendados['ram']?> GB</span>
        </li>
        <li>
            <strong>Tarjeta de Video: </strong><span style="font-size: inherit;"><?php echo $requisitos_recomendados['video']?></span>
        </li>
        <li>
            <strong>Tarjeta de Sonido: </strong><span style="font-size: inherit;"><?php echo $requisitos_recomendados['audio']?></span>
        </li>
        <li>
            <strong>Espacio de Almacenamiento: </strong><span style="font-size: inherit;"><?php echo $requisitos_recomendados['espacio']?> GB</span>
        </li>
    </ul>
</div>

<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card shadow-sm">
                <div class="card-body">
                    <h2 class="card-title text-center mb-4">Califica este Juego</h2>
                    <form id="ratingForm">
                        <div class="mb-4">
                            <label for="ratingStars" class="form-label">Tu Calificacion:</label>
                            <div id="ratingStars" class="rating-stars" role="radiogroup"
                                aria-label="Rate the fitness class">
                                <i class="bi bi-star" data-rating="1" tabindex="0" role="radio"
                                    aria-checked="false"></i>
                                <i class="bi bi-star" data-rating="2" tabindex="0" role="radio"
                                    aria-checked="false"></i>
                                <i class="bi bi-star" data-rating="3" tabindex="0" role="radio"
                                    aria-checked="false"></i>
                                <i class="bi bi-star" data-rating="4" tabindex="0" role="radio"
                                    aria-checked="false"></i>
                                <i class="bi bi-star" data-rating="5" tabindex="0" role="radio"
                                    aria-checked="false"></i>
                            </div>
                            <div id="ratingError" class="text-danger mt-2" role="alert"></div>
                        </div>
                        <div class="mb-4">
                            <label for="feedback" class="form-label">Dejanos un comentario:</label>
                            <textarea id="feedback" class="form-control" rows="3"
                                placeholder="Comparte tus pensamientos sobre el juego..."
                                aria-describedby="feedbackHelp"></textarea>
                            <div id="feedbackHelp" class="form-text comenthelp">Tu comentario nos ayudará mucho a
                                mejorar!</div>
                        </div>
                        <div class="d-grid">
                            <button type="submit" id="submitRating" class="btn btn-primary" disabled>Enviar</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</div>

<?php include "C:/xampp/htdocs/repo/include/footer.php"; 
}?>
