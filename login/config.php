<?php

$bdhost="localhost";//localhost en ordernador. 127.0.0.1 en server
$bdusuario="root";//root en casa. root en clase
$bdcontraseña="";//nada en casa. laboral1 en clase
$bd="usuarios";

//CREAMOS LA CONEXION
$conexion = new mysqli($bdhost,$bdusuario,$bdcontraseña,$bd);
//recordar cerrar la conexion
