<?php
include "C:/xampp/htdocs/repo/PHP/conexion/conexion.php";
if(isset($_POST['aceptar'])){
    // Datos Juego
    $titulo = $_POST['titulo'];
    $lanzamiento = $_POST['lanzamiento'];
    $desarrollador = $_POST['desarrollador'];
    $generos = $_POST;
    $img = $_POST['imagen'];
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

    if($titulo!=null && $lanzamiento!=null && $desarrollador != null && $generos !=null && $img !=null && $descripcion !=null && $link_trailer !=null && $soMin !=null && $proceMin !=null && $ramMin !=null && $graficaMin !=null && $sonidoMin !=null && $almacenMin !=null && $soReco !=null && $proceReco !=null && $ramReco !=null && $graficaReco !=null && $sonidoReco !=null && $almacenReco !=null){
        $verif_titulo = mysqli_query($con, "SELECT * from juegos WHERE titulo='$titulo' OR img_portada = '$img'");
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
        $id_reqMin = mysqli_query($con, "SELECT id_reqMin FROM requisitos_minimos ORDER BY id_reqMin DESC LIMIT 1");

        $reqRec = mysqli_query($con, "INSERT INTO requisitos_recomendados (so, proce, ram, video, audio, espacio) VALUES ('$soReco', '$proceReco', '$ramReco', '$graficaReco', '$sonidoReco', '$almacenReco')");
        $id_reqRec = mysqli_query($con, "SELECT id_reqRec FROM requisitos_recomendados ORDER BY id_reqRec DESC LIMIT 1");

        $insertar = mysqli_query($con, "INSERT INTO juegos (titulo, lanzamiento, desarrollador, img_portada, descripcion, id_ReqMin, id_ReqRec, link_trailer) VALUES ('$titulo', '$lanzamiento', '$desarrollador', '$img', '$descripcion', '$id_reqMin', '$id_reqRec', '$link_trailer')");
        echo '<script>
                Swal.fire({
                    title: "Registro completado",
                    icon: "success",
                    confirmButtonText: "Aceptar",
                    confirmButtonColor: "#038dac",
                    allowOutsideClick: true
                });
            </script>';
        header("Location:../ingreso_juegos.php");
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
}
?>