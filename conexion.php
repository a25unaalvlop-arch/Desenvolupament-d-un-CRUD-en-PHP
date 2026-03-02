<?php
$host = "localhost";
$usuario = "a25unaalvlop_";
$contrasenia = "hbBoXRa5NvVO1sWB";
$base_de_datos = "a25unaalvlop_videojuegos";
$mysqli = new mysqli($host, $usuario, $contrasenia, $base_de_datos);
if ($mysqli->connect_errno) {
    echo "Falló la conexión a MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
}
return $mysqli;