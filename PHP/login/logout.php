<?php 
    session_start();
    session_destroy();
    header("location: /repo/PHP/index.php");
?>