<?php
    //archivo para crear la conexion
    require('config.php');

    //SI LOS VALORES EXISTEN LOS INSERTAMOS
    //empty????? isset?????
    if (!empty($_POST["email"]) && !empty($_POST["contraseña"]) && !empty($_POST["direccion"]) && !empty($_POST["ciudad"]) && !empty($_POST["comunidad"]) &&  !empty($_POST["condiciones"])) {

        $email = $_POST['email'];
        $contraseña = $_POST["contraseña"];
        $direccion = $_POST["direccion"];
        $ciudad = $_POST["ciudad"];
        $comunidad = $_POST["comunidad"];
        $condiciones = $_POST["condiciones"];//En bbdd tiene por defecto "no"

        //insertamos(IMPORTANTE EL PUNTO Y COMA)
        $sql = "insert into personas (email, contraseña, direccion, ciudad, comunidad, condiciones) values('$email', '$contraseña', '$direccion','$ciudad','$comunidad','$condiciones');";

        $funciona=$conexion->query($sql);

        //si no funciona el sql
        if (!$funciona) {
            exit("La sentencia sql ha tenido alguna complicacion");
        }

        //si ya existe el usuario que no te deje registrarlo y te salte algun aviso
    } else {
        //si no
        exit("le ha faltado algun campo por rellenar");
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
                        <b>!! Felicidades ¡¡ Te has registrado de forma correcta,pronto tendrás conocimiento de los vatios que consume tu área de trabajo</b>
                        <a href='login.html' class='btn btn-info' role='button'>Confirmar</a>
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