<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../estilos/estilosFormulario.css">
    <title>Formulario | Informacion</title>
</head>
<body>
    <!-- <header>
         <p>Formulario</p>
     </header> -->
    <form action="../Model/resFormulario.php" method="POST">
        <h2>Contacto</h2>
        <input type="text" name="nombre" placeholder="Nombre" required>
        <input type="text" name="correo" placeholder="Correo" required>
        <input type="text" name="telefono" placeholder="Telefono" required>
        <textarea name="mensaje" placeholder="Escriba su mensaje" required></textarea>
        <input type="submit" value="Enviar" id="boton">
    </form>
</body>
</html>