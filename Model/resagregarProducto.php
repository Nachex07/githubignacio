<?php
    include('Conexion.php');

    $conexion = new Conexion();

   

    $nombre = $_POST['nombre'];
    $descripcion = $_POST['descripcion'];
    $precio = $_POST['precio'];
    $cantidad = $_POST['cantidad'];
    $categoria = $_POST['categoria'];
    $imagen = '';
   
        if(isset($_FILES['imagen'])){
            $archivo = $_FILES['imagen'];
            $nombreImagen = $archivo['name'];
            $rutaProvisional = $archivo['tmp_name'];
            $tamano = getimagesize($rutaProvisional);
            /*$ancho = $dimesiones[0];
            $alto = $dimesiones[1];*/
            $carpeta = "../imgs/";

            
            $src = $carpeta.$nombreImagen;
            move_uploaded_file($rutaProvisional, $src);
            $imagen = $carpeta.$nombreImagen;

            
        }


         echo $src;  
         echo "insert into $categoria (Nombre, Descripcion, Precio, Cantidad, Imagen) values('$nombre','$descripcion','$precio', '$cantidad','$imagen');"   ;

        $resultado = $conexion->insertar("insert into $categoria (Nombre, Descripcion, Precio, Cantidad, Imagen) values('$nombre','$descripcion','$precio', '$cantidad','$imagen');");
       
       /* $registros = mysqli_fetch_array($resultado);*/
    /*echo 'Producto Agregado';    
    */
    header("Location: ../View/agregarProducto.php"); 

       
    
        exit;
    

    

?>