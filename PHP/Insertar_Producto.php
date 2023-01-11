<!DOCTYPE html>
<html lang="es">
<head>
  <title>Ingresar productos</title>
    <title>Ingresar productos</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</head>
</head>
<body>



 <?php

require('ConexionBD.php');

$codpro = $_POST['codigo'];
$nompro = $_POST['nombreproducto'];
$marpro = $_POST['marcaproducto'];
$prepro = $_POST['precioproducto'];
$canpro = $_POST['cantidadproducto'];



$tabla = "INSERT INTO producto (codigoproducto, nombreproducto, marcaproducto, preciocompra, cantidadproducto) VALUES ('$codpro', '$nompro', '$marpro', '$prepro','$canpro')";

if (mysqli_query($conexion, $tabla)) {
 
?>

  
    <div class="modal-dialog">
      <div class="modal-content">
      
        
        <div class="modal-header">
          <h4 class="modal-title">Registro Exitoso</h4>
          <button class="close" onclick="location.href='../ingresarproducto.html'">&times;</button>
        </div>
        
        
        <div class="modal-body">
          Se ha registrado el producto exitosamente.
        </div>
        
        
        <div class="modal-footer">
          <button class="btn btn-danger" onclick="location.href='../ingresarproducto.html'">Cerrar</button>
        </div>
        
      </div>
    </div>



 <?php
} else 
{



?>


  
    <div class="modal-dialog">
      <div class="modal-content">
      
       
        <div class="modal-header">
          <h4 class="modal-title">Registro fallido</h4>
          <button class="close" onclick="location.href='../ingresarproducto.html'">&times;</button>
        </div>
        
       
        <div class="modal-body">
          <?php
          echo "Error registrando el producto: <br>" . $sql . "<br>" . mysqli_error($conexion);
          ?> 

        </div>

        
      
        <div class="modal-footer">
          <button class="btn btn-danger" onclick="location.href='../ingresarproducto.html'">Cerrar</button>
        </div>
        
      </div>
    </div>



 <?php


}

mysqli_close($conexion);

?> 