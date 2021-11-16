<?php
    session_start();
    require 'conexion.php';
    require_once 'funciones.php';
    require_once 'header.php';
    if(isset($_GET['categoria']) != ''){
        $mostrar = mostrarCategoria($_GET['categoria']);
    }else{
        header('index.php');
    }
?>
    <main class="principal">
        <h1><?php echo ucfirst($_GET['categoria'])?></h1>
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
</body>
</html>