<?php 
    session_start();
    session_destroy();
    echo'<script>sessionStorage.clear()</script>';
    header("location: /repo/PHP/index.php");
?>