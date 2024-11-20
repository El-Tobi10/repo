<?php
include('C:/xampp/htdocs/repo/conexion/conexion.php');
session_start();

$id_juego = $_SESSION['id_juego'];
$query = mysqli_query($con, "SELECT * FROM juegos WHERE id_juego = $id_juego");
$juego = mysqli_fetch_assoc($query);
$img_portada_dir = '/repo/img/juegos/' . pathinfo($juego['img_portada'], PATHINFO_FILENAME). '/capturas';

// Obtener todas las imágenes
$query = "SELECT * FROM capturas WHERE id_juego = $id_juego";
$result = mysqli_query($con, $query);
$row = mysqli_fetch_array($result);

while($row > 0) { ?>
    <div class="image-item" data-id="<?php echo $row['id_captura']; ?>">
        <img src="<?php echo $img_portada_dir .'/'. $row['cap1']; ?>" alt="Imagen">
        <img src="<?php echo $img_portada_dir .'/'.  $row['cap2']; ?>" alt="Imagen">
        <img src="<?php echo $img_portada_dir .'/'.  $row['cap3']; ?>" alt="Imagen">
        <img src="<?php echo $img_portada_dir .'/'.  $row['cap4']; ?>" alt="Imagen">
    </div>
<?php } ?>