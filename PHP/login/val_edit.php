<?php 
    session_start();
	include "C:/xampp/htdocs/repo/PHP/conexion/conexion.php";
	if(isset($_POST['editar'])){
        $id = $_SESSION["id"];
        $user = $_POST['txtuser'];
        if($user!=null){
            $query = "UPDATE usuarios SET usuario = '$user' WHERE id_usuario = '$id'";
            $resultado = mysqli_query($con,$query);
            header("Location:/repo/PHP/index.php");
        }
        else {
            echo '
                <script>
                    alert("No puede dejar ningun campo vacio. Intente nuevamente.");
                    window.location = "../edit.php";
                </script>';
        }
	}
    ?>