<?php 
include "C:/xampp/htdocs/repo/PHP/conexion/conexion.php";
session_start();
if (isset($_SESSION['id_juego'])) {
    $id_juego = $_SESSION['id_juego'];
    $query = mysqli_query($con, "SELECT * FROM juegos WHERE id_juego = $id_juego");
    $juego = mysqli_fetch_assoc($query);
    $img_portada_dir = 'C:/xampp/htdocs/repo/img/juegos/' . pathinfo($juego['img_portada'], PATHINFO_FILENAME);
    if(!file_exists($img_portada_dir)){
        echo 'No se encontro la carpeta de destino.';
        die();
    }
    if (!empty($_FILES['file'])) {
        $nombre_capturas = [];
        foreach ($_FILES['file']['name'] as $key => $name) {
            $tmp_name = $_FILES['file']['tmp_name'][$key];
            $destino = $img_portada_dir . '/capturas';
            if(!file_exists($destino)){
                mkdir($destino,0777, true);
            }
            
            // Mover el archivo a la carpeta de destino
            if (move_uploaded_file($tmp_name, $destino .'/'. basename($name))) {
                $nombre_capturas[] = $name;
            }
        }
        
        // Convertir el array de rutas en una cadena separada por comas
        // $imagePathsString = implode('/', $imagePaths);
        var_dump($nombre_capturas);
        if (count($nombre_capturas) == 4) {
            // Insertar en la base de datos
            $sql = "INSERT INTO capturas(cap1, cap2, cap3, cap4, id_juego) VALUES('$nombre_capturas[0]', '$nombre_capturas[1]', '$nombre_capturas[2]', '$nombre_capturas[3]', '$id_juego')";
            
            if ($con->query($sql) === TRUE) {
                echo "Imágenes subidas y registradas correctamente.";
            } else {
                echo "Error: " . $sql . "<br>" . $con->error;
            }
            
            // Cerrar conexión
            $con->close();
        }
    }
}
?>