<?php

//comprobamos si el usuario accedio a esta pagina desde el login pulsando el boton de login.

if (isset($_POST["login-submit"])) {

    require 'dbh.inc.php';

    //posibilidad de logearse con id o email
    $mailuid = $_POST['mailuid'];
    $password = $_POST['pass'];

    //si introducimos una contraseña o usuario vacio
    if (empty($mailuid) || empty($password)) {

        header("../loginprueba.php?error=emptyfields");
        exit();

    }else {
        //si una persona intenta entrar en la web mediante un link comprobamos que coincidan el usuario y contraseña
        $sql = "SELECT * FROM usuarios WHERE uidUsers=? OR emailUsers =?;";

        //comprobamos que la conexion se ha hecho
        $stmt = mysqli_stmt_init($conexion);
        //ademas si la consulta de mas arriba da error con esta conexion
        if (!mysqli_stmt_prepare($stmt,$sql)) {

            header("../loginprueba.php?error=sqlerror");
            exit();
        }else {
            //comprobamos si devuelve algo la base de datos al introducir
            //el usuario y contraseña es decir dos strings "ss"
            mysqli_stmt_bind_param($stmt,"ss","$mailuid","$mailuid");
            mysqli_stmt_execute($stmt);
            //guardamos el resultado en una variable
            $result = mysqli_stmt_get_result($stmt);
        }
    }
}
else{
    //devolvemos a la pagina principal si no ha logeado
    header("../loginprueba.php");
    exit();
}