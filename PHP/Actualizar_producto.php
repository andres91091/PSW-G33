<!DOCTYPE html>
<html lang="es">
<head>
  <title>Actualizar</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</head>
<body style="background-color: #FFF5E4">
<div class="container mt-3" style="background-color: #EE6983">
  <h2 style="color:#180A0A ;">Electronic SAS</h2>
  <ul class="nav nav-tabs">
  <li class="nav-item active">
        <a class="nav-link" href="../index.html" style="color:#711A75">Inicio <span class="sr-only">(current)</span></a>
      </li>   
    <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" id="navbarDropdown" style="color:#711A75" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Administrador
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="PHP/Crear_Base_Datos.php">Crear Base de Datos</a>
          <a class="dropdown-item" href="PHP/Crear_Tabla.php">Crear tabla</a>
          <a class="dropdown-item" href="PHP/Backup">Eliminar producto</a>
          <a class="dropdown-item" href="../consultarproducto.html">Consultar producto</a>
        </div>
      </li>
    <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" id="navbarDropdown" style="color:#711A75" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Inventarios
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="../ingresarproducto.html">Ingresar producto</a>
          <a class="dropdown-item" href="../actualizarproducto.html">Actualizar producto</a>
          <a class="dropdown-item" href="../eliminarproducto.html">Eliminar producto</a>
          <a class="dropdown-item" href="../consultarproducto.html">Consultar producto</a>
        </div>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" id="navbarDropdown" style="color:#711A75" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Utilidades
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="../calcularcompra.html">Calcular compra</a>
          <a class="dropdown-item" href="../conversorgigas.html">Calcular medida</a>
        </div>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="../info.html" style="color:#711A75">Acerca de mi<span class="sr-only">(current)</span></a>
      </li> 
  </ul>
</div>
<br><br>
 <?php

require('conexionBD.php');

$cod = $_POST['codigo'];
$consulta = "SELECT * FROM producto WHERE codigoproducto=".$cod;
$resultado = mysqli_query($conexion, $consulta);

if (mysqli_num_rows($resultado) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($resultado)) {

      ?>

<div class="container" style="width: 500px;background-color: #EE6983;">
    <h2 style="color:#850E35;">Actualizar productos </h2>
  <form action="Actua_pro2.php" method="POST">
    <div class="form-group">
      <label>Codigo del producto:</label>
      <input type="int" class="form-control" value=" <?php echo $row['codigoproducto'] ?> " id="codigoproducto" placeholder="Ingrese código" name="codigoproducto" readonly>
    </div>
    <div class="form-group">
      <label>Nombre del producto:</label>
      <input type="text" class="form-control" value=" <?php echo $row['nombreproducto'] ?> " id="nombreproducto" placeholder="Ingrese aquí nombre del producto" name="nombreproducto"readonly>
    </div>
    <div class="form-group">
      <label>Marca del producto:</label>
      <input type="text" class="form-control" value=" <?php echo $row['marcaproducto'] ?> " id="Marcaproducto" placeholder="Ingrese aquí la marca del producto" name="marcaproducto"readonly>
    </div>
    <div class="form-group">
      <label>Precio del producto:</label>
      <input type="int" class="form-control" value=" <?php echo $row['preciocompra'] ?> " id="preciocompra" placeholder="Ingrese aquí el precio del producto" name="preciocompra">
    </div>
    <div class="form-group">
      <label>Cantidad del producto:</label>
      <input type="int" class="form-control" value=" <?php echo $row['cantidadproducto'] ?> " id="cantidadproducto" placeholder="Ingrese aquí la cantidad del producto" name="cantidadproducto">
    </div>
    <button type="submit" class="btn btn-primary">Actualizar</button>
  </form>
</div>
<br><br>
  <footer style="color: black;">Andres Vargas 10/01/2023</footer>

  <?php

    }


} else {



?>

<!-- The Modal -->
  
    <div class="modal-dialog">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">Error</h4>
          <button class="close" onclick="location.href='../index.html'">&times;</button>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">
          
 		<?php
        echo "Ese producto no existe " . mysqli_error($conexion);
		?>


        </div>
        
        <!-- Modal footer -->
        <div class="modal-footer">
          <button class="btn btn-danger" onclick="location.href='../index.html'">Cerrar</button>
        </div>
        
      </div>
    </div>
   


 <?php


}

mysqli_close($conexion);
?> 