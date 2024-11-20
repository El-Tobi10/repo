<?php
include "C:/xampp/htdocs/repo/conexion/conexion.php";
session_start();
if(isset($_POST['aceptar'])){
    // Datos Juego
    $titulo = $_POST['titulo'];
    $lanzamiento = $_POST['lanzamiento'];
    $desarrollador = $_POST['desarrollador'];

    if(isset($_POST['generos'])){
        $generos = implode('/',$_POST['generos']);
    }

    // Metacritic
    $score = $_POST['score'];
    $link_meta = $_POST['metacritic'];

    // Compras
    $steam = $_POST['steam'];
    $epic = $_POST['epic'];
    $xbox = $_POST['xbox'];
    $precio_steam = $_POST['precio_steam'];
    $precio_epic = $_POST['precio_epic'];
    $precio_xbox = $_POST['precio_xbox'];

    // imagen de Portada
    if (!empty($_FILES['img_portada'])) {
        // print_r($_FILES['img_portada']);
        $foto = $_FILES['img_portada'];
        $img_loc = $foto['tmp_name'];
        $img_name = $foto['name'];
        $img_des = "C:/xampp/htdocs/repo/img/juegos/". pathinfo($img_name, PATHINFO_FILENAME);
        if(!file_exists($img_des)){
            mkdir($img_des);
        }
        $mover_aca = $img_des . "/" . basename($img_name);
        if(move_uploaded_file($img_loc, $mover_aca)) {
            echo "Imagen cargada con exito.\n";
            
        } else {
            echo "Error al cargar imagen.\n";
        }
    }else {
        echo "No se ha subido ninguna imagen.\n";
    }

    $descripcion = $_POST['descripcion'];
    $link_trailer = $_POST['trailer'];

    // Requisitos minimos
    $soMin = $_POST['so-min'];
    $proceMin = $_POST['proce-min'];
    $ramMin = $_POST['ram-min'];
    $graficaMin = $_POST['video-min'];
    $sonidoMin = $_POST['audio-min'];
    $almacenMin = $_POST['espacio-min'];

    // Requisitos recomendados
    $soReco = $_POST['so'];
    $proceReco = $_POST['proce'];
    $ramReco = $_POST['ram'];
    $graficaReco = $_POST['video'];
    $sonidoReco = $_POST['audio'];
    $almacenReco = $_POST['espacio'];
    
    // Insercion de datos
    $verif_titulo = mysqli_query($con, "SELECT * from juegos WHERE titulo='$titulo'");
    if(mysqli_num_rows($verif_titulo) > 0){
        echo '
        <script>
        alert("Este videojuego ya estan registrado. Intente de nuevo con otro.");
        load();
        </script>';
        exit();
    }
    if ($desarrollador=='otro'){
        $desarrollador = $_POST['otro-input'];
    }

    // Ingreso Metacritic
    $ins_metac = mysqli_query($con, "INSERT INTO metacritic(score, link) VALUES ('$score', '$link_meta')");
    if (!$ins_metac) {
        die("Error en Metacritic: " . mysqli_error($con));
    }
    $id_meta = mysqli_query($con, "SELECT id_critic FROM metacritic ORDER BY id_critic DESC LIMIT 1");
    $row = mysqli_fetch_assoc($id_meta);
    if($row > 0){
        $id_meta = $row['id_critic'];
    }
    else{
        die("Error en Metacritic: " . mysqli_error($con));
    }

    // Ingreso Links de compra
    $links = mysqli_query($con, "INSERT INTO linkcompra (steam, precio_steam, epic, precio_epic, xbox, precio_xbox) VALUES ('$steam','$precio_steam', '$epic', '$precio_epic', '$xbox', '$precio_xbox')");
    if (!$links) {
        die("Error en Metacritic: " . mysqli_error($con));
    }
    $id_compra = mysqli_query($con, "SELECT id_links FROM linkcompra ORDER BY id_links DESC LIMIT 1");
    $row = mysqli_fetch_assoc($id_compra);
    if($row > 0){
        $id_compra = $row['id_links'];
    }
    else{
        die("Error en Links de Compra: " . mysqli_error($con));
    }

    // Ingreso Requisitos mínimos y recomendados
    $reqMin = mysqli_query($con, "INSERT INTO requisitos_minimos (so, proce, ram, video, audio, espacio) VALUES ('$soMin', '$proceMin', '$ramMin', '$graficaMin', '$sonidoMin', '$almacenMin')");
    
    if (!$reqMin) {
        die("Error en requisitos mínimos: " . mysqli_error($con));
    }
    $id_reqMin = mysqli_query($con, "SELECT id_reqMin FROM requisitos_minimos ORDER BY id_reqMin DESC LIMIT 1");
    $row = mysqli_fetch_assoc($id_reqMin);
    $id_reqMin = $row['id_reqMin'];

    $reqRec = mysqli_query($con, "INSERT INTO requisitos_recomendados (so, proce, ram, video, audio, espacio) VALUES ('$soReco', '$proceReco', '$ramReco', '$graficaReco', '$sonidoReco', '$almacenReco')");
    if (!$reqRec) {
        die("Error en requisitos recomendados: " . mysqli_error($con));
    }

    $id_reqRec = mysqli_query($con, "SELECT id_reqRec FROM requisitos_recomendados ORDER BY id_reqRec DESC LIMIT 1");
    $row = mysqli_fetch_assoc($id_reqRec);
    $id_reqRec = $row['id_reqRec'];

    
    // Ingreso General de Juegos
    $insertar = mysqli_query($con, "INSERT INTO juegos (titulo, lanzamiento, desarrollador, img_portada, descripcion, generos, id_ReqMin, id_ReqRec, link_trailer, id_links, id_critic) VALUES ('$titulo', '$lanzamiento', '$desarrollador', '$img_name', '$descripcion','$generos', '$id_reqMin', '$id_reqRec', '$link_trailer', '$id_compra', '$id_meta')");

    if (!$insertar) {
        die("Error al insertar el juego: " . mysqli_error($con));
    }
    
    echo '<script>
            Swal.fire({
                title: "Registro completado",
                icon: "success",
                confirmButtonText: "Aceptar",
                confirmButtonColor: "#038dac",
                allowOutsideClick: true
            });
        </script>';
    header("Refresh: 2; url=/repo/pag_juegos1.php");
}
    else {
        echo '
            <script>
                Swal.fire({
                    title: "Registro incompleto",
                    text: "Debe llenar todos los campos",
                    icon: "error",
                    confirmButtonText: "Aceptar",
                    confirmButtonColor: "#038dac",
                    allowOutsideClick: true
                });
                load();
            </script>';
    }

?>