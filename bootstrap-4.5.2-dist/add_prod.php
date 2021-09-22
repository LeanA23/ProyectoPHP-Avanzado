<?php
require 'clasesU7/BDD.php';
require 'clasesU7/carrito.php';
require 'constantes.php';

$base = new BaseDD(SV,USU,PASS,BD);
$prod = new Carrito($base);

$prod->agregar_prod($_GET['cod']);

header("Location: unidad7.php?ok");
?>