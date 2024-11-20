<?php 
include "C:/xampp/htdocs/repo/conexion/conexion.php";
$id_juego = $_GET["id"];
if ($id_juego) {
    $query = mysqli_query($con, "SELECT * FROM juegos WHERE id_juego = $id_juego");
    $juego = mysqli_fetch_assoc($query);
    $img_portada_dir = '/repo/img/juegos/'. pathinfo($juego['img_portada'], PATHINFO_FILENAME);
    if (!empty($_FILES['file'])) {
        $nombre_capturas = [];
        foreach ($_FILES['file']['name'] as $key => $name) {
            $tmp_name = $_FILES['file']['tmp_name'][$key];
            $destino = $img_portada_dir . '/capturas';
            if(!file_exists($destino)){
                mkdir($destino,0777, true);
            }
            if (move_uploaded_file($tmp_name, $destino .'/'. basename($name))) {
                $nombre_capturas[] = $name;
            }
        }
        
        if (count($nombre_capturas) == 4) {
            $sql = "INSERT INTO capturas(cap1, cap2, cap3, cap4, id_juego) VALUES('$nombre_capturas[0]', '$nombre_capturas[1]', '$nombre_capturas[2]', '$nombre_capturas[3]', '$id_juego')";
            
            if ($con->query($sql) === TRUE) {
                echo "Imágenes subidas y registradas correctamente.";
            } else {
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
