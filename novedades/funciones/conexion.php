<?php


$servername = "localhost";
$database = "goldenbike";
$username = "root";
$password = "";

// Creando  conexion
$conexion = mysqli_connect($servername, $username, $password, $database);
// chequea la conexion
if (!$conexion) {
    die("Conexion fallida: " . mysqli_connect_error());
}


?>