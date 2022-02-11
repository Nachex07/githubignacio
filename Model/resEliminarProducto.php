<?php
    include('Conexion.php');

    $conexion = new Conexion();


    $nombre = $_POST['nombre'];
    $categoria = $_POST['categoria'];
             
    $resultado = $conexion->eliminar("DELETE from $categoria where nombre='$nombre'");
       
    
    header("Location: ../View/agregarProducto.php"); 

       
    
        exit;
    

    

?>