<?php 
	include "C:/xampp/htdocs/repo/PHP/conexion/conexion.php";
	if(isset($_POST['agregar'])){
        $mail = $_POST['txtmail'];
        $user = $_POST['txtuser'];
        $pass = $_POST['txtpass'];
        $rep_pass = $_POST['passrep'];

        if($user!=null || $mail!=null || $pass!=null){
            if($pass != $rep_pass){
                echo '
                <script>
                    alert("Las contraseñas deben ser iguales. Intentelo nuevamente");
                    window.location = "../register.php";
                </script>';
                exit();
            }

            $verif_mail = mysqli_query($con, "SELECT * from usuarios WHERE mail='$mail'");
            if(mysqli_num_rows($verif_mail) > 0){
                echo '
                <script>
                    alert("Este correo ya estan registrado. Intente de nuevo con otro");
                    window.location = "../register.php";
                </script>';
                exit();
            }
            $verif_user = mysqli_query($con, "SELECT * from usuarios WHERE usuario='$user'");
            if(mysqli_num_rows($verif_user) > 0){
                echo '
                <script>
                    alert("Este usuario ya estan registrado. Intente de nuevo con otro");
                    window.location = "../register.php";
                </script>';
                exit();
            }

            $sql = "INSERT INTO usuarios(mail,usuario,contrasenia)VALUES('$mail','$user','$pass')";
            mysqli_query($con,$sql);
            header("Location:../login.php");
        }
        else {
            echo '
                <script>
                    alert("No puede dejar ningun campo vacio. Intente nuevamente.");
                    window.location = "../register.php";
                </script>';
        }
	}
    ?>