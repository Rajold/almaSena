<?php
include ("dbConection.php");

//Agregar datos a la bd 
if (!empty($_POST["btnAdd"])) {
  if (!empty($_POST["listaCant"])) { 
           
      $id= $_GET["idL"];
      $cant= $_POST["listaCant"];
      $not= $_POST["listaNota"];
            
      $sql= $conexion->query ("UPDATE elementos AS e, categorias AS c, tallas AS t SET e.existencias= '$cant' WHERE e.idElemento= '$id' ");

      if ($sql==1) {
          header ("Location:../views/entradas.php");
          echo '<div class="alert alert-success text-center"><strong>Elementos agregados.</strong></div>';
           
        } else {
          header ("Location:../views/entradas.php");
          echo '<div class="alert alert-danger text-center"><strong>ERROR No se agregaron los elementos.</strong></div>';
      }
       
      }else {
      echo '<div class="alert alert-warning text-center"><strong>Todos los campos son obligatorios.</strong></div>';
      
      }
}          
 
?>