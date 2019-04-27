<?php
require 'config.php';

session_start();

//comprobamos si existe ese usuario
$consulta = $conexion->query("SELECT email,contraseña FROM personas WHERE email = '".$_SESSION['email']."' AND contraseña = '".$_SESSION['contraseña']."';");

//si no existe nos redirige al login
if ($consulta->num_rows === 0) {
    header('Location: login.php');
}