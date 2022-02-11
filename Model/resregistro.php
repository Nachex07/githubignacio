<?php
    include('Conexion.php');

    $conexion = new Conexion();

    //Este archivo es vara verificar los datos del login

    session_start();
    $usuario = $_POST['usuario'];  //utiliza el name del input para saber cual es
    $clave =  $_POST['clave'];

    $resultado = $conexion->insertar("insert into usuarios (nombreUsuario, clave, rol) values('$usuario','$clave','CLIENTE');");
       
       /* $registros = mysqli_fetch_array($resultado);*/
         
    header("Location: ../index.php?base=login"); 

       
    
        exit;
    

    

?>