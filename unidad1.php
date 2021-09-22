<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
  	<link href="estilos.css" rel="stylesheet">
</head>
 
<body>
 
<div class="container">
	<header>
		<h1>Programación en PHP y MySQL - Nivel Avanzado</h1>
	

	<nav>
		<?php include("botonera.php"); ?>
	</nav>
	</header>
	<section>
		<nav id="botoneraOpc">
			<ul>
				<li><a href="#">Cargar clases</a></li>
				<li><a href="ver_clases.php">Ver clases</a></li>
			</ul>
		</nav>	

		<div id="formContent">
    		<form method="POST" action="insertar_datos.php">
        		<input type="text" name="clase" required placeholder="Clase" maxlength="30">
        		<input type="text" name="fecha" required placeholder="AAAA-MM-DD">
        		<input type="submit" value="Cargar"/>
    		</form>
		</div>
	</section>
	<footer>
		<a href="https://site.elearning-total.com/courses/?com=lb">Programación en PHP y MySQL - Nivel Avanzado</a>
	</footer>
 
</div>
</body>
</html>
