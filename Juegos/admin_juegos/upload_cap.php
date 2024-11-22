<?php 
include "C:/xampp/htdocs/repo/conexion/conexion.php";
$id_juego = $_GET["id"];
if ($id_juego) {
    $query = mysqli_query($con, "SELECT * FROM juegos WHERE id_juego = $id_juego");
    $juego = mysqli_fetch_assoc($query);
    $img_portada_dir = $_SERVER['DOCUMENT_ROOT'] . '/repo/img/juegos/'. str_replace(" ", "-" , $juego['titulo']);
    if (!empty($_FILES['file'])) {
        $nombre_capturas = [];
        foreach ($_FILES['file']['name'] as $key => $name) {
            $tmp_name = $_FILES['file']['tmp_name'][$key];
            if (move_uploaded_file($tmp_name, $img_portada_dir .'/'. basename($name))) {
                $nombre_capturas[] = $name;
            }
        }
        
        if (count($nombre_capturas) == 4) {
            $sql = "INSERT INTO capturas(cap1, cap2, cap3, cap4, id_juego) VALUES('$nombre_capturas[0]', '$nombre_capturas[1]', '$nombre_capturas[2]', '$nombre_capturas[3]', '$id_juego')";
            
            if ($con->query($sql) === FALSE) {
                echo "Error: " . $sql . "<br>" . $con->error;
            }
            $con->close();
        } else{
            echo '<script>
                    swal.fire({
                        title = "Cantidad de capturas incorrecta",
                        text = "Debes subir 4 imágenes.",
                        icon = "error",
                        confirmButtonText = "Aceptar",
                        confirmButtonColor: "#038dac",
                        allowOutsideClick: true
                    });
                </script>';
        }
    }
}
?>
