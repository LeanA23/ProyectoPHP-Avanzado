<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
  	<link rel="stylesheet" href="estilos.css">
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
				<li><a href="unidad1.php">Cargar clases</a></li>
				<li><a href="#">Ver clases</a></li>
			</ul>
		</nav>	
        <section>
            <table class="flat-table">
                    <tbody>
                        <tr>
                            <th>Clases</th>
                            <th>Fecha</th>
                        </tr>
                        <?php 
                        include("conexiondb.php");

                        $cursos=mysqli_query($db, "SELECT * FROM clases");

                        while($mostrar=mysqli_fetch_assoc($cursos)) {
                        ?>
                        <tr>
                            <td><?php echo $mostrar['unidad']?></td>
                            <td><?php echo $mostrar['fecha']?></td>
                        </tr>
                        <?php
                        }
                        ?>
                    </tbody>
            </table>
        </section>
	</section>
	<footer>
		<a href="https://site.elearning-total.com/courses/?com=lb">Programación en PHP y MySQL - Nivel Avanzado</a>
	</footer>
 
</div>
</body>
</html>