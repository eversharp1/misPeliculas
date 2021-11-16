<?php
    require_once 'conexion.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/estilos.css">
    <link rel="icon" href="img/icono.png">
    <title>misPeliculas.com</title>
</head>
<body>
    <!-- Cabecera -->
    <header id="cabecera">
        <!-- Logo -->
        <div id="logo" >
            <a href="index.php"><img src="img/misPeliculas.com.png" alt="Logo"></a>
        </div>
        <!-- Menú -->
        <nav id="menu">
            <ul>
                <li><a href="mostrar.php?categoria=aventuras">Aventuras</a></li>
                <li><a href="mostrar.php?categoria=drama">Drama</a></li>
                <li><a href="mostrar.php?categoria=scifi">Sci-Fi</a></li>
                <li><a href="mostrar.php?categoria=thriller">Thriller</a></li>
                <li><a href="mostrar.php?categoria=accion">Acción</a></li>
            </ul>
        </nav>
        <div id="redes">
            <a href="http://www.twitter.com" target="_blank"><img src="img/twitter.png" alt="Ir a twitter"></a>
            <a href="http://www.instagram.com" target="_blank"><img src="img/instagram.png" alt="Ir a Instagram"></a>
        </div>
    </header>