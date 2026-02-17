<?php

function obtenerNombreAutor($nombre, $autores) {
    foreach ($autores as $autor) {
        if ($autor == $nombre) {
            return $autor;
        }
    }
    return "Sin autor";
}

function obtenerNombreEditorial($nombre, $editoriales) {
    foreach ($editoriales as $editorial) {
        if ($editorial == $nombre) {
            return $editorial;
        }
    }
    return "Sin editorial";
}

function obtenerNombreLibros($nombre, $libros) {
    foreach ($libros as $libro) {
        if ($libro == $nombre) {
            return $libro;
        }
    }
    return "Sin libro";
}