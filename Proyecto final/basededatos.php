<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Tarea1</title> 
    <script src="script.js" defer></script>
</head>
<body>
    <h1>Funciones</h1>

    <h2>Crear Registros</h2>
    <form action="index.php?accion=crear" method="post">
        <label for="columna1">Columna 1:</label>
        <input type="text" name="columna1" required>
        <label for="columna2">Columna 2:</label>
        <input type="text" name="columna2" required>
        <button type="submit">Crear</button>
    </form>

    <h2>Actualizar Registros</h2>
    <form id="actualizar-form" action="index.php?accion=actualizar" method="post">
        <input type="hidden" name="id" id="actualizar-id">
        <label for="actualizar-columna1">Columna 1:</label>
        <input type="text" name="columna1" id="actualizar-columna1" required>
        <label for="actualizar-columna2">Columna 2:</label>
        <input type="text" name="columna2" id="actualizar-columna2" required>
        <button type="submit">Actualizar</button>
    </form>

    <h2>Registros</h2>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Columna 1</th>
                <th>Columna 2</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($datos as $dato): ?>
                <tr>
                    <td><?php echo htmlspecialchars($dato['id']); ?></td>
                    <td> echo htmlspecialchars($dato['columna1']);</td>
                    <td><?php echo htmlspecialchars($dato['columna2']); ?></td>
                    <td>
                        <button onclick="editar(<?php echo htmlspecialchars($dato['id']); ?>, 
                        '<?php echo htmlspecialchars($dato['columna1']); ?>', '<?php echo htmlspecialchars
                        ($dato['columna2']); ?>')">Editar</button>
                        <a href="index.php?accion=eliminar&id=<?php echo htmlspecialchars($dato['id']);
                         ?>" onclick="return confirm('¿Estás seguro?')">Eliminar</a>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</body>
</html>

