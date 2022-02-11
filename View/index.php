<?php
include("Model/Conexion.php");

session_start();
if(!isset($_SESSION['seguridad']) or $_SESSION['seguridad'] != '1234')
header("Location: index.php?base=login");

?>

<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="estilos/estilos.css" type ="text/css">
        <title>Principal</title>
    </head>
    
    <!-- bootstrap  w3school-->
    <body>

        <header></header>
        
    <img  id="logo" src="imgs/logo.jpeg" alt=""> <br>
   
    
    <center>
    <button class ='botonesPrincipales'><a id="vinculos" href="View/componentes.php">Componentes</a></button>
    <button class = 'botonesPrincipales'><a id="vinculos" href="View/perifericos.php">Perifericos </a></button>
    <button class = 'botonesPrincipales'><a id="vinculos" href="View/smartphone.php">SmartPhones </a></button>
    <button class = 'botonesPrincipales'><a id="vinculos" href="View/extras.php"> Extras </a></button>
    </center>
    <br>

    <hr>    
    
    <footer>
    <div class="footer-container">
            <div class="footer-content-container">
            <h3 class="logo">Gaming and Computers</h3>
            <span class="footer-info">Numero Telefonico: 2254 3549</span>
            <br>
            <span class="footer-info">gamingandcomputers@gmail.com</span>
            <br>
        </div>


        <div class="footer-menus">
            <div class="footer-content-container">
            <span class="menu-title">menu</span>
            <a href="" class="menu-item-footer">Gaming</a>
            <a href="" class="menu-item-footer">Opcion 1</a>
            <a href="" class="menu-item-footer">Opcion 2</a>
        </div>

        <div class="footer-content-container">
            <span class="menu-title">legal</span>
            <a href="reportes.php" class="menu-item-footer">Reportes</a>
            <a href="View/formulario.php" class="menu-item-footer">Contacto a soporte</a>
            <a href="" class="menu-item-footer">Términos y condiciones</a>
        </div>
    </div>

        <div class="footer-content-container">
            <span class="menu-title">  Redes Sociales</span>
            <div class="social-container">
            <a href="" class="social-link"></a>
            <a href="" class="social-link"></a>
            <a href="" class="social-link"></a>
        </div>
     </div> 
  </diV>   
  
  <div class="copyright-container">
      <span class="copyright">&copy;2021, Gamming&Computers.com.</span>

    </footer>

    </body>

    
</html>

