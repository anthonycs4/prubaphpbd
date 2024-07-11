<?php
// Verificar si se han recibido los datos del formulario por POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Recibir datos del formulario
    $id = $_POST['id'];
    $nombre = $_POST['nombre'];
    $email = $_POST['email'];

    // Conexión a la base de datos
    include '../conexion/conexion.php';

    // Query para actualizar los datos del usuario
    $query = "UPDATE usuarios SET nombre = '$nombre', email = '$email' WHERE id = $id";

    if (mysqli_query($conexion, $query)) {
        // Redirigir a la página principal
        header('Location: ../index.php');
    } else {
        echo "Error al actualizar usuario: " . mysqli_error($conexion);
    }

    // Cerrar conexión
    mysqli_close($conexion);
} else {
    echo "Acceso no permitido.";
}
?>
