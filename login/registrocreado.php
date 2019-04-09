<?php

//realizamos la conexion con bd
require 'config.php';

//valores que introduciremos en la base de datos
$nombre= $_POST["nombre"];
$contraseña= $_POST["contraseña"];


//Creamos la consulta
$sql="INSERT INTO usuarios (nombre,contraseña)VALUES ('$nombre', '$contraseña')";
$consulta=$conexion -> query($sql);
//si la consulta no devuelve ninguna valor como en el caso de
//INSERT,UPDATE,ALTER... $consulta devuelve true o false


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
                            echo "<p>$nombre $contraseña</p>";
                            //si la consulta va bien
                            if ($consulta){
                                echo "<p>!! Felicidades ¡¡</p></label>
                                <p>Te has registrado de forma correcta,pronto
                                tendrás conocimiento de los vatios que consume tu área de trabajo.</p>";
                            }
                            else{
                                echo "<p>Mala suerte</p>
                                <p>Te has registrado de forma incorrecta intentalo de nuevo</p>";
                            }
                            $conexion->close();
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