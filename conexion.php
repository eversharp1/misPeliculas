<?php 

    $host = 'localhost';
    $user = 'root';
    $pass = '';
    $db   ='blog_peliculas';

    $conexion = mysqli_connect($host, $user, $pass, $db);
    mysqli_query($conexion, 'SET NAMES "utf8"');
?>