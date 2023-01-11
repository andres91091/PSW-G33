<?php
//creacion variables -- create 
$servidor = "localhost";
$nombreusuario = "root";
$contrasenia = "12345678";

// Crear conexion a base de datos  -- Create connection database
$conexion = mysqli_connect($servidor, $nombreusuario, $contrasenia);

// Verificando conexion --Check connection
if (!$conexion) {
    die("Conexión fallida: " . mysqli_connect_error());
}

// Creando base de datos --Create database
$basedatos = "CREATE DATABASE bd_electronic";
if (mysqli_query($conexion, $basedatos)) {
    echo "La base de datos ha sido creada de manera exitosa ";
} else {
    echo "Hubo un error creando la base de datos " . mysqli_error($conexion);
}

mysqli_close($conexion);
?> 