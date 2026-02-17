# Usos-de-_SESSION
Este documento es para explicar el uso de la variable $_SESSION en PHP.

## ¿Qué es $_SESSION?
$_SESSION es una variable superglobal en PHP que se utiliza para almacenar información en el servidor para ser utilizada a través de múltiples páginas de una aplicación web. A diferencia de las cookies, que almacenan información en el lado del cliente, $_SESSION almacena información en el servidor, lo que la hace más segura y confiable.

## ¿Cómo se utiliza $_SESSION?
Para utilizar $_SESSION, primero debes iniciar una sesión en PHP utilizando la función session_start(). Una vez que la sesión ha sido iniciada, puedes almacenar información en la variable $_SESSION utilizando la sintaxis $_SESSION['nombre_de_variable'] = valor.

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
