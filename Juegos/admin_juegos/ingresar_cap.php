<?php include "C:/xampp/htdocs/repo/include/header.php"?>
<?php
    if(!isset($_SESSION['admin'])){
        echo "<script language=javascript> location.href='/repo/index.php';</script>";
        die();
    }
    $id_juego = $_SESSION["id_juego"];
?>
<title>Ingreso de Capturas - BestGamer</title>
<link rel="stylesheet" href="/repo/CSS/form.css">

<div class="m-3">
    <label class="form-label"><strong>Capturas Del Juego</strong></label>

    <form action="upload_cap.php?id=<?php echo $id_juego; ?>" id="my-dropzone" class="dropzone" enctype="multipart/form-data">
        <div class="fallback">
            <input type="file" name="cargarJuego" multiple REQUIRED />
        </div>
    </form>
    <button class="inicioSesion mt-3" id="uploadButton">Cargar Imágenes</button>
    <a href="/repo/Juegos/mostrar_Juego.php?id=<?php echo $id_juego?>"><button class="inicioSesion mt-3" type="button">Volver</button></a>

</div>
<?php include "C:/xampp/htdocs/repo/include/footer.php"?>