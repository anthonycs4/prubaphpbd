<?php
// Datos de conexión a la base de datos
$host = 'database-2.crg4eis6mby7.us-east-2.rds.amazonaws.com'; // o la dirección IP si es remota
$username = 'admin';
$password = 'controlZ1';
$database = 'Prueba';

// Crear conexión
$conexion = mysqli_connect($host, $username, $password, $database);

// Verificar conexión
if (!$conexion) {
    die("La conexión ha fallado: " . mysqli_connect_error());
}
?>
