<?php
include("clasesU8/password.php");
$mail = $_POST['email'];
$pass = $_POST['pass'];

$bd=mysqli_connect("localhost", "root", "", "phpavanzado") or die ("Error al conectar con la base de datos");

$consulta=mysqli_query($bd, "SELECT contra FROM usuarios_sitio WHERE correo='$mail'");


$codif = mysqli_fetch_array($consulta);

$iguales = password_verify($pass, $codif['contra']);
if ($iguales) {
 header("Location: u8_ingreso.php?verificado");
} else {
 header("Location: u8_ingreso.php?error");
}

?>