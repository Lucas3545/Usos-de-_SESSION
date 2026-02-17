<?php
session_start();
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Agregar Libros nuevos</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card shadow">
                <div class="card-header bg-primary text-white">
                    <h4 class="mb-0">Nuevo Libro</h4>
                </div>
                <div class="card-body">
                    <form action="procesar.php" method="POST">
                        <input type="hidden" name="accion" value="crear">
                        <div class="mb-3">
                            <label class="form-label">autor</label>
                            <input type="text" name="autores" class="form-control" required>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Editorial</label>
                            <input type="text" name="editoriales" class="form-control" required>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">libro</label>
                            <input type="text" name="libros" class="form-control" required>
                        </div>
                        <div class="d-grid">
                            <button type="submit" class="btn btn-success">Guardar libro</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

</body>
</html>