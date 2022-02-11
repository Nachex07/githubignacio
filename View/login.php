<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilos/estilosLogin.css">
    <title>Login</title>
</head>
<body>

    <div class="login">

       <!-- <img class="imagenLogin" src="imgs/iconoLogo.webp" alt="Logo"> -->
        <h1>Login</h1>
        <form action="Model/reslogin.php" id="acceso" method="POST">  <!--mandar los datos con post para que no salga en la url como pasa con get -->
            <label >Usuario:</label>
            <input type="text" placeholder="Usuario" id="usuario" name="usuario"><br>
            
            <label >Clave: </label>
            <input type="password" placeholder="Clave" id="clave" name="clave"> <br>
            
            <input type="submit" value="Ingresar" id="ingresar" name="ingresar">

            <a href="View/registro.php">Registrarse</a>
        </form>
        
    </div>




    
</body>
</html>


