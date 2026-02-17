<?php
session_start();

$_SESSION['autores'] = [
    "Miguel de Cervantes",
    "Gabriel García Márquez",
    "Jorge Luis Borges",
    "Julio Cortázar",
    "Mario Vargas Llosa",
    "Isabel Allende",
    "Haruki Murakami"
];

$_SESSION['libros'] = [
    "Don Quijote de la Mancha",
    "Cien años de soledad",
    "Ficciones",
    "Rayuela",
    "La ciudad y los perros",
    "La casa de los espíritus",
    "Tokio Blues"
];

$_SESSION['editoriales'] = [
    "Editorial Costa Rica",
    "Editorial Fernández Arce",
    "Grupo Editorial Antares",
    "Susaeta Editores",
    "McGraw Hill Interamericana",
    "G.D.S. Internacional S.A."
];

if (!isset($_SESSION['productos'])) {
    $_SESSION['productos'] = [];
}

echo "<h2>Datos guardados con éxito</h2>";
echo "<p><a href='lista.php'>Ver lista de libros</a></p>";
echo "<p><a href='index.php'>Agregar nuevo libro</a></p>";
?>