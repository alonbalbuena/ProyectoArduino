<?php
    //archivo para crear la conexion
    require('config.php');
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
                        //SI LOS VALORES EXISTEN LOS INSERTAMOS
                        if (!empty($_POST["email"]) && !empty($_POST["contraseña"]) && !empty($_POST["direccion"]) && !empty($_POST["ciudad"]) && !empty($_POST["comunidad"]) &&  !empty($_POST["condiciones"])) {

                            $email = $_POST["email"];
                            $contraseña = $_POST["contraseña"];
                            $direccion = $_POST["direccion"];
                            $ciudad = $_POST["ciudad"];
                            $comunidad = $_POST["comunidad"];
                            $condiciones = $_POST["condiciones"];//por defecto "no"
        
                            //insertamos si no existe el usuario ya(sin importar la pass)
                            $consulta = $conexion->query("SELECT email FROM personas WHERE email = '".$email."'");
                            if ($consulta->num_rows === 1) {
                                //si ya existe lo devolvemos a la pagina de registro
                                header('Location: registro.html');
                            } else {
                                $sql = "insert into personas (email, contraseña, direccion, ciudad, comunidad, condiciones) values('$email', '$contraseña', '$direccion','$ciudad','$comunidad','$condiciones');";
                                
                                $conexion->query($sql); 
                        ?>
                        <b>Felicidades el registro ha sido satisfactorio</b>
                        <a href='login.php' class='btn btn-info' role='button'>Confirmar</a>
                        <?php
                            }
                        }else{ 
                        ?>
                        <b>le ha faltado algun campo por rellenar</b>
                        <a href='registro.html' class='btn btn-info' role='button'>Confirmar</a>
                        <?php } ?>
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