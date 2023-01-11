<!DOCTYPE html>
<html lang="es">
<head>
  <title>Eliminar producto</title>
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

require('conexionBD.php');

$cod = $_POST['codigo'];


$consulta = "SELECT * FROM producto WHERE codigoproducto=$cod";
$resultado = mysqli_query($conexion, $consulta);

if (mysqli_num_rows($resultado) > 0) {
    while($row = mysqli_fetch_assoc($resultado)) {

$eliminar = "DELETE FROM producto WHERE codigoproducto=$cod";

if (mysqli_query($conexion, $eliminar)) {

?>

  
    <div class="modal-dialog">
      <div class="modal-content">
      
        
        <div class="modal-header">
          <h4 class="modal-title">Producto eliminado</h4>
          <button class="close" onclick="location.href='../index.html'">&times;</button>
        </div>
        
        
        <div class="modal-body">
          
 		<?php
        echo "Se ha eliminado el producto de manera exitosa";
		?>


        </div>
        
        
        <div class="modal-footer">
          <button class="btn btn-danger" onclick="location.href='../index.html'">Cerrar</button>
        </div>
        
      </div>
    </div>
 <?php

} else {

?>


  
    <div class="modal-dialog">
      <div class="modal-content">
      
       
        <div class="modal-header">
          <h4 class="modal-title">Error</h4>
          <button class="close" onclick="location.href='../index.html'">&times;</button>
        </div>
        
        
        <div class="modal-body">
          
 		<?php
           echo "Error eliminando el producto: <br> " . mysqli_error($conexion);
		?>


        </div>
        
        
        <div class="modal-footer">
          <button class="btn btn-danger" onclick="location.href='../index.html'">Cerrar</button>
        </div>
        
      </div>
    </div>



 <?php


}


    }


} else {


?>


  
    <div class="modal-dialog">
      <div class="modal-content">
      
       
        <div class="modal-header">
          <h4 class="modal-title">Producto no encontrado</h4>
          <button class="close" onclick="location.href='../index.html'">&times;</button>
        </div>
        
       
        <div class="modal-body">
          
 		<?php
           echo "El código ingresado no existe en la base de datos. <br> ";
		?>


        </div>
        
        
        <div class="modal-footer">
          <button class="btn btn-danger" onclick="location.href='../index.html'">Cerrar</button>
        </div>
        
      </div>
    </div>



 <?php

}

mysqli_close($conexion);
?> 