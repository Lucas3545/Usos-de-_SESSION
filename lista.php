<?php
session_start();
include 'config/funciones.php';
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>Inventario de Productos</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.0/font/bootstrap-icons.css">
</head>

<body class="bg-light">

    <div class="container mt-5">
        <div class="d-flex justify-content-between align-items-center mb-4">
            <h2><i class="bi bi-cpu text-primary"></i> Inventario Tecnológico</h2>
            <a href="index.php" class="btn btn-primary">
                <i class="bi bi-plus-circle"></i> Agregar Nuevo
            </a>
        </div>

        <div class="card shadow">
            <div class="card-body">
                <table class="table table-hover align-middle">
                    <thead class="table-dark">
                        <tr>
                            <th>ID</th>
                            <th>autores</th>
                            <th>editoriales</th>
                            <th>libros</th>
                            <th class="text-center">Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php if (empty($_SESSION['productos'])): ?>
                            <tr>
                                <td colspan="5" class="text-center text-muted">No hay libros registrados en la sesión.</td>
                            </tr>
                        <?php else: ?>
                            <?php foreach ($_SESSION['productos'] as $indice => $prod): ?>
                                <tr>
                                    <td><strong><?= $prod['id_producto'] ?></strong></td>
                                    <td><?= $prod['autores'] ?></td>
                                    <td>
                                        <span class="badge bg-info text-dark">
                                            <?= $prod['editoriales'] ?>
                                        </span>
                                    </td>
                                    <td><?= $prod['libros'] ?></td>
                                    <td class="text-center">
                                        <a href="editar.php?id=<?= $prod['id_producto'] ?>" class="btn btn-sm btn-warning">
                                            <i class="bi bi-pencil"></i> Editar
                                        </a>
                                        <a href="back/procesar.php?accion=eliminar&id=<?= $prod['id_producto'] ?>" 
                                           class="btn btn-sm btn-danger" 
                                           onclick="return confirm('¿Eliminar este libro?')">
                                            <i class="bi bi-trash"></i> Eliminar
                                        </a>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                        <?php endif; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

</body>

</html>