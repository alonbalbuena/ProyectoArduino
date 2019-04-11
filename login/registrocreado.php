<?php
    //archivo para crear la conexion
    require('config.php');
    
    //SI LOS VALORES EXISTEN LOS INSERTAMOS
    if (isset($_POST['email']) && isset($_POST['contraseña']) && isset($_POST['direccion']) && isset($_POST['ciudad']) && isset($_POST['comunidad']) && isset($_POST['condiciones'])){

        $email = $_POST['email'];
	    $contraseña = $_POST['contraseña'];
        $direccion = $_POST['direccion'];
        $ciudad = $_POST['ciudad'];
        $comunidad = $_POST['comunidad'];
        $condiciones = $_POST['condiciones'];

        //insertamos
        $sql = "INSERT INTO `user` (username, password, email) VALUES ('$username', '$password', '$email')";
        $conexion->query($sql);

        //variable para saber si funciona
    }
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
                            <?php
                            echo "<p>$nombre $contraseña</p>";
                            //si la consulta va bien
<<<<<<< HEAD
                            if ($funciona){
                                echo "<b>!! Felicidades ¡¡ Te has registrado de forma correcta,pronto tendrás conocimiento de los vatios que consume tu área de trabajo</b>";
                                //mostramos los datos
                                echo "<p>Bienvenido $email</p>";
                            }
                            else{
                                echo "<b>Mala suerte. Te has registrado de forma incorrecta intentalo de nuevo</b>";
                        }
                        ?>
                        <a href='login.html' class='btn btn-info' role='button'>Confirmar</a>
=======
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
>>>>>>> c3a5a530ddc243fb35d16bc48ce9df30dfb5155b
                    </div>
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