<?php
//creacion variables -- create 
$servidor = "localhost";
$nombreusuario = "root";
$contrasenia = "12345678";
$nombreBD = "bd_electronic";

// Crear conexion a base de datos  -- Create connection database
$conexion = mysqli_connect($servidor, $nombreusuario, $contrasenia, $nombreBD);

// Verificando conexion --Check connection
if (!$conexion) {
    die("Conexión fallida: " . mysqli_connect_error());
}
?> 