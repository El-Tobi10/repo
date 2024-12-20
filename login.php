<?php include "C:/xampp/htdocs/repo/include/header.php"?>
<title>Login - BestGamer</title>
<link rel="stylesheet" href="CSS/form.css">
<div class="text-white">
    <h2 class="text-center">Iniciar Sesion</h2>
    <form action="login/val_ingreso.php" id="formRegister" class="formulario mx-5" method="POST">
        <div class="sm-10 row ">
            <label for="exampleInputEmail1" class="form-label">Ingrese su Email</label>
            <div class="input-group mb-3">
                <input type="text" name="txtmail" class="form-control" id="exampleInputEmail1"
                    aria-describedby="emailHelp" placeholder="name@example.com">
            </div>
        </div>
        <div class="sm-10 row">
            <label for="exampleInputPassword1" class="form-label">Contraseña</label>
            <div class="input-group mb-3">
                <input type="password" name="txtpass" class="form-control" id="exampleInputPassword1">
            </div>
        </div>
        <div class="text-center">
            <button type="submit" id="submitButton" class="btn btn-primary mt-3">Aceptar</button>
            <button type="reset" class="btn btn-secondary mt-3">Cancelar</button>
        </div>
    </form>
    <div class="text-center mb-3 ">
        Si no tienes cuenta puedes registrarte aqui<a href="/repo/register.php"><kbd>Regístrarte</kbd></a>
    </div>
</div>

<script src="JS/storage.js"></script>
<?php include "C:/xampp/htdocs/repo/include/footer.php" ?>