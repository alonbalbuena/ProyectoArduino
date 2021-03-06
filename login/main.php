<?php

require 'config.php';

//si no existe session la creamos
if (!isset($_SESSION['email']) && !isset($_SESSION['contraseña'])) {
    session_start();
    $_SESSION['email'] = $_POST['email'];
    $_SESSION['contraseña'] = $_POST['contraseña'];
    
}

//comprobamos si existe ese usuario
$consulta = $conexion->query("SELECT email,contraseña FROM personas WHERE email = '".$_SESSION['email']."' AND contraseña = '".$_SESSION['contraseña']."';");

//si no existe nos redirige al login
if ($consulta->num_rows === 0) {
    header('Location: login.php');
}

?>
<!DOCTYPE html>
<html lang="es">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="shortcut-icon" href="img/favicon.ico" type="image/x-icon">
    <link rel="icon" href="img/favicon.ico" type="image/x-icon">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/estilos.css">


    <title>Gestor Energético | Inicio</title>
</head>

<body>
    <div class="container">
        <div class="row">
            <nav class="navbar fixed-top navbar-expand-lg navbar-light bg-primary d-flex justify-content-between">
                <a class="navbar-brand text-uppercase destaca" href="main.html">Gestor Energético</a>
                <button class="navbar-toggler btn-outline-secondary" type="button" data-toggle="collapse"
                    data-target="#menu">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="menu">
                    <hr class="d-lg-none bg-secondary">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item active">
                            <h5><a class="nav-link" href="main.html">Inicio</a></h5>
                        </li>
                        <li class="nav-item dropdown">
                            <h5><a class="nav-link dropdown-toggle" href="control.html"
                                    data-toggle="dropdown">Control</a></h5>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="#">Arduino #1</a>
                                <a class="dropdown-item" href="#">Arduino #2</a>
                                <a class="dropdown-item" href="#">Arduino #3</a>
                            </div>
                        </li>
                        <li class="nav-item dropdown">
                            <h5><a class="nav-link dropdown-toggle" href="registro.html"
                                    data-toggle="dropdown">Registro</a></h5>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="#">Arduino #1</a>
                                <a class="dropdown-item" href="#">Arduino #2</a>
                                <a class="dropdown-item" href="#">Arduino #3</a>
                            </div>
                        </li>
                        <li class="nav-item">
                            <h5><a class="nav-link" href="ajustes.html">Ajustes</a></h5>
                        </li>
                    </ul>
                    <hr class="d-lg-none bg-secondary">
                    <form class="form-inline mb-2 my-lg-0 input-group ">
                        <input type="text" class="form-control border-secondary rounded-left" placeholder="Buscar">
                        <div class="input-group-append">
                            <button class="btn btn-outline-success btn-buscar bg-secondary rounded-right"
                                type="submit"></button>
                        </div>
                    </form>
                </div>
            </nav>
        </div>

        <!--Carousel-->
        <div class="row mt-5 pt-2 d-none d-md-block">
            <div id="carousel" class="carousel slide carousel-fade" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#carousel" data-slide-to="0" class="active"></li>
                    <li data-target="#carousel" data-slide-to="1"></li>
                    <li data-target="#carousel" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img class="d-block w-100" src="img/carousel-1.jpg" alt="First slide">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="img/carousel-2.jpg" alt="Second slide">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="img/carousel-3.jpg" alt="Third slide">
                    </div>
                </div>
                <a class="carousel-control-prev" href="#carousel" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon"></span>
                </a>
                <a class="carousel-control-next" href="#carousel" role="button" data-slide="next">
                    <span class="carousel-control-next-icon"></span>
                </a>
            </div>
        </div>

        <!--Cards-->
        <div class="row mt-5 mt-md-2 text-center">
            <div class="col-12 col-sm-6 col-lg-3 my-3">
                <a href="control.html">
                    <div class="card">
                        <img class="card-img-top " src="img/control2.png" alt="Card image cap">
                        <div class="card-body">
                            <h3 class="card-title">CONTROL</h3>
                        </div>
                    </div>
                </a>
            </div>

            <div class="col-12 col-sm-6 col-lg-3 my-3">
                <a href="registro.html">
                    <div class="card">
                        <img class="card-img-top " src="img/registro2.png" alt="Card image cap">
                        <div class="card-body">
                            <h3 class="card-title">REGISTRO</h3>
                        </div>
                    </div>
                </a>
            </div>

            <div class="col-12 col-sm-6 col-lg-3 my-3">
                <a href="ajustes.html">
                    <div class="card">
                        <img class="card-img-top " src="img/ajustes2.png" alt="Card image cap">
                        <div class="card-body">
                            <h3 class="card-title">AJUSTES</h3>
                        </div>
                    </div>
                </a>
            </div>

            <div class="col-12 col-sm-6 col-lg-3 my-3">
                <a href="contacto.html">
                    <div class="card">
                        <img class="card-img-top " src="img/contacto2.png" alt="Card image cap">
                        <div class="card-body">
                            <h3 class="card-title">CONTACTO</h3>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </div>

    <div class="jumbotron jumbotron-fluid">
        <div class="container">
            <div class="row justify-content-around">
                <div class="col-12 col-md-6 col-lg-5">
                    <h1 class="display-5 text-center destaca">El Reto</h1>
                    <hr>
                    <p class="text-justify">Nuestro proyecto para "El Reto" es un sistema de registro y control del
                        consumo eléctrico de las instalaciones. En este proyecto hemos participado los siguientes:</p>
                    <div class="d-flex justify-content-center py-2">
                        <button type="button" class="d-none d-md-block btn btn-block btn-warning btn-lg text-center">
                            <h3>Descubrir más</h3>
                        </button>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-5 d-flex justify-content-center">
                    <ul class="list-group">
                        <li class="list-group-item d-flex justify-content-between align-items-center">
                            Alonso García Balbuena
                            <span class="badge badge-primary badge-pill ml-2">Coordinador</span>
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-center">Diego Cancelinha
                            Arrojo</li>
                        <li class="list-group-item d-flex justify-content-between align-items-center">Manuel Macho
                            Calvín</li>
                        <li class="list-group-item d-flex justify-content-between align-items-center">Pablo Salgado
                            González</li>
                        <li class="list-group-item d-flex justify-content-between align-items-center">David García
                            Fernández</li>
                        <li class="list-group-item d-flex justify-content-between align-items-center">David Muñoz
                            Rodríguez</li>
                    </ul>
                </div>
                <div class="d-flex justify-content-center w-100 p-3">
                    <button type="button" class="d-md-none btn btn-block btn-warning btn-lg text-center">
                        <h3>Descubrir más</h3>
                    </button>
                </div>
            </div>
        </div>
    </div>

    <footer class="page-footer">
        <div class="footer-copyright text-center py-3">GESTOR ENERGÉTICO © 2019 Copyright:
            <a href="http://www.cifplalaboral.es/inicio/">CIFP La Laboral</a>
        </div>
    </footer>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
</body>

</html>