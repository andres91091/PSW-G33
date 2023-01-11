 <?php
 //codigo para crear la tabla haciendo conexion desde aqui
// $servidor = "localhost";
// $nombreusuario = "root";
// $contrasenia = "12345678";
// $nombreBD = "bdunad33";

// // Crear conexion --Create connection
// $conexion = mysqli_connect($servidor, $nombreusuario, $contrasenia, $nombreBD);
// // Verificando conexion --Check connection
// if (!$conexion) {
//     die("Connection failed: " . mysqli_connect_error());
// }

// Creando tabla en sql  --sql to create table

require('conexionBD.php');

$tabla = "CREATE TABLE producto (
codigoproducto INT(20) PRIMARY KEY,
nombreproducto VARCHAR(50),
marcaproducto VARCHAR(50),
preciocompra INT(10),
cantidadproducto INT(10)
)";

if (mysqli_query($conexion, $tabla)) {
    echo "Tabla productos creada exitosamente";
    ?> 
    <button type="submit" class="btn btn-info" style="width: 180px; margin-left: 50%;transform: translateX(-50%);color: #180A0A;">Volver</button>
    <?php
} else {
    echo "Error creando la tabla productos" . mysqli_error($conexion);
}

mysqli_close($conexion);
?> 