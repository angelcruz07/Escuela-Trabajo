<?php 
//Codigo de conexion a la base de datos

$server = "Localhost";
$user = "root";
$password = "";
$database = "school"; 

$mysqli = new mysqli($server,$user,$password,$databse); 

if ($mysqli->connect_errno) {
    echo "Fallo en la conexión: " . $mysqli->connect_errno . " (" . $mysqli->connect_error . ")";
}

?>