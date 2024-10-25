<?php include "C:/xampp/htdocs/repo/PHP/include/header.php"?>
<?php
    include "C:/xampp/htdocs/repo/PHP/conexion/conexion.php";
    if(!isset($_SESSION['admin'])){
        echo "<script language=javascript> location.href='/repo/PHP/login.php';</script>";
        die();
    }?>

<title>Ingreso de Juegos - BestGamer</title>
<link rel="stylesheet" href="../CSS/form.css">

<h1 class="text-center">Ingrese los datos del Juego</h1>
<form action="val_juego.php" method="post" class="formulario mx-5" enctype="multipart/form-data">
    <div class="mb-3">
        <label class="form-label">Titulo</label>
        <input type="text" name="titulo" class="form-control" REQUIRED placeholder="Ingrese el titulo aqui..">
    </div>
    <div class="mb-3">
        <label class="form-label">Imagen</label>
        <input type="file" id="img_portada" name="img_portada" class="form-control col-md-4" REQUIRED> 
    </div>
    <div class="mb-3">
        <label class="form-label">Desarrollador</label>
        <select name="desarrollador" class="form-control" id="desarrollador-select" REQUIRED>
            <option value="0">--Seleccione un Desarrollador--</option>
            <?php
                $sql = "SELECT DISTINCT desarrollador FROM juegos";
                $result = mysqli_query($con, $sql);
                
                while ($row = mysqli_fetch_assoc($result)) {
                    echo "<option value='" . $row['desarrollador'] . "'>" . $row['desarrollador'] . "</option>";
                }
                echo"<option value='otro'>Otro</option>";
            ?>
        </select>
        <div id="otro-input" class="mt-2" style="display: none;">
            <input type="text" class="form-control" name="otro-input" placeholder="Ingrese otro desarrollador">
        </div>
        <script>
        document.getElementById('desarrollador-select').addEventListener('change', function() {
            if (this.value === 'otro') {
                document.getElementById('otro-input').style.display = 'block';
            } else {
                document.getElementById('otro-input').style.display = 'none';
            }
        });
        </script>
    </div>
    <div class="mb-3">
        <label class="form-label">Lanzamiento</label>
        <input type="date" name="lanzamiento" class="form-control" REQUIRED>

    </div>
    <div class="mb-3">
        <label class="form-label">Genero/s</label>
        <div class="form-check">
            <?php
                $sql = "SELECT * FROM generos";
                $result = mysqli_query($con, $sql);
                $generos = array();
                echo "<ul style = 'list-style-type: none;'>";
                while ($row = mysqli_fetch_assoc($result)) {
                    echo "<li>";
                    echo "<input class='form-check-input' type='checkbox' name='generos[]' value='".$row['genero']."'>";
                    echo"<label class='form-check-label'>".$row['genero']."</label>";
                    echo "</li>";
                }
                echo "</ul>";
            ?>
        </div>
    </div>
    <div class="mb-3">
        <label class="form-label">Descripcion</label>
        <textarea name="descripcion" placeholder="Ingrese la descripcion del juego..." class="form-control" REQUIRED></textarea>
    </div>
    <div class="mb-3">
        <label class="form-label">Link Trailer</label>
        <input type="url" name="trailer" placeholder="Aqui va la url.." class="form-control" REQUIRED>
    </div>
    <div class="mb-3">
        <label class="form-label">Capturas</label>
        <input type="file" name="capturas" class="form-control" REQUIRED>
    </div>
    <div class="mb-3">
        <label class="form-label">Requisitos Minimos</label>
        <ul>
            <li class="mb-2"><strong>Sistema Operativo:</strong><input type="text" name="so-min" class="form-control" REQUIRED>
            </li>
            <li class="mb-2"><strong>Procesador:</strong><input type="text" name="proce-min" class="form-control" REQUIRED></li>
            <strong>Memoria RAM:</strong>
            <li class="input-group mb-2"><input type="number" name="ram-min" class="form-control" REQUIRED><span
                    class="input-group-text" id="basic-addon1">GB</span></li>
            <li class="mb-2"><strong>Tarjeta de Video:</strong><input type="text" name="video-min" class="form-control" REQUIRED>
            </li>
            <li class="mb-2"><strong>Tarjeta de Sonido:</strong><input type="text" name="audio-min"
                    class="form-control" REQUIRED></li>
            <strong>Espacio de Almacenamiento:</strong>
            <li class="input-group mb-2"><input type="number" name="espacio-min" class="form-control" REQUIRED><span
                    class="input-group-text" id="basic-addon1">GB</span></li>
        </ul>
    </div>
    <div class="mb-3">
        <label class="form-label">Requisitos Recomendados</label>
        <ul>
            <li class="mb-2"><strong>Sistema Operativo:</strong><input type="text" name="so" class="form-control" REQUIRED></li>
            <li class="mb-2"><strong>Procesador:</strong><input type="text" name="proce" class="form-control" REQUIRED></li>
            <strong>Memoria RAM:</strong>
            <li class="input-group mb-2"><input type="number" name="ram" class="form-control" REQUIRED><span
                    class="input-group-text" id="basic-addon1">GB</span></li>
            <li class="mb-2"><strong>Tarjeta de Video:</strong><input type="text" name="video" class="form-control" REQUIRED>
            </li>
            <li class="mb-2"><strong>Tarjeta de Sonido:</strong><input type="text" name="audio" class="form-control" REQUIRED>
            </li>
            <strong>Espacio de Almacenamiento:</strong>
            <li class="input-group mb-2"><input type="number" name="espacio" class="form-control" REQUIRED><span
                    class="input-group-text" id="basic-addon1">GB</span></li>
        </ul>
    </div>
    <div class="text-center mb-2">
        <button type="submit" name="aceptar" class="btn btn-success">Aceptar</button>
        <button type="reset" class="btn btn-outline-danger">Cancelar</button>
    </div>
</form>
<?php include "C:/xampp/htdocs/repo/PHP/include/footer.php"?>