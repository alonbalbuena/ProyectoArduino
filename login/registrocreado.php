<?php

//realizamos la conexion con bd
require 'config.php';

$consulta= $conexion -> query("INSERT INTO usuarios (nombre,contraseña)VALUES ('$nombre', '$contraseña')");

//valores que introduciremos en la base de datos
$nombre= $_POST["Email"];
$contraseña= $_POST["contraseña"]

//los introducimos
$filaIntroducida = $consulta->fetch_array();

?>

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/estiloslogin.css">
    <title>Registro Creado</title>
</head>

<body>


    <table class="container">
        <div class="row justify-content-center">
            <fieldset>
                <form>
                    <div class="form-row col-md-12">

                        <div class="form-group col-md-12">
                            <?php
                            //si la consulta va bien
                            if ($consulta)
                                echo "<label for="mensaje"><b>!! Felicidades ¡¡</b></label>
                                <label for="mensaje"><b>Te has registrado de forma correcta,pronto
                                tendrás conocimiento de los vatios que consume tu área de trabajo.</b></label>";
                                //mostramos los datos
                                echo "<p>$filaIntroducida</p>"
                            else
                                echo "<label for="mensaje"><b>Mala suerte</b></label>
                                <label for="mensaje"><b>Te has registrado de forma incorrecta intentalo de nuevo</b></label>";
                            
                            ?>
                        </div>
                    </div>
                    <a href="login.html" class="btn btn-info" role="button">Confirmar</a>
                </form>
            </fieldset>
        </div>
    </table>





    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
</body>

</html>