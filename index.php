<?php
    session_start();
    require 'conexion.php';
    require_once 'funciones.php';
    require_once 'header.php';
    $mostrar = mostrarVariado();
?>
    <main class="principal">
        <h1>Últimas reseñas agregadas por los usuarios</h1>
        <article class="articulo">
            <?php
                foreach($mostrar as $ver){
            ?>
            <h2><?php echo $ver['titulo']; ?></h2>
            <p><?php echo $ver['resenia']; ?></p>
            <br>
            <br>
            <?php
                }
            ?>
        </article>

    </main>
    <?php 
        require_once 'aside.php';
        require_once 'footer.php';
    ?>

    <script src="js/main.js"></script>
</body>
</html>