<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../estilos/estilosFormulario.css">
    <title>Formulario | Administracion Producto</title>
</head>
<body>

    <header id="administracion">
        <h1>Administracion de Productos</h1>
        
    </header>
    
    <!-- Agregar productos-->
    <form action="../Model/resagregarProducto.php" method="POST" enctype="multipart/form-data">
        <h2>Agregar Productos</h2>
        <input type="text" name="nombre" placeholder="Nombre" required>
        <input type="text" name="descripcion" placeholder="Descripcion" required>
        <input type="text" name="precio" placeholder="Precio" required>
        <input type="text" name="cantidad" placeholder="Cantidad" required>

        <select id = "comboCategoria" name='categoria'>
            <option value="componentes">componentes</option>
            <option value='perifericos'>perifericos</option>
            <option value="smartphones">smartphones</option>
            <option value="extras">extras</option>
        </select>

        <br>
        <br>
        <label for="nombre">Imagen Producto</label>
        <input type="file" name="imagen">
        <input type="submit" value="Crear" id="boton">
        
    </form>

    
    <!-- Editar Productos-->
    <form action="../Model/resEditarProducto.php" method="POST" enctype="multipart/form-data">
        <h2>Editar Productos</h2>
        
        <input type="text" name="nombre" placeholder="Nombre" required>
        <input type="text" name="descripcion" placeholder="Descripcion" required>
        <input type="text" name="precio" placeholder="Precio" required>
        <input type="text" name="cantidad" placeholder="Cantidad" required>
        
        <select id = "comboCategoria" name='categoria'>
            <option value="componentes">componentes</option>
            <option value='perifericos'>perifericos</option>
            <option value="smartphones">smartphones</option>
            <option value="extras">extras</option>
        </select>

        <br>
        <br>
        <label for="nombre">Imagen Producto</label>
        <input type="file" name="imagen">
        <input type="submit" value="Actualizar" id="boton">
        
    </form>


    <!-- Eliminar Productos -->
    <form action="../Model/resEliminarProducto.php" method="POST">
        <h2>Eliminar Productos</h2>
        <input type="text" name="nombre" placeholder="Nombre" required>
        
        <select id = "comboCategoria" name='categoria'>
            <option value="componentes">componentes</option>
            <option value='perifericos'>perifericos</option>
            <option value="smartphones">smartphones</option>
            <option value="extras">extras</option>
        </select>

        <br>
        <br>
        <input type="submit" value="Eliminar" id="boton">
        
    </form>    
</body>
</html>