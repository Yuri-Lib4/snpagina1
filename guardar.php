<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $_POST["nombre"];
    $correo = $_POST["correo"];

    // Aquí debes establecer una conexión a tu base de datos
    // y ejecutar una consulta para insertar los datos en la tabla

    // Ejemplo de conexión utilizando MySQLi en XAMPP
    $servername = "localhost"; // El servidor MySQL está en el mismo equipo
    $username = "root"; // Usuario por defecto en XAMPP
    $password = ""; // Contraseña por defecto en XAMPP (generalmente está vacía)
    $dbname = "listar"; // Cambia esto al nombre de tu base de datos

    // Crear una conexión
    $conexion = new mysqli($servername, $username, $password, $dbname);

    // Verificar la conexión
    if ($conexion->connect_error) {
        die("Error en la conexión: " . $conexion->connect_error);
    }

    $sql = "INSERT INTO laboratorio1s (nombre, correo) VALUES ('$nombre', '$correo')";

    if ($conexion->query($sql) === TRUE) {
        echo "Registro insertado con éxito.";
    } else {
        echo "Error al insertar el registro: " . $conexion->error;
    }

    $conexion->close();
}
?>
