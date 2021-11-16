<?php
    session_start();
    require_once 'conexion.php';
    if(isset($_POST['categoria']) != '' && isset($_POST['resenia']) != '' && isset($_POST['resenia']) != '' && isset($_POST['titulo']) != ''){
        $categoria = $_POST['categoria'];
        $titulo = $_POST['titulo'];
        $resenia = mysqli_real_escape_string($conexion, $_POST['resenia']);
        $user_id = $_SESSION['usuario_id'];
        $sql = "INSERT INTO entradas VALUES (null, '$user_id', '$categoria', '$titulo', '$resenia');";
        $query = mysqli_query($conexion, $sql);
        if($query){
		    // echo 'Datos ingresados correctamente';
            header('Location: index.php');
	    }else{
		echo 'ERROR: ' . mysqli_error($conexion);
	    }
    }else{
        $error = '¡¡¡Se deben rellenar ambos campos...!!!';
        header('location: error.php?mensaje=' . $error);
    }
?>