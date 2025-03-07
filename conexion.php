<?php
$host = "172.17.0.2"; // IP del contenedor MySQL
$user = "admin";
$password = "12345";
$database = "bbdd";

$conn = new mysqli($host, $user, $password, $database);

if ($conn->connect_error) {
    die("Error de conexión: " . $conn->connect_error);
} else {
    echo "Conexión exitosa a la base de datos";
}
?>
