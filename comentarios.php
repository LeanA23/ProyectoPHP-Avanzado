<?php

if ($_POST){
    $nom=$_POST['nombre'];  
    $ape=$_POST['apellido'];
    $mail=$_POST['email'];
    $coment=$_POST['msg'];
    date_default_timezone_set('America/Argentina/Buenos_Aires');
    $fecha=date("d/m/Y");
    $hr=getdate(time());
    $hora=$hr['hours'].":".$hr['minutes'];
    $arch=fopen("comentarios.txt","a") or die("Error al abrir el archivo");

    fputs($arch,"Autor: ".$nom." ".$ape." - Comentario: ".$coment." - ".$fecha." ".$hora."
    ");

    fclose($arch);
}
header("Location:unidad3.php");
?>