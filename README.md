# Usos-de-_SESSION
Este documento es para explicar el uso de la variable $_SESSION en PHP.

## ¿Qué es $_SESSION?
$_SESSION es una variable superglobal en PHP que se utiliza para almacenar información en el servidor para ser utilizada a través de múltiples páginas de una aplicación web. A diferencia de las cookies, que almacenan información en el lado del cliente, $_SESSION almacena información en el servidor, lo que la hace más segura y confiable.

## ¿Cómo se utiliza $_SESSION?
Para utilizar $_SESSION, primero debes iniciar una sesión en PHP utilizando la función session_start(). Una vez que la sesión ha sido iniciada, puedes almacenar información en la variable $_SESSION utilizando la sintaxis $_SESSION['nombre_de_variable'] = valor.

# funcionamiento
1. README.md
Documentación que explica qué es $_SESSION, cómo funciona y proporciona ejemplos básicos de uso. Describe que $_SESSION es una variable superglobal que almacena información en el servidor (no en el cliente como las cookies), haciéndola más segura.

2. data.php
Propósito: Inicializar los datos de la sesión.

Inicia la sesión con session_start()
Crea tres arrays en la sesión:
$_SESSION['autores']: Lista de 7 autores famosos (Cervantes, García Márquez, Borges, etc.)
$_SESSION['libros']: Lista de 7 libros clásicos
$_SESSION['editoriales']: Lista de 6 editoriales costarricenses
Inicializa $_SESSION['productos'] como array vacío si no existe (aquí se guardarán los libros creados)
3. index.php
Propósito: Formulario para agregar nuevos libros.

Página principal con un formulario Bootstrap
Campos de entrada:
Autor (campo de texto libre)
Editorial (campo de texto libre)
Libro (campo de texto libre)
Envía los datos a procesar.php con accion=crear
4. procesar.php
Propósito: Controlador central que procesa todas las operaciones CRUD.

Operaciones:

CREAR (líneas 22-32):

Genera un nuevo ID automático (incrementa el máximo ID existente)
Crea un array con los datos del libro
Lo agrega a $_SESSION['productos']
EDITAR (líneas 34-49):

Recibe el ID del producto a editar
Busca el producto en el array de sesión
Actualiza sus datos manteniendo el mismo ID
ELIMINAR (líneas 4-16):

Recibe el ID por GET
Busca y elimina el producto del array
Reindexar el array con array_values()
Redirige a lista.php después de cada operación

5. lista.php
Propósito: Mostrar el inventario completo de libros.

Incluye funciones.php (aunque no las usa activamente)
Muestra una tabla Bootstrap con todos los productos de $_SESSION['productos']
Columnas: ID, Autor, Editorial, Libro, Acciones
Botones de acción:
Editar: Enlaza a editar.php?id=X
Eliminar: Enlaza a procesar.php?accion=eliminar&id=X con confirmación JavaScript
Botón para agregar nuevo libro que lleva a index.php
6. editar.php
Propósito: Formulario para editar un libro existente.

Recibe el ID del libro por GET
Busca el libro en $_SESSION['productos']
Muestra un formulario prellenado con los datos actuales
Usa selectores desplegables (no campos de texto) con las opciones de:
$_SESSION['autores']
$_SESSION['editoriales']
$_SESSION['libros']
Envía los datos actualizados a procesar.php con accion=editar
7. funciones.php
Propósito: Funciones auxiliares (actualmente no utilizadas en el proyecto).

obtenerNombreAutor(): Busca un autor en un array
obtenerNombreEditorial(): Busca una editorial en un array
obtenerNombreLibros(): Busca un libro en un array
Estas funciones retornan el nombre si lo encuentran, o un mensaje por defecto si no
Flujo de Trabajo
Inicialización: Ejecutar data.php para cargar los datos iniciales en la sesión
Crear: Usar index.php para agregar libros → procesa en procesar.php → redirige a lista.php
Leer: Ver todos los libros en lista.php
Actualizar: Clic en "Editar" → editar.php → procesa en procesar.php → redirige a lista.php
Eliminar: Clic en "Eliminar" → procesar.php → redirige a lista.php
Características Técnicas
Sin base de datos: Todo se almacena en $_SESSION
Persistencia temporal: Los datos existen mientras la sesión esté activa
Bootstrap 5: Interfaz moderna y responsiva
Bootstrap Icons: Iconos visuales en botones
Validación: Campos requeridos en formularios
IDs autoincrementales: Generación automática de IDs únicos
Confirmación de eliminación: JavaScript confirm() antes de borrar
Limitaciones
Los datos se pierden al cerrar el navegador o expirar la sesión
No hay persistencia real (no hay base de datos)
Es un proyecto educativo para demostrar el uso de sesiones en PHP

## Ejemplo de uso de $_SESSION
Aquí tienes un ejemplo simple de cómo utilizar $_SESSION en PHP:

```php
<?php
// Iniciar la sesión
session_start();

// Almacenar información en la sesión
$_SESSION['nombre'] = 'Juan';
$_SESSION['edad'] = 30;

// Recuperar información de la sesión
$nombre = $_SESSION['nombre'];
$edad = $_SESSION['edad'];

// Mostrar la información
echo "Nombre: " . $nombre . "<br>";
echo "Edad: " . $edad . "<br>";
?>
