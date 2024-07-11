<?php
// Conexión a la base de datos (asumiendo que tienes un archivo de conexión separado)
include 'conexion/conexion.php';

// Query para seleccionar todos los usuarios
$query = "SELECT id, nombre, email FROM usuarios";
$resultado = mysqli_query($conexion, $query);

if (mysqli_num_rows($resultado) > 0) {
    echo "<table>
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Email</th>
                <th>Acciones</th>
            </tr>";
    
    while ($fila = mysqli_fetch_assoc($resultado)) {
        echo "<tr>
                <td>" . $fila['id'] . "</td>
                <td>" . $fila['nombre'] . "</td>
                <td>" . $fila['email'] . "</td>
                <td>
                    <a href='CRUD/editar.php?id=" . $fila['id'] . "'>Editar</a>
                    <a href='CRUD/borrar.php?id=" . $fila['id'] . "' onclick='return confirm(\"¿Estás seguro?\")'>Borrar</a>
                </td>
              </tr>";
    }
    
    echo "</table>";
} else {
    echo "No hay usuarios registrados.";
}

// Cerrar conexión
mysqli_close($conexion);
?>
