<?php include "C:/xampp/htdocs/repo/include/header.php"?>
<title>Editar Usuario - BestGamer</title>
<link rel="stylesheet" href="../CSS/form.css">
<div class="text-white">
    <?php 
        $id = $_SESSION["id"];
        $query = "SELECT * FROM usuarios WHERE id_usuario = '$id'";
        $resultado = mysqli_query($con,$query);
        $row = mysqli_fetch_array($resultado);
    ?>
    <h2 class="text-center">Editar Usuario</h2>
    <form class="formulario m-4 row row-cols-1 row-cols-md-2 g-5"
        action="val_edit.php?id=<?php echo $row['id_usuario'];?>" method="POST">

        <div class="sm-10 row me-2">
            <label for="exampleInputUser1" class="form-label">Actual nombre de usuario</label>
            <input class="form-control" type="text" value="<?php echo $row['usuario'];?>" aria-label="Disabled input example" disabled readonly>
        </div>

        <div class="sm-10 row ">
            <label for="exampleInputUser1" class="form-label">Ingrese su nuevo nombre de usuario</label>
            <input type="user" name="txtuser" class="form-control" id="exampleInputUser1" aria-describedby="emailHelp">
        </div>

        <div class="col">
            <button type="submit" name="editar" class="btn btn-primary">Aceptar</button>
            <button type="reset" class="btn btn-secondary">Cancelar</button>
        </div>
    </form>
</div>

<?php include "C:/xampp/htdocs/repo/include/footer.php"?>