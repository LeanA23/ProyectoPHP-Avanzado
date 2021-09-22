<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="estilos.css">
    <title>PHP Avanzado - Unidad 3</title>
</head>

<body>
    <?php session_start();
        function codigo_captcha(){
            $patron = "0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ!@#$%&";
            $tam = strlen($patron);
            $key='';
            for($i=0; $i<8; $i++){
                $key .= $patron{rand(0,$tam - 1)};
            }
            return $key;
        }
        $_SESSION['captcha']=codigo_captcha();
    ?>
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
                <li class="nav-item"><a class="nav-link" href="#">Unidad 5</a></li>
                <li class="nav-item"><a class="nav-link" href="caract_usuarios.php">Unidad 6</a></li>
                <li class="nav-item"><a class="nav-link" href="unidad7.php">Unidad 7</a></li>
                <li class="nav-item"><a class="nav-link" href="unidad8.php">Unidad 8</a></li>
            </ul>
        </nav>
        <section>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.html">Inicio</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Unidad 5</li>
                </ol>
            </nav>
            <h3>Envie su consulta: </h3>
            <hr>
            <form method="POST" action="carga_consultas.php">
                <div class="form-row"> 
                    <div class="form-group col-sm-6">
                        <label for="nombre">Nombre/s:</label>
                        <input type="text" class="form-control" name="nombre" placeholder="Ingrese su nombre" required>
                    </div>
                    <div class="form-group col-sm-6">
                        <label for="apellido">Apellido/s:</label>
                        <input type="text" class="form-control" name="apellido" placeholder="Ingrese su apellido" required>
                    </div>
                </div>
                <div class="form-group">
                    <label for="email">E-mail:</label>
                    <input type="email" class="form-control" name="email" placeholder="Ingrese su email">
                </div>
                <div class="form-group">
                    <label for="cons">Consulta:</label>
                    <textarea name="cons" class="form-control" rows="5" placeholder="Ingrese su consulta..." required></textarea>
                </div>
                <div class="form-row">
                    <div class="form group col-sm-3">
                        <div class="text-center" style="margin-bottom: 5px;">
                            <img src="captcha.php" class="rounded">
                        </div>
                        <input name="confirm" type="text" class="form-control" id="confirm" placeholder="Confirmacion" required>
                        <?php
                            if(isset($_GET['error'])){
                                echo "<p>Codigo incorrecto</p>";
                            }
                        ?>
                    </div>
                </div>
                <br>
                <button type="submit" class="btn btn-primary">Enviar</button>
                <?php
                    if(isset($_GET['status'])){
                        echo '<div class="text-center"><h5>Fromulario enviado!</h5></div>';
                    }
                ?>       
            </form>
            <hr>
            <br>
        </section>
    </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="js/bootstrap.min.js"></script>
</body>
<footer>
	<a href="https://site.elearning-total.com/courses/?com=lb">Programación en PHP y MySQL - Nivel Avanzado</a>
</footer>
</html>