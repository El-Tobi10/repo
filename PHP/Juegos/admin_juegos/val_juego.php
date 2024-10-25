<?php
include "C:/xampp/htdocs/repo/PHP/conexion/conexion.php";
if(isset($_POST['aceptar'])){
    // Datos Juego
    $titulo = $_POST['titulo'];
    $lanzamiento = $_POST['lanzamiento'];
    $desarrollador = $_POST['desarrollador'];

    if(isset($_POST['generos'])){
        $generos = implode('/',$_POST['generos']);
    }

    if (isset($_FILES['img_portada'])) {
        $foto = $_FILES['img_portada'];
        print_r($_FILES['img_portada']);
        $img_loc = $_FILES['img_portada']['tmp_name'];
        $img_name = $_FILES['img_portada']['name'];
        $img_des = "C:/xampp/htdocs/repo/img/juegos/". basename($img_name);
        if (move_uploaded_file($img_loc, $img_des)) {
            echo "File is valid, and was successfully uploaded.\n";
            
        } else {
            echo "Possible file upload attack!\n";
        }
    }else {
        echo "No se ha subido ninguna imagen.";
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

    $insertar = mysqli_query($con, "INSERT INTO juegos (titulo, lanzamiento, desarrollador, img_portada, descripcion, generos, id_ReqMin, id_ReqRec, link_trailer) VALUES ('$titulo', '$lanzamiento', '$desarrollador', '$img_name', '$descripcion','$generos', '$id_reqMin', '$id_reqRec', '$link_trailer')");
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
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>