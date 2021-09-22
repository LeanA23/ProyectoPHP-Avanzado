<?php 
$clase=$_POST['clase'];
$fecha=$_POST['fecha'];

include("conexiondb.php");

mysqli_query($db,"INSERT INTO clases VALUES(DEFAULT, '$clase', '$fecha')");

header("Location:unidad1.php");
?>