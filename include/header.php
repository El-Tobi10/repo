<?php include "C:/xampp/htdocs/repo/conexion/conexion.php";
session_start();?>
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
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
    <!--Css-->
    <link rel="stylesheet" href="/repo/CSS/header_footer.css">
    <link rel="stylesheet" href="/repo/CSS/index.css">
    <!--DataTable-->
    <link rel="stylesheet" href="https://cdn.datatables.net/2.1.8/css/dataTables.dataTables.min.css">
    <!-- Dropzone -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.9.3/dropzone.min.css">
</head>

<body>
    <header class="header" data-bs-theme="dark">
        <nav class="navbar navbar-expand-lg">
            <div class="container-fluid">
                <a href="/repo/index.php" class="navbar-brand me-3 logo ">
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
                            <a class="nav-link" aria-current="page" href="/repo/index.php">Inicio</a>
                        </li>
                        <li class="nav-item dropdown op">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                                aria-expanded="false">
                                Desarrolladores
                            </a>
                            <ul class="dropdown-menu">
                                <?php
                                    $sql = "SELECT DISTINCT desarrollador FROM juegos";
                                    $result = mysqli_query($con, $sql);
                                    
                                    while ($row = mysqli_fetch_assoc($result)) {
                                        echo "<li><a class='dropdown-item' href='/repo/pag_juegos1.php?desarrollador=". urlencode($row['desarrollador']) ."'>". $row['desarrollador'] ."</a></li>";
                                    }
                                    
                                ?>
                            </ul>
                        </li>
                        <li class="nav-item dropdown op">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                                aria-expanded="false">
                                Generos
                            </a>
                            <ul class="dropdown-menu">
                                <?php
                                    $sql = "SELECT genero FROM generos";
                                    $result = mysqli_query($con, $sql);
                                    
                                    while ($row = mysqli_fetch_assoc($result)) {
                                        echo "<li><a class='dropdown-item' href='/repo/pag_juegos1.php?genero=". urlencode($row['genero']) ."'>". $row['genero'] ."</a></li>";
                                    }
                                    
                                ?>
                            </ul>
                        </li>

                    </ul>
                    <form class="d-flex search" role="search" method="get" action="/repo/pag_juegos1.php">
                        <div class="input-container">
                            <input type="text" name="text" class="input" placeholder="Buscar..."
                                value="<?php echo isset($_GET['text']) ? htmlspecialchars($_GET['text']) : ''; ?>">
                            <button type="submit" class="busqueda">
                                <span class="icon">
                                    <svg width="19px" height="19px" viewBox="0 0 24 24" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                        <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round">
                                        </g>
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
                            </button>
                        </div>
                    </form>
                    <?php
                    if(isset($_SESSION['admin'])){
                        $stmt = $con->prepare("SELECT usuario FROM usuarios WHERE mail = ?");
                        if ($stmt === false) {
                            die("Error en la preparación de la consulta: " . $con->error);
                        }
                        $stmt->bind_param("s", $_SESSION['admin']);
                        $stmt->execute();

                        $result = $stmt->get_result();
                        if ($result->num_rows > 0) {
                            $row = $result->fetch_assoc();
                            $user = $row['usuario'];
                        } else {
                            echo "No se encontró ningún usuario con ese correo.";
                        }

                        $stmt->close();
                        ?>
                    <a href="/repo/Juegos/admin_juegos/ingreso_juegos.php">
                        <button class="inicioSesion mr-2" type="button">Ingresar Juego</button>
                    </a>
                    <a href="/repo/admin_usuarios.php">
                        <button class="inicioSesion mr-2" type="button">Administrar Usuarios</button>
                    </a>

                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="dropdown">
                            <?php echo "<a class='nav-link dropdown-toggle text-white' role='button' data-bs-toggle='dropdown'
                                aria-expanded='false'>
                                Hola ". $user ."
                            </a>";?>
                            <ul class="dropdown-menu ">
                                <li><a href="/repo/login/edit.php" class="dropdown-item">Editar
                                        Nombre</a></li>
                                <li><a href="/repo/login/logout.php" class="dropdown-item">Cerrar
                                        Sesión</a></li>
                            </ul>
                        </li>
                    </ul>
                    <?php } else if (isset($_SESSION['usuario'])){ 
                        $stmt = $con->prepare("SELECT usuario FROM usuarios WHERE mail = ?");
                        if ($stmt === false) {
                            die("Error en la preparación de la consulta: " . $con->error);
                        }
                        $stmt->bind_param("s", $_SESSION['usuario']);
                        $stmt->execute();

                        $result = $stmt->get_result();
                        if ($result->num_rows > 0) {
                            $row = $result->fetch_assoc();
                            $user = $row['usuario'];
                        } else {
                            echo "No se encontró ningún usuario con ese correo.";
                        }

                        $stmt->close();?>
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="dropdown">
                            <?php echo "<a class='nav-link dropdown-toggle text-white' role='button' data-bs-toggle='dropdown'
                                aria-expanded='false'>
                                Hola ". $user ."
                            </a>";?>
                            <ul class="dropdown-menu ">
                                <li><a href="/repo/login/edit.php" class="dropdown-item">Editar
                                        Nombre</a></li>
                                <li><a href="/repo/login/logout.php" class="dropdown-item">Cerrar
                                        Sesión</a></li>
                            </ul>
                        </li>
                    </ul>
                    <?php } else {?>
                    <a href="/repo/login.php"><button class="inicioSesion" type="button">Iniciar sesión</button></a>
                    <?php }?>
                </div>
            </div>
        </nav>
    </header>