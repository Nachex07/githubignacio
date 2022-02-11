<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../estilos/estilosLogin.css">
    <title>Login</title>
</head>
<body>

    <div class="login">

       <!-- <img class="imagenLogin" src="imgs/iconoLogo.webp" alt="Logo"> -->
        <h1>Registrarse</h1>
        <br>
        <form action="../Model/resregistro.php" id="acceso" method="POST">  <!--mandar los datos con post para que no salga en la url como pasa con get -->
            <label >Indique el nombre de usuario:</label>
            <input type="text" placeholder="Usuario" id="usuario" name="usuario"><br>
            
            <label >Indique su clave: </label>
            <input type="password" placeholder="Clave" id="clave" name="clave"> <br>
            
            <input type="submit" value="registrar" id="registrar" name="registrar">

            
        </form>
        
    </div>




    
</body>
</html>