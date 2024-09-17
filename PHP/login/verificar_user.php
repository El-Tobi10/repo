<?php 
session_start();
if(!isset($_SESSION['usuario'])){
    echo'<script>
            alert("Debes iniciar sesion para ingresar aqui. Ahora te redirigiremos al inicio de sesion");
        </script>';
    header("location: ../PHP/login.php")
    session_destroy()
    die();
}
?>