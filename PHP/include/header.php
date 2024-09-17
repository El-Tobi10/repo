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
    <header class="header sticky-top" data-bs-theme="dark">
        <nav class="navbar navbar-expand-sm navbar-dark flex-column flex-sm-row">
            <ul>
                <li><a class="nav-item op" href="/repo/PHP/index.php">Inicio</a></li>
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
                </div>
            </ul>
            <a href="/repo/PHP/index.php" class="logo navbar-brand">
                <img src="/repo/img/logo.jpg" alt="" height="100px" max-width="100px" title="Logo BestGamer">
            </a>
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
    </header>