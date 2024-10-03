<?php
include "C:/xampp/htdocs/repo/PHP/conexion/conexion.php";
if(isset($_POST['aceptar'])){
    $titulo = $_POST['titulo'];
    $lanzamiento = $_POST['lanzamiento'];
    $desarrollador = $_POST['desarrollador'].value();

    if($titulo!=null && $lanzamiento!=null && $desarrollador!=null){
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
        $insertar = mysqli_query($con, "INSERT INTO juegos (titulo, lanzamiento, desarrollador) VALUES ('$titulo', '$lanzamiento', '$desarrollador')");
        mysqli_query($con,$insertar);
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