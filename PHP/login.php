<?php include "C:/xampp/htdocs/repo/PHP/include/header.php"?>
<title>Login - BestGamer</title>
<div class="text-white">
  <h2 class="text-center">Iniciar Sesion</h2>
  <form action="../PHP/login/val_ingreso.php" id="formRegister" class="mx-5" method="POST">
    <div class="sm-10 row ">
      <label for="exampleInputEmail1" class="form-label">Ingrese su Email o Usuario</label>
      <input type="text" name="txtmail" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="name@example.com">
    </div>
    <div class="sm-10 row">
      <label for="exampleInputPassword1" class="form-label">Contraseña</label>
      <input type="password" name="txtpass" class="form-control" id="exampleInputPassword1">
    </div>
    <button type="submit" id="submitButton" class="btn btn-primary mt-3">Aceptar</button>
    <button type="reset" class="btn btn-secondary mt-3">Cancelar</button>
  </form>
  <div class="text-center mb-3 ">Si no tienes cuenta puedes registrarte aqui <a href="/repo/PHP/register.php"><kbd>Regístrarte</kbd></a></div>
</div>

<?php include "C:/xampp/htdocs/repo/PHP/include/footer.php" ?>
<script src="../JS/storage.js"></script>

