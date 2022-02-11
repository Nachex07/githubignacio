<?php

    include('../Model/Conexion.php');
    $conexion = new Conexion();

?>


<!DOCTYPE html>
<html>
    <head>
        <title>Gamming and Computers</title>
        <meta name="viewport" content="width=device-width,initial-scale=1.0">
        <link rel="stylesheet" href="../estilos/estilosCPE.css">
    </head>
    <body>
        <header>
            <!--<img src='thumbup.png'> -->
            <p>G & C | Smart Phone</p>
            <a id="adminProductos" href="agregarProducto.php">Administración de Productos</a>
        </header>
        <nav>
            <a href='../index.php'><div class='opcionmenu'>Inicio</div></a>
            <a href='../View/componentes.php'><div class='opcionmenu'>Componentes</div></a>
            <a href='../View/perifericos.php'><div class='opcionmenu'>Perifericos</div></a>
            <a href='../View/smartphone.php'><div class='opcionmenu'>SmartPhones</div></a>
            <a href='../View/extras.php'><div class='opcionmenu'>Extras</div></a>

            <div class='corte'></div>
        </nav>
        <article>

        <?php

            $resultado = $conexion->cargarTabla("select Nombre, Descripcion, Precio, Cantidad, Imagen from smartphones");

            while($fila = mysqli_fetch_array($resultado))
             {
            
            

            echo "<section>";
            $ImagenFinal = $fila['Imagen'];
            echo "<img style= 'width: 25%' src= '$ImagenFinal'>";
            echo "<label><b>Nombre</b></label>:". $fila['Nombre']."<br>";
            echo "<label><b>Descripcion</b></label>:". $fila['Descripcion']."<br>";
            echo "<label><b>Precio</b></label>:". $fila['Precio']."<br>";
            echo "<label><b>Cantidad</b></label>:". $fila['Cantidad']."<br>";
            echo "</section>";
            /*echo "Imagen:". $fila['Imagen']."<br>";*/


            }        
        ?>
        </article>
    </body>
    <!--<footer>Proyecto Final Programacion 4</footer> -->
</html>