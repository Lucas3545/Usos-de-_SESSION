<?php
session_start();
$id_editar = (int)$_GET['id'];
$libro_encontrado = null;

foreach ($_SESSION['productos'] as $prod) {
    if ($prod['id_producto'] === $id_editar) {
        $libro_encontrado = $prod;
        break;
    }
}

if (!$libro_encontrado) { die("Producto no encontrado."); }

$autores = $_SESSION['autores'] ?? [];
$editoriales = $_SESSION['editoriales'] ?? [];
$libros = $_SESSION['libros'] ?? [];
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Editar Producto</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
<div class="container mt-5">
    <div class="card mx-auto" style="max-width: 500px;">
        <div class="card-header bg-warning"><h4>Editar Producto</h4></div>
        <div class="card-body">
            <form action="procesar.php" method="POST">
                <input type="hidden" name="accion" value="editar">
                <input type="hidden" name="id_producto" value="<?= $libro_encontrado['id_producto'] ?>">

                <div class="mb-3">
                    <label>Autor</label>
                    <select name="autores" class="form-select" required>
                        <?php foreach ($autores as $autor): ?>
                            <option value="<?= $autor ?>" <?= $autor == $libro_encontrado['autores'] ? 'selected' : '' ?>>
                                <?= $autor ?>
                            </option>
                        <?php endforeach; ?>
                    </select>
                </div>
                <div class="mb-3">
                    <label>Editorial</label>
                    <select name="editoriales" class="form-select" required>
                        <?php foreach ($editoriales as $editorial): ?>
                            <option value="<?= $editorial ?>" <?= $editorial == $libro_encontrado['editoriales'] ? 'selected' : '' ?>>
                                <?= $editorial ?>
                            </option>
                        <?php endforeach; ?>
                    </select>
                </div>
                <div class="mb-3">
                    <label>Libro</label>
                    <select name="libros" class="form-select" required>
                        <?php foreach ($libros as $libro): ?>
                            <option value="<?= $libro ?>" <?= $libro == $libro_encontrado['libros'] ? 'selected' : '' ?>>
                                <?= $libro ?>
                            </option>
                        <?php endforeach; ?>
                    </select>
                </div>
                <button type="submit" class="btn btn-primary">Actualizar Cambios</button>
                <a href="lista.php" class="btn btn-secondary">Cancelar</a>
            </form>
        </div>
    </div>
</div>
</body>
</html>