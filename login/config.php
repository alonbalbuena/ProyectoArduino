<?php

$bdhost="localhost";//localhost en ordernador. 127.0.0.1 en server
$bdusuario="root";//root en casa. root en clase
$bdcontraseña="";//nada en casa. laboral1 en clase
$bd="usuarios";

//CREAMOS LA CONEXION
$conexion = new mysqli($bdhost,$bdusuario,$bdcontraseña,$bd);
//recordar cerrar la conexion

//seleccionamos la codificacion de la bbdd
$conexion->set_charset("utf8");

if($conexion->connect_errno){
    exit("Error al conectar con la base de datos: ".$conexion->connect_errno);
}
