<?php
session_start();

if ($_GET['accion'] == 'eliminar') {
    $id_a_borrar = (int)$_GET['id'];

    foreach ($_SESSION['productos'] as $indice => $producto) {
        if ($producto['id_producto'] === $id_a_borrar) {
            unset($_SESSION['productos'][$indice]);
            break;
        }
    }
    $_SESSION['productos'] = array_values($_SESSION['productos']);
    header("Location: lista.php");
    exit();
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $accion = $_POST['accion'];

    if ($accion == 'crear') {
        $nuevo_id = empty($_SESSION['productos']) ? 1 : max(array_column($_SESSION['productos'], 'id_producto')) + 1;
        
        $datosProducto = [
            "id_producto"  => $nuevo_id,
            "autores"       => $_POST['autores'],
            "editoriales"   => $_POST['editoriales'],
            "libros"        => $_POST['libros'],
        ];
        
        $_SESSION['productos'][] = $datosProducto;
        
    } elseif ($accion == 'editar') {
        $id_producto = (int)$_POST['id_producto'];
        
        $datosProducto = [
            "id_producto"  => $id_producto,
            "autores"       => $_POST['autores'],
            "editoriales"   => $_POST['editoriales'],
            "libros"        => $_POST['libros'],
        ];
        
        foreach ($_SESSION['productos'] as $indice => $producto) {
            if ($producto['id_producto'] === $id_producto) {
                $_SESSION['productos'][$indice] = $datosProducto;
                break;
            }
        }
    }

    header("Location: lista.php");
    exit();
}
