<?php
include ("dbConection.php");
include ("captura.controller.php");

//Agregar datos a la bd 
if (!empty($_POST["btnAdd"])) {
  if (!empty($_POST["listaCat"]) 
    //and !empty($_POST["select2lista"]) 
    and !empty($_POST["listaCant"])) 
    {
      $imp= $col;
      $cant= $_POST["listaCant"];
      $not= $_POST["listaNota"];
            
      $sql= $conexion->query ("UPDATE elementos AS e, categorias AS c, tallas AS t SET e.existencias= '$cant' WHERE e.idElemento= '$imp[0]' ");

      if ($sql==1) {
          echo '<div class="alert alert-success text-center"><strong>Elementos agregados.</strong></div>';
          // header ("Location:../views/entradas.php"); 
      } else {
          echo '<div class="alert alert-danger text-center"><strong>ERROR No se agregaron los elementos.</strong></div>';
      }
            
      }else {
      echo '<div class="alert alert-warning text-center"><strong>Todos los campos son obligatorios.</strong></div>';
    }
}          
 
?>