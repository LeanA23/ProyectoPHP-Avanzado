<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="estilos.css">
    <title>PHP Avanzado</title>
</head>

<body>
    <div class="container">
        <div class="jumbotron" style="text-align: center;">
            <h1 class="display-6">Programación en PHP y MySQL - Nivel Avanzado</h1>
        </div>
        <nav class="navbar navbar-expand-md navbar-dark bg-dark">
            <ul class="navbar-nav mx-auto">
            <li class="nav-item"><a class="nav-link" href="unidad1.php">Unidad 1</a></li>
            <li class="nav-item"><a class="nav-link" href="unidad2.php">Unidad 2</a></li>
            <li class="nav-item"><a class="nav-link" href="unidad3.php">Unidad 3</a></li>
            <li class="nav-item"><a class="nav-link" href="unidad4.php">Unidad 4</a></li>
            <li class="nav-item"><a class="nav-link" href="unidad5.php">Unidad 5</a></li>
            <li class="nav-item"><a class="nav-link" href="caract_usuarios.php">Unidad 6</a></li>
            <li class="nav-item"><a class="nav-link" href="unidad7.php">Unidad 7</a></li>
            <li class="nav-item"><a class="nav-link" href="unidad8.php">Unidad 8</a></li>
            </ul>
        </nav>
        <section>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.html">Inicio</a></li>
                    <li class="breadcrumb-item" aria-current="page"><a href="unidad1.php">Cargar Clase</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Ver Clases</li>
                </ol>
            </nav>
            <section>
                <div class="table-responsive">
                    <table class="table table-striped">
                        <thead class="thead-dark">
                            <th>Clase</th>
                            <th>Fecha</th>
                        </thead>
                        <tbody>
                            <?php 
                                include("conexiondb.php");
                                $cursos=mysqli_query($db, "SELECT * FROM clases");
                                while($mostrar=mysqli_fetch_assoc($cursos)) {
                            ?>
                            <tr>
                                <td>
                                    <?php echo $mostrar['unidad']?>
                                </td>
                                <td>
                                    <?php echo $mostrar['fecha']?>
                                </td>
                            </tr>
                            <?php
                                }
                            ?>                                 
                        </tbody>
                    </table>
                </div>
            </section>
        </section>
    </div>
    <footer>
		  <a href="https://site.elearning-total.com/courses/?com=lb">Programación en PHP y MySQL - Nivel Avanzado</a>
	</footer>  

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="js/bootstrap.min.js"></script>
</body>
</html>
