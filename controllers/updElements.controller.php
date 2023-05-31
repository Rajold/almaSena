<?php 
if (!empty($_POST['btnUpd'])){
    if (!empty($_POST['inputCat'])
    AND !empty($_POST['inputName']) 
    AND !empty($_POST['inputTalla']) 
    AND !empty($_POST['inputMarca'])
    AND !empty($_POST['inputColor'])
    AND !empty($_POST['inputExists'])){
     
    $Id= $_POST['inputId'];  
    $Cat= $_POST['inputCat'];
    $Name= $_POST['inputName'];
    $Talla= $_POST['inputTalla'];
    $Marca= $_POST['inputMarca'];
    $Color= $_POST['inputColor'];
    $Exists= $_POST['inputExists'];
    $Nota= $_POST['inputNota'];

    
    $sqlT= $conexion->query("SELECT * FROM elementos AS e, tallas AS t, categorias AS c WHERE e.idElemento= '$id'");
    while ($dataFk= $sqlT->fetch_object()) {
      $idTalla= $dataFk->fkTalla;
      $idCategoria= $dataFk->fkCategoria;
    
   
    
  }
  echo $idCategoria."\n";
  echo $idTalla;

  $sqlVar= $conexion->query("UPDATE elementos AS e 
    SET e.fkCategoria='$idCategoria', e.elemento= '$Name', e.fkTalla= '$idTalla', e.marca= '$Marca', e.color= '$Color', e.existencias= '$Exists', e.observacion='$Nota' 
    WHERE idElemento='$Id' "); 
    }else {
        echo '<div class="alert alert-warning text-center"><strong>Todos los campos son obligatorios.</strong></div>';
    }
}
?>