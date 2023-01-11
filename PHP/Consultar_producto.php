<!DOCTYPE html>
<html lang="es">
<head>
  <title>Consultar</title>
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

$sql = "SELECT * FROM producto WHERE codigoproducto=".$codpro;

$result = mysqli_query($conexion, $sql);


// $result = mysqli_query($conexion, "SELECT  FROM tabla33 WHERE id='2'");


if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {



?>

<!-- The Modal -->
  
    <div class="modal-dialog">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">Datos</h4>
          <button class="close" onclick="location.href='../consultarproducto.html'">&times;</button>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">
          
 		<?php
        echo "Codigo: " . $row["codigoproducto"]
        . "<br> Nombreproducto: " . $row["nombreproducto"]
        . "<br> Marcaproducto: " . $row["marcaproducto"]
        . "<br> Precioproducto: ". $row["preciocompra"]
        . "<br> Cantidadproducto". $row["cantidadproducto"] 
        . "". "<br>";
        
		?>


        </div>
        
        <!-- Modal footer -->
        <div class="modal-footer">
          <button class="btn btn-danger" onclick="location.href='../consultarproducto.html'">Cerrar</button>
        </div>
        
      </div>
    </div>



 <?php


        
//$myJSON = json_encode($row);

//echo $myJSON;

    }


} else {



?>

<!-- The Modal -->
  
    <div class="modal-dialog">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">Error</h4>
          <button class="close" onclick="location.href='../consultarproducto.html'">&times;</button>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">
          
 		<?php
        echo "Esa producto no existe " . "<br>";
		?>


        </div>
        
        <!-- Modal footer -->
        <div class="modal-footer">
          <button class="btn btn-danger" onclick="location.href='../consultarproducto.html'">Cerrar</button>
        </div>
        
      </div>
    </div>



 <?php


}

mysqli_close($conexion);
?> 