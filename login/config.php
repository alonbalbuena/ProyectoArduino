<?php

$bdhost="localhost";
$bdusuario="root";
$bdcontraseña="laboral";
$bd="usuarios";

//CREAMOS LA CONEXION
$conexion = new mysqli($bdhost,$bdusuario,$bdcontraseña,$bd);
//recordar cerrar la conexion
