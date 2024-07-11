<?php
// Conexión a la base de datos
include '../conexion/conexion.php';

// Recibir datos del formulario
$nombre = $_POST['nombre'];
$email = $_POST['email'];

// Insertar datos en la base de datos
$query = "INSERT INTO usuarios (nombre, email) VALUES ('$nombre', '$email')";

if (mysqli_query($conexion, $query)) {
    // Redirigir a la página principal
    header('Location: ../index.php');
} else {
    echo "Error al agregar usuario: " . mysqli_error($conexion);
}

// Cerrar conexión
mysqli_close($conexion);
?>
