<?php
    session_start();
    include_once 'conexion.php';
    include_once 'header.php';
?>

    <main class="principal">
        <?php
            if(isset($_SESSION['inicio']) == true){
        ?>
        <h1>Crear entrada</h1>
        <form action="crear_logica.php" method="POST" >
            <label for="categoria"  id="lbl_categoria">Categoría</label>
            <select name="categoria" id="categoria">
                <option value="accion">Acción</option>
                <option value="aventuras">Aventuras</option>
                <option value="drama">Drama</option>
                <option value="scifi">Sci-Fi</option>
                <option value="thriller">Thriller</option>
            </select>
            <br>
            <br>
            <input type="text" name="titulo" placeholder="Título" id="titulo">
            <textarea name="resenia" id="resenia" cols="85" rows="15"></textarea>
            <br>
            <input type="submit" value="Enviar" class="boton borde">
        </form>
        <?php
            }else{
                ?>
                <h1>Debes Iniciar sesión para poder editar!!!</h1>
                <?php
            }
        ?>
    </main>

<?php
    include_once 'footer.php'
?>

