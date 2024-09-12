<?php include "C:/xampp/htdocs/repo/PHP/include/header.php"?>
<title>Login - BestGamer</title>
<div class="text-white">
    <h2 class="text-center">Registro</h2>
    <form class="m-4 row row-cols-1 row-cols-md-2 g-5">
        <div class="col">
            <div class="sm-10 row ">
                <label for="exampleInputEmail1" class="form-label">Ingrese su Email</label>
                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="name@example.com">
            </div>
        </div>

        <div class="col">
            <div class="sm-10 row ">
                <label for="exampleInputEmail1" class="form-label">Ingrese su Nombre de Usuario</label>
                <input type="user" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>
        </div>

        <div class="col">
            <div class="sm-10 row">
                <label for="exampleInputPassword1" class="form-label">Contraseña</label>
                <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Debe tener al menos 8 caracteres.">
            </div>
        </div>
        <div class="col">
            <div class="sm-10 row">
                <label for="exampleInputPassword1" class="form-label">Repíta su contraseña</label>
                <input type="password" class="form-control" id="exampleInputPassword1">
            </div>
        </div>
        <div class="col">
            <button type="submit" class="btn btn-primary">Aceptar</button>
            <button type="reset" class="btn btn-secondary">Cancelar</button>
        </div>
    </form>
    <div class="text-center mb-3 ">Si ya tienes cuenta puedes iniciar sesion aqui <a href="/repo/PHP/login.php"><kbd>Iniciar Sesion</kbd></a></div>
</div>

<?php include "C:/xampp/htdocs/repo/PHP/include/footer.php" ?>