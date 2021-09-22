<?php
session_start(); 
header("Content-type: image/jpeg");

$img = imagecreate(130, 40);
$color_fondo = imagecolorallocate($img, 140, 200, 250);
$color_fuente = imagecolorallocate($img, 0, 0, 0);
imagestring($img, 3, 38, 12, $_SESSION['captcha'], $color_fuente);
imagejpeg($img);
?>