<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Usuario</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="container">
        <h1>Editar Usuario</h1>
        <?php
        // Verificar si se ha pasado el parámetro 'id' por GET
        if (isset($_GET['id'])) {
            $id = $_GET['id'];

            // Conexión a la base de datos
            include '../conexion/conexion.php';

            // Query para seleccionar el usuario por su ID
            $query = "SELECT nombre, email FROM usuarios WHERE id = $id";
            $resultado = mysqli_query($conexion, $query);

            if (mysqli_num_rows($resultado) === 1) {
                $fila = mysqli_fetch_assoc($resultado);
                $nombre = $fila['nombre'];
                $email = $fila['email'];
                ?>
                <form action="actualizar.php" method="POST">
                    <input type="hidden" name="id" value="<?php echo $id; ?>">
                    <label for="nombre">Nombre:</label>
                    <input type="text" id="nombre" name="nombre" value="<?php echo $nombre; ?>" required>
                    <label for="email">Email:</label>
                    <input type="email" id="email" name="email" value="<?php echo $email; ?>" required>
                    <button type="submit">Actualizar</button>
                </form>
                <?php
            } else {
                echo "Usuario no encontrado.";
            }

            // Cerrar conexión
            mysqli_close($conexion);
        } else {
            echo "ID de usuario no especificado.";
        }
        ?>
    </div>
</body>
</html>
