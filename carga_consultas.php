<?php
session_start();
$nombre=$_POST['nombre'];
$apellido=$_POST['apellido'];
$email=$_POST['email'];
$cons=$_POST['cons'];
$confirm=$_POST['confirm'];

if($confirm == $_SESSION['captcha']){
    include("conexiondb.php");
    mysqli_query($db,"INSERT INTO consultas VALUES(DEFAULT, '$nombre', '$apellido', '$email', '$cons')");
    header('Location: unidad5.php?status=ok');
}else{
    header('Location: unidad5.php?error');
}
?>