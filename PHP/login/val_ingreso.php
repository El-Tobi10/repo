<?php 
    session_start();
    include "C:/xampp/htdocs/repo/PHP/conexion/conexion.php";
        $user = trim($_POST['txtmail']);
        $pass = trim($_POST['txtpass']);

        $validar_usuario= mysqli_query($con, "SELECT * FROM usuarios WHERE (mail='$user' OR usuario ='$user') and contrasenia='$pass'");
        if(mysqli_num_rows($validar_usuario) > 0){
            $_SESSION["usuario"] = $user;
            header("location: ../index.php");
            exit;
        }
        else{
            echo'
                <script>
                    alert("Usuario no existe");
                    window.location= "../login.php";
                </script>
            ';
            exit;
        }
?>