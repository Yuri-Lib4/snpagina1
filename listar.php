<!DOCTYPE html>
<html>
<head>
    <title>Listar Registros</title>
    <link rel="stylesheet" type="text/css" href="estilos.css">
</head>
<body>
    <h1 class="titulo-lista">Listar Registros</h1>
    
    <?php
    // Conectar a la base de datos usando MySQLi
    $conexion = new mysqli("localhost", "root", "", "listar");

    // Verificar la conexión
    if ($conexion->connect_error) {
        die("Error en la conexión: " . $conexion->connect_error);
    }

    // Consulta SQL para seleccionar todos los registros de la tabla mi_tabla
    $sql = "SELECT * FROM laboratorio1s";

    // Ejecutar la consulta
    $resultado = $conexion->query($sql);

    if ($resultado->num_rows > 0) {
        // Imprimir los resultados en una tabla
        echo "<table class='tabla-registros'>";
        echo "<tr><th>ID</th><th>Nombre</th><th>Correo</th></tr>";
        
        while ($fila = $resultado->fetch_assoc()) {
            echo "<tr>";
            echo "<td>" . $fila["id"] . "</td>";
            echo "<td>" . $fila["nombre"] . "</td>";
            echo "<td>" . $fila["correo"] . "</td>";
            echo "</tr>";
        }
        
        echo "</table>";
    } else {
        echo "No se encontraron registros.";
    }

    // Cerrar la conexión
    $conexion->close();
    ?>

    <a href="index.php" class="enlace-volver">Volver al Inicio</a>
</body>
</html>
