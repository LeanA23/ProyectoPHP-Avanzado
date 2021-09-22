<?php
require 'clasesU7/BDD.php';
require 'clasesU7/carrito.php';
require 'constantes.php';

$base = new BaseDD("localhost","root","","phpavanzado");
$carrito = new Carrito($base);

$carrito->eliminar_prod($_GET['codigo']);

header("Location: ver_carrito.php?ok");
?>