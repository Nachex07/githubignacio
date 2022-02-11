<?php
    include('Conexion.php');

    
    $conexion = new Conexion();
    
    

    session_start();
    $usuario = $_POST['usuario'];  //utiliza el name del input para saber cual es
    $clave =  $_POST['clave'];

    $resultado = $conexion->ejecutar("select count(*) from usuarios where nombreusuario = '$usuario' and clave = '$clave'");
    
    $intentos;
              

        if($resultado[0][0] > 0 ){
            $_SESSION['seguridad'] = '1234';
            header("Location: ../index.php");

        }else{
            if(isset($_COOKIE["$usuario"])){
                $contador = $_COOKIE["$usuario"];
                $contador++;
                setcookie($usuario,$contador,time()+10,'/');
                echo $contador;
                if($contador >= 2){
                    setcookie("bloqueado".$usuario,$contador,time()+10);
                    $resultado = $conexion->actualizar("UPDATE usuarios set rol= 'BLOQUEADO' where nombreUsuario = '$usuario';");
                    $contador = 0;
                }
            }else{
                setcookie($usuario, 1 , time()+0,'/'); 
            }    
                       

            header("Location: ../index.php?base=login");    
         }
        exit;
    

    

?>