<?php
    session_start();
    include("./dbConection.php");

    $elementName=               $_POST['elementoTipo'];
    // $elementMarc=               $_POST['elementoMarca'];
    // $elementSize=               $_POST['elementoTalla'];
    // $elementColor=              $_POST['elementoColor'];
    // $elementAmount=             $_POST['elementoCantidad'];
    // $elementNote=               $_POST['elementoNota'];

    // var_dump($elementName);

    $sql= "SELECT * FROM categorias WHERE idCategoria= '$elementName' ";


    $resultado= mysqli_query($conexion, $sql);
    // var_dump($resultado);
    // var_dump($resultado->num_rows);

    while($row= mysqli_fetch_array($resultado)) {
        $catId_db=    $row['idCategoria'];
        $catName_db=   $row['nombreCat'];
    }
    
// var_dump($catId_db);
// var_dump($catName_db);
    
   $elemByCat= "SELECT * FROM elementos WHERE fkCategoria= '$catId_db'";
    $returnData= mysqli_query($conexion, $elemByCat);

    while($resRow= mysqli_fetch_array($returnData)) {
        $elemId_db= $resRow['elemento'];
        $elemCat_db= $resRow['fkCategoria'];
    }

   var_dump($elemId_db);
   var_dump($elemCat_db);

?>