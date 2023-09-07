<!DOCTYPE html>
<html>
<head>
    <title>Formulario</title>
    <link rel="stylesheet" type="text/css" href="estilos.css">
</head>
<body>
    <div class="contenedor">
        <div class="contenido-centrado">
            <h1 class="titulo-formulario">Formulario para Ingresar Datos</h1>
            <form class="formulario" action="guardar.php" method="post">
                <label for="nombre" class="label">Nombre:</label>
                <input type="text" name="nombre" id="nombre" class="input" required><br>
                
                <label for="correo" class="label">Correo:</label>
                <input type="email" name="correo" id="correo" class="input" required><br>
                
                <input type="submit" value="Guardar" class="boton-guardar">
            </form>
            <a href="index.php" class="enlace-volver">Volver al Inicio</a>
        </div>
    </div>
</body>
</html>
