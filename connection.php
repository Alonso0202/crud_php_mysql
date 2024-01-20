
<?php

function connection() {
    $host = "localhost";
    $user = "root";
    $pass = "";
    $database = "crud_usuario"; // Reemplaza esto con el nombre de tu base de datos

    // Crear la conexión
    $conn = new mysqli($host, $user, $pass, $database);

    // Verificar la conexión
    if ($conn->connect_error) {
        die("Error de conexión: " . $conn->connect_error);
    }

    // Seleccionar la base de datos
    if (!$conn->select_db($database)) {
        die("Error al seleccionar la base de datos: " . $conn->error);
    }

    // Configurar el conjunto de caracteres a utf8 (opcional)
    $conn->set_charset("utf8");

    return $conn;
}

?>
