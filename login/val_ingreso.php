<?php 
    include "C:/xampp/htdocs/repo/conexion/conexion.php";
    session_start();
        $user = trim($_POST['txtmail']);
        $pass = trim($_POST['txtpass']);

        $validar_usuario= mysqli_query($con, "SELECT * FROM usuarios WHERE mail='$user' AND contrasenia='$pass'");
        $filas=mysqli_fetch_array($validar_usuario);

        if($filas['id_rol']==1){
            $_SESSION["admin"] = $user;
            $_SESSION["id"] = $filas['id_usuario'];
            header("location:/repo/index.php");
            exit();
        }
        else if($filas['id_rol'] == 2){
            $_SESSION["usuario"] = $user;
            $_SESSION["id"] = $filas['id_usuario'];
            header("location: /repo/pag_juegos1.php");
            exit();
        }
        
        else{
            echo'
                <script>
                    alert("El Usuario ingresado no existe no existe");
                    window.location= "../login.php";
                </script>
            ';
            exit();
        };
?>