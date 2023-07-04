<?php
session_start();
if (empty($_SESSION['id'])) {
  header("Location:../index.php");
}
?>
<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="shortcut icon" href="../assets/senaGreen.png" type="image/x-icon">
  <link rel="stylesheet" href="../csss/bootstrap/css/bootstrap.min.css">
  <title>Movimientos</title>
</head>

<body>
  <div class="container-fluid">
    
    <div class="row">
      <div class="btn border-info bg-success text-white mt-4 shadow-sm  col-2">
        <?php 
          echo $_SESSION["nombre"]
        ?>
        <?php
$conexion=mysqli_connect("localhost","root","","almasenadb"); 
$where="";

if(isset($_GET['enviar'])){
  $busqueda = $_GET['busqueda'];


	if (isset($_GET['busqueda']))
	{
		$where="WHERE user.correo LIKE'%".$busqueda."%' OR nombre  LIKE'%".$busqueda."%'
    OR telefono  LIKE'%".$busqueda."%'";
	}
  
}
?>
      </div>

      <div class="col-9">
        <ul class="nav nav-tabs">
          <li class="nav-item">
            <a class="nav-link nav-link border-primary-subtle bg-info-subtle" aria-current="page" href="entradas.php">Entradas</a>
          </li>
          <li class="nav-item">
            <p class="nav-link active">Salidas</p>
          </li>
          <li class="nav-item">
            <a class="nav-link nav-link border-primary-subtle bg-info-subtle" href="cambios.php">Cambios</a>
          </li>
          <li class="nav-item">
            <a class="nav-link nav-link border-primary-subtle bg-info-subtle" href="usuariosGestionar.php">Gestionar Usuarios Cliente</a>
          </li>
        </ul>
      </div>
      <div class="col-1">
        <div>
          <button class="btn btn-danger w-100 mt-4 shadow-sm "><a class="text-decoration-none text-white"
              href="../controllers/logout.php">Salir</a></button>
          <i class="bi bi-box-arrow-left"></i>
        </div>
      </div>
    </div>
  
<hr>
  <div class="form-floating input-group mt-1 justify-content-center align-items-center">
    <H2>Relacione los elementos para la entrega</H2>
  </div>
<div class="container-fluid row">
  
    <div class="col-8  p-5 rounded-5 text-secondary shadow" >

<!-- Buscar elemento -->
<form class="d-flex">
      <input class="form-control me-2 light-table-filter" data-table="table_id" type="text" 
      placeholder="Buscar elemento para nueva entrega">
      <hr>
</form>
      <br>

 
      <table class="table table-striped table_id ">

                   
                         <thead>    
                         <tr>
                        <th>Categoría</th>
                        <th>Elemento</th>
                        <th>Talla</th>
                        <th>Marca</th>
                        <th>Color</th>
                        <th>Existencias</th>
                        <th>Observación</th>
                        <th>Añadir a lista</th>
                        </tr>
                        </thead>
                        <tbody>

                        <?php

$conexion=mysqli_connect("localhost","root","","almasenadb");               
$SQL="SELECT * FROM elementos as e, categorias as c, tallas
as t where e.fkCategoria=c.idCategoria AND e.fkTalla=t.idTalla
$where";
$dato = mysqli_query($conexion, $SQL);

if($dato -> num_rows >0){
    while($fila=mysqli_fetch_array($dato)){
    
?>
<tr>
<td><?php echo $fila['nombreCat']; ?></td>
<td><?php echo $fila['elemento']; ?></td>
<td><?php echo $fila['tallas']; ?></td>
<td><?php echo $fila['marca']; ?></td>
<td><?php echo $fila['color']; ?></td>
<td><?php echo $fila['existencias']; ?></td>
<td><?php echo $fila['observacion']; ?></a></td>
<td><a class="text-black text-uppercase text-decoration-none" href="salidasPage2.php?id=<?= $fila['idElemento']?>">Check</a></td>
</tr>

<?php
}
}else{
    ?>
    <tr class="text-center">
    <td colspan="16">No existen registros</td>
    </tr>
    <?php
}

?>
    </div>
    <div >
      <div class="canasta col-1"><p>test text</p></div>
    </div>
    
  </div>

<script src="../js/acciones.js"></script>
<script src="../js/buscador.js"></script>

</body>

</html>