<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/estiloslogin.css">
    <title>login</title>
</head>

<body>


    <table class="container ">
        <div class="row justify-content-center">

            <fieldset class="rounded">
                <legend class="rounded-pill"><b class="text-justify-center">Inicio de Sesión</b></legend>
                <form action="main.php" method="post">
                    <div class="form-row col-md-12">
                        <div class="form-group col-md-12">
                            <label for="Email"><b>Email</b></label>
                            <input name="email" type="email" class="form-control" id="Email" placeholder="Email">
                        </div>
                    </div>

                    <div class="form-row col-md-12">
                        <div class="form-group col-md-12">
                            <label for="Contraseña"><b>Contraseña</b></label>
                            <input name="contraseña" type="password" class="form-control" id="Contraseña"
                                placeholder="Contraseña">
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="gridCheck">
                            <label class="form-check-label" for="gridCheck">
                                <b>Recordar mi nombre de usuario</b>
                            </label>
                        </div>
                    </div>


                    <div class="form-check">
                        <input class="btn btn-primary" type="submit" value="confirmar">
                        <a href="registro.html" class="btn" role="button">Registrarte</a>
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