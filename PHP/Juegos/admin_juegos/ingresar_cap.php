<?php include "C:/xampp/htdocs/repo/PHP/include/header.php"?>
<?php
    if(!isset($_SESSION['admin'])){
        echo "<script language=javascript> location.href='/repo/PHP/index.php';</script>";
        die();
    }?>
<title>Ingreso de Capturas - BestGamer</title>
<link rel="stylesheet" href="/repo/CSS/form.css">

<div class="mb-3">
    <label class="form-label"><strong>Capturas Del Juego</strong></label>

    <form action="upload_cap.php" id="my-dropzone" class="dropzone" enctype="multipart/form-data">
        <div class="fallback">
            <input type="file" name="cargarJuego" multiple REQUIRED />
        </div>
    </form>
    <button id="uploadButton">Cargar Imágenes</button>

    <h2>Imágenes Subidas</h2>
    <div class="image-gallery" id="imageGallery"></div>
</div>
<?php include "C:/xampp/htdocs/repo/PHP/include/footer.php"?>