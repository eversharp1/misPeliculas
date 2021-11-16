<?php
    session_start();
    if($_SESSION['inicio']){
        session_destroy();
    }
    header('Location: index.php');
?>