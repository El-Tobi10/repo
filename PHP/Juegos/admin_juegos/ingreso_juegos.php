<?php include "C:/xampp/htdocs/repo/PHP/include/header.php"?>
<title>Ingreso de Juegos - BestGamer</title>
<link rel="stylesheet" href="../CSS/form.css">

<h1 class="text-center">Ingrese los datos del Juego</h1>
<form action="insertarJuego.php" method="post" class="formulario mx-5">
    <div class="mb-3">
        <label class="form-label">Titulo</label>
        <input type="text" name="titulo" class="form-control">
    </div>
    <div class="mb-3">
        <label class="form-label">Imagen</label>
        <input type="file" name="imagen" class="form-control col-md-4">
    </div>
    <div class="mb-3">
        <label class="form-label">Desarrollador</label>
        <input type="text" name="desarrollador" class="form-control">
    </div>
    <div class="mb-3">
        <label class="form-label">Lanzamiento</label>
        <input type="date" name="lanzamiento" class="form-control">
    </div>
    <div class="mb-3">
        <label class="form-label">Descripcion</label>
        <textarea name="descripcion" placeholder="Ingrese la descripcion del juego..." class="form-control"></textarea>
    </div>
    <div class="mb-3">
        <label class="form-label">Link Trailer</label>
        <input type="url" name="trailer" placeholder="Aqui va la url.." class="form-control">
    </div>
    <div class="mb-3">
        <label class="form-label">Capturas</label>
        <input type="file" name="capturas" class="form-control">
    </div>
    <div class="mb-3">
        <label class="form-label">Requisitos Minimos</label>
        <ul>
            <li class="mb-2"><strong>Sistema Operativo:</strong><input type="text" name="so-min" class="form-control">
            </li>
            <li class="mb-2"><strong>Procesador:</strong><input type="text" name="proce-min" class="form-control"></li>
            <strong>Memoria RAM:</strong>
            <li class="input-group mb-2"><input type="number" name="ram-min" class="form-control"><span
                    class="input-group-text" id="basic-addon1">GB</span></li>
            <li class="mb-2"><strong>Tarjeta de Video:</strong><input type="text" name="video-min" class="form-control">
            </li>
            <li class="mb-2"><strong>Tarjeta de Sonido:</strong><input type="text" name="audio-min"
                    class="form-control"></li>
            <strong>Espacio de Almacenamiento:</strong>
            <li class="input-group mb-2"><input type="number" name="espacio-min" class="form-control"><span
                    class="input-group-text" id="basic-addon1">GB</span></li>
        </ul>
    </div>
    <div class="mb-3">
        <label class="form-label">Requisitos Recomendados</label>
        <ul>
            <li class="mb-2"><strong>Sistema Operativo:</strong><input type="text" name="so" class="form-control"></li>
            <li class="mb-2"><strong>Procesador:</strong><input type="text" name="proce" class="form-control"></li>
            <strong>Memoria RAM:</strong>
            <li class="input-group mb-2"><input type="number" name="ram" class="form-control"><span
                    class="input-group-text" id="basic-addon1">GB</span></li>
            <li class="mb-2"><strong>Tarjeta de Video:</strong><input type="text" name="video" class="form-control">
            </li>
            <li class="mb-2"><strong>Tarjeta de Sonido:</strong><input type="text" name="audio" class="form-control">
            </li>
            <strong>Espacio de Almacenamiento:</strong>
            <li class="input-group mb-2"><input type="number" name="espacio" class="form-control"><span
                    class="input-group-text" id="basic-addon1">GB</span></li>
        </ul>
    </div>
    <div class="text-center mb-2">
        <button type="submit" name="aceptar" class="btn btn-success">Aceptar</button>
        <button type="reset" class="btn btn-outline-danger">Cancelar</button>
    </div>
</form>
<?php include "C:/xampp/htdocs/repo/PHP/include/footer.php"?>