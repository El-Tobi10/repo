<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta property="og:title" content="Inicio - BestGamer">
    <meta name="description" content="Inicio de BestGamer ">
    <meta property="og:description" content="Inicio de BestGamer ">
    <meta property="og:type" content="website">
    <meta property="og:url" content="https://www.BestGamer.com">
    <!--Favicon-->
    <link rel="icon" href="/repo/img/joystick.jpeg" sizes="32x32" type="image/x-icon">
    <link rel="icon" href="/repo/img/joystick.jpeg" sizes="16x16" type="image/x-icon">
    <!--Bootstrap-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <!--Css-->
    <link rel="stylesheet" href="/repo/CSS/header_footer.css">
    <link rel="stylesheet" href="/repo/CSS/index.css">
    <!--JavaScript-->
</head>

<body>
    <!--  Header  -->
    <!-- <header class="header sticky-top" data-bs-theme="dark">
        <nav class="navbar navbar-expand-lg navbar-dark flex-column flex-sm-row">
            <ul>
                <li><a class="nav-link op" href="/repo/PHP/index.php">Inicio</a></li>
                <div class="nav-item dropdown op">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                        aria-expanded="false">
                        Plataformas
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#">PC</a></li>
                        <li><a class="dropdown-item" href="#">PS4</a></li>
                        <li><a class="dropdown-item" href="#">PS5</a></li>
                        <li><a class="dropdown-item" href="#">Xbox One</a></li>
                        <li><a class="dropdown-item" href="#">Xbox Series X</a></li>
                        <li><a class="dropdown-item" href="#">Switch</a></li>
                    </ul>
                </div>
                <div class="nav-item dropdown op">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                        aria-expanded="false">
                        Generos
                    </a>
                    <ul class="dropdown-menu" style="$dropdown-min-width: 10rem;">
                        <li><a class="dropdown-item" href="#">2D</a></li>
                        <li><a class="dropdown-item" href="#">Accion</a></li>
                        <li><a class="dropdown-item" href="#">Aventura</a></li>
                        <li><a class="dropdown-item" href="#">Carreras</a></li>
                        <li><a class="dropdown-item" href="#">Deportes</a></li>
                        <li><a class="dropdown-item" href="#">Estrategia</a></li>
                        <li><a class="dropdown-item" href="#">Shooter</a></li>
                        <li><a class="dropdown-item" href="#">Guerra</a></li>
                        <li><a class="dropdown-item" href="#">Lucha</a></li>
                        <li><a class="dropdown-item" href="#">Multijugador</a></li>
                        <li><a class="dropdown-item" href="#">Mundo Abierto</a></li>
                        <li><a class="dropdown-item" href="#">Rol</a></li>
                        <li><a class="dropdown-item" href="#">Simulacion</a></li>
                        <li><a class="dropdown-item" href="#">Supervivencia</a></li>
                        <li><a class="dropdown-item" href="#">Terror</a></li>
                    </ul>
                </div>
            </ul>
            
            <div class="search">
                <input type="search" name="busqueda" placeholder="Buscar">
                <button class="btn btn-outline-success text-white" type="submit">Search</button>
                <?php
                    if (isset($_SESSION['usuario'])) {
                        ?>
                <a href="../PHP/login/logout.php"><button visually="visible" type="button">Cerrar sesión</button></a>
                <?php
                    } else {
                        ?>
                <a href="/repo/PHP/login.php"><button type="button">Iniciar sesión</button></a>
                <?php
                    }
                    ?>
            </div>
        </nav>
    </header> -->
    <header class="header" data-bs-theme="dark">
        <nav class="navbar navbar-expand-lg">
            <div class="container-fluid">
                <a href="/repo/PHP/index.php" class="navbar-brand me-3 logo ">
                    <img src="/repo/img/logo.jpg" alt="" height="100px" max-width="100px" title="Logo BestGamer">
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item op">
                            <a class="nav-link" aria-current="page" href="../PHP/index.php">Inicio</a>
                        </li>
                        <li class="nav-item dropdown op">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                                aria-expanded="false">
                                Plataformas
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="#">PC</a></li>
                                <li><a class="dropdown-item" href="#">PS4</a></li>
                                <li><a class="dropdown-item" href="#">PS5</a></li>
                                <li><a class="dropdown-item" href="#">Xbox One</a></li>
                                <li><a class="dropdown-item" href="#">Xbox Series X</a></li>
                                <li><a class="dropdown-item" href="#">Switch</a></li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown op">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                                aria-expanded="false">
                                Generos
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="#">2D</a></li>
                                <li><a class="dropdown-item" href="#">Accion</a></li>
                                <li><a class="dropdown-item" href="#">Aventura</a></li>
                                <li><a class="dropdown-item" href="#">Carreras</a></li>
                                <li><a class="dropdown-item" href="#">Deportes</a></li>
                                <li><a class="dropdown-item" href="#">Estrategia</a></li>
                                <li><a class="dropdown-item" href="#">Shooter</a></li>
                                <li><a class="dropdown-item" href="#">Guerra</a></li>
                                <li><a class="dropdown-item" href="#">Lucha</a></li>
                                <li><a class="dropdown-item" href="#">Multijugador</a></li>
                                <li><a class="dropdown-item" href="#">Mundo Abierto</a></li>
                                <li><a class="dropdown-item" href="#">Rol</a></li>
                                <li><a class="dropdown-item" href="#">Simulacion</a></li>
                                <li><a class="dropdown-item" href="#">Supervivencia</a></li>
                                <li><a class="dropdown-item" href="#">Terror</a></li>
                            </ul>
                        </li>

                    </ul>
                    <form class="d-flex search" role="search">
                        <div class="input-container">
                            <input type="text" name="text" class="input" placeholder="Buscar...">
                            <span class="icon">
                                <svg width="19px" height="19px" viewBox="0 0 24 24" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                    <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                    <g id="SVGRepo_iconCarrier">
                                        <path opacity="1" d="M14 5H20" stroke="#fff" stroke-width="1.5"
                                            stroke-linecap="round" stroke-linejoin="round"></path>
                                        <path opacity="1" d="M14 8H17" stroke="#fff" stroke-width="1.5"
                                            stroke-linecap="round" stroke-linejoin="round"></path>
                                        <path
                                            d="M21 11.5C21 16.75 16.75 21 11.5 21C6.25 21 2 16.75 2 11.5C2 6.25 6.25 2 11.5 2"
                                            stroke="#fff" stroke-width="2.5" stroke-linecap="round"
                                            stroke-linejoin="round"></path>
                                        <path opacity="1" d="M22 22L20 20" stroke="#fff" stroke-width="3.5"
                                            stroke-linecap="round" stroke-linejoin="round"></path>
                                    </g>
                                </svg>
                            </span>
                        </div>
                    </form>
                    <a href="/repo/PHP/login.php"><button class="inicioSesion" type="button">Iniciar sesión</button></a>
                </div>
            </div>
        </nav>
    </header>