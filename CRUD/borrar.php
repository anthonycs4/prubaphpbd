<?php
// Verificar si se ha pasado el parámetro 'id' por GET
if (isset($_GET['id'])) {
    $id = $_GET['id'];

    // Conexión a la base de datos
    include '../conexion/conexion.php';

    // Query para eliminar el usuario por su ID
    $query = "DELETE FROM usuarios WHERE id = $id";

    if (mysqli_query($conexion, $query)) {
        // Redirigir a la página principal
        header('Location: ../index.php');
    } else {
        echo "Error al eliminar usuario: " . mysqli_error($conexion);
    }

    // Cerrar conexión
    mysqli_close($conexion);
} else {
    echo "ID de usuario no especificado.";
}
?>
