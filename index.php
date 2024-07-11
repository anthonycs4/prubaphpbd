<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD con PHP y MySQL</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="container">
        <h1>Lista de Usuarios</h1>
        <div class="table-container">
            <?php include 'CRUD/listar.php'; ?>
        </div>
        <h2>Agregar Nuevo Usuario</h2>
        <form action="CRUD/crear.php" method="POST">
            <label for="nombre">Nombre:</label>
            <input type="text" id="nombre" name="nombre" required>
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>
            <button type="submit">Agregar</button>
        </form>
    </div>
</body>
</html>
