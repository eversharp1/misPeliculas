<?php
    function mostrarVariado(){
        require 'conexion.php';
        $sql = "SELECT * FROM entradas ORDER BY id DESC LIMIT 6";
        $query = mysqli_query($conexion, $sql);
        
        while($registros = mysqli_fetch_assoc($query)){
           $arrayRetorno[] = $registros;
        }
        return $arrayRetorno;
    }

    function mostrarCategoria($categoria){
        require 'conexion.php';
        $sql = "SELECT * FROM entradas WHERE categoria = '$categoria' ORDER BY id DESC";
        $query = mysqli_query($conexion, $sql);
        while($registros = mysqli_fetch_assoc($query)){
           $arrayRetornoCategoria[] = $registros;
        }
        return $arrayRetornoCategoria;
    }
?>