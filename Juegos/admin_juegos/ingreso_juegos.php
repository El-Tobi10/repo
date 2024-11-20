<?php include "C:/xampp/htdocs/repo/include/header.php"?>
<?php
    if(!isset($_SESSION['admin'])){
        echo "<script language=javascript> location.href='/repo/login.php';</script>";
        die();
    }?>

<title>Ingreso de Juegos - BestGamer</title>
<link rel="stylesheet" href="/repo/CSS/form.css">

<h1 class="text-center">Ingrese los datos del Juego</h1>
<form action="val_juego.php" method="post" class="formulario mx-5" enctype="multipart/form-data">
    <div class="row">
        <div class="col-sm-6">
            <div class="mb-3">
                <label class="form-label"><strong>Titulo</strong></label>
                <input type="text" name="titulo" class="form-control" REQUIRED placeholder="Ingrese el titulo aqui..">
            </div>
            <div class="mb-3">
                <label class="form-label"><strong>Imagen</strong></label>
                <input type="file" id="img_portada" name="img_portada" class="form-control col-md-4" REQUIRED>
            </div>
            <div class="mb-3">
                <label class="form-label"><strong>Desarrollador</strong></label>
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
                <label class="form-label"><strong>Lanzamiento</strong></label>
                <input type="date" name="lanzamiento" class="form-control" REQUIRED>

            </div>
            <div class="mb-3">
                <label class="form-label"><strong>Genero/s</strong></label>
                <div class="form-check">
                    <?php
                    $sql = "SELECT * FROM generos";
                    $result = mysqli_query($con, $sql);
                    $generos = array();
                    // echo "<ul style = 'list-style-type: none;'>";
                    while ($row = mysqli_fetch_assoc($result)) {
                        // echo "<li>";
                        echo "<label class='form-check-label me-5'>".$row['genero']." <input class='form-check-input' type='checkbox' name='generos[]' value='".$row['genero']."'></label>";
                        echo"";
                        // echo "</li>";
                    }
                    // echo "</ul>";
                ?>
                </div>
            </div>
        </div>
        <div class="col-sm-6">
            <div class="mb-3">
                <label class="form-label"><strong>Metacritic</strong></label>
                <div class="mb-1">
                    <ul>
                        <label class="form-label">Score</label>
                        <li class="input-group mb-2"><input type="number" name="score" class="form-control" min="1" max="100" placeholder="Solo se admiten numeros desde el 1 al 100" REQUIRED>
                        </li>
                        <label class="form-label">Link de Metacritic</label>
                        <li class="input-group mb-2"><input type="url" name="metacritic"
                                placeholder="Aqui va la url de Metacritic" data-validation="url" class="form-control"
                                REQUIRED></li>
                    </ul>
                </div>

            </div>
            <div class="mb-3">
                <label class="form-label"><strong>Links de Compras</strong></label>
                <div class="mb-1">
                    <ul>
                    <label class="me-1">Steam</label><i class="bi bi-steam"></i>
                    <li class="input-group mb-2"><input type="url" name="steam" placeholder="Aqui va la url.." data-validation="url"
                        class="form-control"></li>
                    <label class="me-1">Epic Games</label><img class="bi epic" src="/repo/img/logo_epic.svg"
                    alt="Logo epic games, Epic Games, juegos, compra videojuegos">
                    <li class="input-group mb-2"><input type="url" name="epic" placeholder="Aqui va la url.." data-validation="url"
                        class="form-control"></li>
                    <label class="me-1">Xbox</label><i class="bi bi-xbox"></i>
                    <li class="input-group mb-2"><input type="url" name="xbox" placeholder="Aqui va la url.." data-validation="url"
                        class="form-control"></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="mb-3">
        <label class="form-label"><strong>Descripcion</strong></label>
        <textarea name="descripcion" placeholder="Ingrese la descripcion del juego..." class="form-control"
            REQUIRED></textarea>
    </div>
    <div class="mb-3">
        <label class="form-label"><strong>Link Trailer</strong></label>
        <input type="url" name="trailer" placeholder="Aqui va la url.." data-validation="url" class="form-control"
            REQUIRED>
    </div>
    
    <div class="mb-4">
        <label class="form-label"><strong>Requisitos Minimos</strong></label>
        <ul>
            <strong>Sistema Operativo:</strong>
            <li class="input-group mb-2"><input type="text" name="so-min" class="form-control" REQUIRED>
            </li>
            <strong>Procesador:</strong>
            <li class="input-group mb-2"><input type="text" name="proce-min" class="form-control" REQUIRED></li>
            <strong>Memoria RAM:</strong>
            <li class="input-group mb-2"><input type="number" name="ram-min" class="form-control" REQUIRED><span
                    class="input-group-text" id="basic-addon1">GB</span></li>
            <strong>Tarjeta de Video:</strong>
            <li class="input-group mb-2"><input type="text" name="video-min" class="form-control" REQUIRED>
            </li>
            <strong>Tarjeta de Sonido:</strong>
            <li class="input-group mb-2"><input type="text" name="audio-min" class="form-control" REQUIRED></li>
            <strong>Espacio de Almacenamiento:</strong>
            <li class="input-group mb-2"><input type="number" name="espacio-min" class="form-control" REQUIRED><span
                    class="input-group-text" id="basic-addon1">GB</span></li>
        </ul>
    </div>
    <div class="mb-3">
        <label class="form-label"><strong>Requisitos Recomendados</strong></label>
        <ul>
            <strong>Sistema Operativo:</strong>
            <li class="input-group mb-2"><input type="text" name="so" class="form-control" REQUIRED></li>
            <strong>Procesador:</strong>
            <li class="input-group mb-2"><input type="text" name="proce" class="form-control" REQUIRED>
            </li>
            <strong>Memoria RAM:</strong>
            <li class="input-group mb-2"><input type="number" name="ram" class="form-control" REQUIRED><span
                    class="input-group-text" id="basic-addon1">GB</span>
            </li>
            <strong>Tarjeta de Video:</strong>
            <li class="input-group mb-2"><input type="text" name="video" class="form-control" REQUIRED>
            </li>
            <strong>Tarjeta de Sonido:</strong>
            <li class="input-group mb-2"><input type="text" name="audio" class="form-control" REQUIRED>
            </li>
            <strong>Espacio de Almacenamiento:</strong>
            <li class="input-group mb-2"><input type="number" name="espacio" class="form-control" REQUIRED><span
                    class="input-group-text" id="basic-addon1">GB</span></li>
        </ul>
    </div>
    <div class="text-center mb-2">
        <button type="submit" name="aceptar" id="cargarJuego" class="btn btn-success">Aceptar</button>
        <button type="reset" class="btn btn-outline-danger">Cancelar</button>
    </div>
</form>
<script>
    $(document).ready(function() {
    $('#cargarJuego').click(function() {
        // Segunda función
        $.ajax({
            url: 'repo/crear_archivos.php', // Archivo para la segunda función
            method: 'POST', // O 'GET' según lo que necesites
            success: function(response) {
                console.log('Función 1 ejecutada:', response);
            },
            error: function(xhr, status, error) {
                console.error('Error en Función 1:', error);
            }
        });
    });
});
</script>
<?php include "C:/xampp/htdocs/repo/include/footer.php"?>