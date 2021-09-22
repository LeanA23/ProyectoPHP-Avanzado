<?php
include("clasesU8/class.phpmailer.php");
include("clasesU8/class.smtp.php");
$pass = password_hash($_POST['pass'], PASSWORD_DEFAULT, array('cost'=> 4));
$nom = $_POST['nombre'];
$ap = $_POST['apellido'];
$email = $_POST['email'];

$bd=mysqli_connect("localhost", "root", "", "phpavanzado") or die ("Error al conectar con la base de datos");

mysqli_query($bd, "INSERT INTO usuarios_sitio VALUES (DEFAULT,'$nom','$ap','$email','$pass')");

$mail = new PHPMailer();
		
$mail->Mailer = "smtp";
$mail->SMTPAuth = true;
		
$mail->SMTPSecure = "tls"; 
$mail->Host = "smtp.gmail.com"; 
$mail->Port = 587;
$mail->Username = "reloco23@gmail.com"; 
$mail->Password = ""; 
		
$mail->IsHTML(true);
$mail->From = "reloco23@gmail.com";
$mail->FromName = "Curso php";
$mail->AddAddress($email);
$mail->Subject = "Datos de registro";
$mail->Body = "Estimado/a ".$nombre." ".$apellido.": Se realizo correctamente el registro de sus daotos.<br> Puedes acceder a nuestro sitio web ingresando los siguientes datos de acceso:<br> correo: ".$email."<br> contraseña: ".$_POST['pass'].". Muchas Gracias.";
$exito=$mail->send();
	
if ($exito){	 
	print("<h2>Gracias por contactarnos.  </h2>");
 	}else{
 		print("<h2>Error al enviar el mensaje. Por favor intentelo nuevamente.  </h2>");
 	}

header("Location: unidad8.php?ok");
?>