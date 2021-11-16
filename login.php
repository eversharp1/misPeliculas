<?php
    session_start();
    require_once('conexion.php');

    if($_POST['email'] != '' && $_POST['password'] != ''){
        $email = $_POST['email'];
        $pass = $_POST['password'];
        $sql = "SELECT * FROM usuarios WHERE email = '$email'";
        $query = mysqli_query($conexion, $sql);
        if (mysqli_num_rows($query) > 0) {
            $fila = mysqli_fetch_assoc($query);
            if($comparar = password_verify($pass, $fila['password'])){
                $_SESSION['usuario_id'] = $fila['usuario_id'];
                $_SESSION['nombre'] = $fila['nombre'];
                $_SESSION['apellido'] = $fila['apellido'];
                $_SESSION['inicio'] = true;
                header('Location: index.php');
        }else{
                $_SESSION['inicio'] = false;
                header('Location: index.php');
            }
        }
    }else{
        header('Location: index.php');
    }
?>