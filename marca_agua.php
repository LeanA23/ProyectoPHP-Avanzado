<?
$base = "unidad4.jpg";
$marca = "marca.png";
$imagen = imagecreatefrompng($marca);
$extension = substr($base, -3);

if (strtolower($extension) == "gif"){
    $img2 = imagecreatefromgif($base);
    $formato = "image/gif";
}elseif (strtolower($extension) == "jpg") {
    $img2 = imagecreatefromjpeg($base);
    $formato = "image/jpeg";
}elseif (strtolower($extension) == "png"){
    $img2 = imagecreatefrompng($base);
    $formato = "image/png";
}else{
    echo "error";
}

imagecopy($img2, $imagen, 50, 50, 0, 0, imagesx($imagen), imagesy($imagen));

header("Content-type: $formato");
imagejpeg($img2);

?>

