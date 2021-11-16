<aside>
        <div class="usuario" id="identificar">
            <p>Bienvenido, <?php 
                if(isset($_SESSION['inicio']) == true){
                    echo $_SESSION['nombre'] . ' ' . $_SESSION['apellido'];
                }else{
                    ?>
                    <span style="color: red;">¡No estas logueado!</span>
                <?php
                }            
            ?>
            </p>
            <button onclick="window.location='crear_entrada.php'" class="boton" id="verde">Crear Entrada</button>
            <button onclick="window.location='cerrar.php'" class="boton" id="rojo">Cerrar Sesión</button>
        </div>

        <div class="usuario" id="loguearse">
            <p>Identifícate</p>
            <form action="login.php" method="post" id="frm_login">
                <label for="email">Email</label>
                <input type="email" name="email" class="entrada">

                <label for="password">Password</label>
                <input name="password" id="password" type="password" class="entrada">

                <input type="submit" value="Login" class="boton">
            </form>
        </div>
        <div class="usuario" id="registro">
            <p>Regístrate</p>
            <form action="registro.php" method="post" id="frm_registro">
                <label for="nombre">Nombre</label>
                <input type="text" name="nombre" id="nombre" required>
                
                <label for="apellido">Apellido</label>
                <input type="text" name="apellido" id="apellido" required><br>

                <label for="email">Email</label>
                <input type="email" name="email" class="entrada" required>

                <label for="password">Password</label>
                <input name="password" id="password" type="password" required>
                
                <input type="submit" value="Enviar" class="boton">
            </form>
        </div>
    </aside>