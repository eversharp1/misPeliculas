<?php
    include_once 'conexion.php';
    $error = '';
    if(strlen($_POST['nombre']) > 3){
        $nombre =   $_POST['nombre'];
    }else{
        $error .= 'El nombre debe tener como mínimo 4 caracteres.<br>';
    }

    if(strlen($_POST['apellido']) > 3){
        $apellido = $_POST['apellido'];
    }else{
        $error .= 'El apellido debe tener como mínimo 4 caracteres.<br>';
    }

    if(filter_var($_POST['email'], FILTER_VALIDATE_EMAIL) ){
       $email = $_POST['email'];
    }else{
        $error .= 'El Email es inválido.<br>';
    }
    
    if(strlen($_POST['password']) >= 4){
        $pass = $_POST['password'];
        $pass_enc = password_hash($pass, PASSWORD_DEFAULT, [15]);
    }else{
        $error .= ' El password debe tener como mínimo cuatro caracetres.';
    }

    if(!empty($error)){
        header('location: error.php?mensaje=' . $error);
    }else{
        $sql = "INSERT INTO usuarios VALUES (null, '$nombre', '$apellido', '$email', '$pass_enc');";
        $query = mysqli_query($conexion, $sql);
        if($query){
		    // echo 'Datos ingresados correctamente';
            header('Location: index.php');
	    }else{
		echo 'ERROR: ' . mysqli_error($conexion);
	    }
}
    
    
    
    
    
    
    
    
    
    
    


?>
