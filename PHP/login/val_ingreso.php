<?php 
    include "C:/xampp/htdocs/repo/PHP/conexion/conexion.php";
    session_start();
        $user = trim($_POST['txtmail']);
        $pass = trim($_POST['txtpass']);

        $validar_usuario= mysqli_query($con, "SELECT * FROM usuarios WHERE mail='$user' AND contrasenia='$pass'");
        $filas=mysqli_fetch_array($validar_usuario);

        if($filas['id_rol']==1){
            $_SESSION["admin"] = $user;
            header("location:/repo/PHP/index.php");
            exit();
        }
        else if($filas['id_rol']==2){
            $_SESSION["usuario"] = $user;
            header("location: /repo/PHP/pag_juegos1.php");
            exit();
        }
        
        else{
            echo'
                <script>
                    alert("Usuario no existe");
                    window.location= "../login.php";
                </script>
            ';
            exit();
        };
?>