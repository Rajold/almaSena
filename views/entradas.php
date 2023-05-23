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

  <script>
    function showDiv1() {
      document.getElementById('div1').style.display = '';
      document.getElementById('div2').style.display = 'none';
      document.getElementById('div3').style.display = 'none';
    }

    function showDiv2() {
      document.getElementById('div1').style.display = 'none';
      document.getElementById('div2').style.display = '';
      document.getElementById('div3').style.display = 'none';
    }
    function showDiv3() {
      document.getElementById('div1').style.display = 'none';
      document.getElementById('div2').style.display = 'none';
      document.getElementById('div3').style.display = '';
    }
  </script>
</head>

<body class="vh-100">
  
  <!-- Tabs-Pestañas  -->
  <div class="container-fluid">
    <div class="row">
      <div class="btn border-info bg-success-subtle mt-4 shadow-sm col-2">
        <?php 
          echo $_SESSION["nombre"]
        ?>
      </div>
      <div class="col-9 justify-content-center">
        <ul class="nav nav-tabs ">
          <li class="nav-item">
            <p class="nav-link active">Entradas</p>
          </li>
          <li class="nav-item">
            <a class="nav-link border-primary-subtle bg-info-subtle" href="salidas.php">Salidas</a>
          </li>
          <li class="nav-item">
            <a class="nav-link border-primary-subtle bg-info-subtle" href="cambios.php">Cambios</a>
          </li>
        </ul>
      </div>
      <!-- Salir-LogOut -->
      <div class="col-1">
        <div>
          <button class="btn btn-danger w-100 mt-4 shadow-sm "><a class="text-decoration-none text-white"
              href="../controllers/logout.php">Salir</a></button>
          <i class="bi bi-box-arrow-left"></i>
        </div>
      </div>
    </div>

    <hr>


    <!-- Contenedor formulario -Form container -->
<div class="container-fluid">
	<div class="row">
		<!-- Formulario de adición -->
	<div class="col-3">
				<!-- Título-Title -->
		<div class="w-100 d-flex justify-content-center align-items-center border-primary mb-3">
        	<span class="bg-danger text-white p-2 rounded" for="selectr" type="text">
				Agregar elementos al inventario.</span>
    	</div>
		<div class="input-group mb-3">
			<span class="input-group-text bg-success-subtle border-primary" id="">Categoría</span>
			<select class="form-select pe-5 border-primary" name="elementoTipo" id="">
              <option value="Elija uno"></option>
              <option value="1" onclick="showDiv1()">Protección de la cabeza</option>
              <option value="2" onclick="showDiv2()">Protección visual</option>
              <option value="3" onclick="showDiv3()">Protección auditiva</option>
              <option value="4">Respiratorio</option>
              <option value="5">Prendas</option>
              <option value="6">Calzado</option>
            </select>
		</div>

		<div class="input-group mb-3">
			<span class="input-group-text bg-success-subtle border-primary" id="">Nombre</span>
			<input 	type="text" class="form-control border-primary" placeholder="del elemento"
					aria-label="Nombre del elemento" aria-describedby="basic-addon2">
		</div>

		<div class="input-group mb-3">
			<span class="input-group-text bg-success-subtle border-primary" id="">Talla</span>
			<input type="text" class="form-control border-primary" id="basic-url">
			<span class="input-group-text bg-success-subtle border-primary">Marca</span>
			<input type="text" class="form-control border-primary">
		</div>

		<div class="input-group mb-3">	
			<span class="input-group-text bg-success-subtle border-primary">Color</span>
			<input type="text" class="form-control border-primary">
			<span class="input-group-text bg-success-subtle border-primary">Existencias</span>
			<input type="text" class="form-control border-primary">
		</div>

		<div class="input-group">
			<span class="input-group-text bg-success-subtle border-primary">Nota:</span>
			<textarea class="form-control border-primary" aria-label="With textarea"></textarea>
		</div>
	</div>
			<!-- Listado de elementos -->
	<div class="col-9">
		<table class="table table-bordered border-primary">
			<thead class="bg-info">
				<tr>
					<th scope="col">Categoría</th>
					<th scope="col">Elemento</th>
					<th scope="col">Talla</th>
					<th scope="col">Marca</th>
					<th scope="col">Color</th>
					<th scope="col">Existencias</th>
					<th scope="col">Observación</th>
					<th scope="col">Edición</th>
				</tr>
			</thead>
<tbody>
	<?php
		include ("../controllers/dbConection.php");

		$sqlElm= $conexion->query("SELECT * FROM elementos");
		while($tableData= $sqlElm->fetch_object()) {
			?>
			<tr>
				<td><?= $tableData->fkCategoria?></td>
				<td><?= $tableData->elemento?></td>
				<td><?= $tableData->fkTalla?></td>
				<td><?= $tableData->marca?></td>
				<td><?= $tableData->color?></td>
				<td><?= $tableData->existencias?></td>
				<td><?= $tableData->observacion?></td>
				<td>
				<a class="btn btn-small btn-success" name="btnAdd" href=""><svg
						xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
						class="bi bi-file-plus-fill" viewBox="0 0 16 16">
						<path
							d="M12 0H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2zM8.5 6v1.5H10a.5.5 0 0 1 0 1H8.5V10a.5.5 0 0 1-1 0V8.5H6a.5.5 0 0 1 0-1h1.5V6a.5.5 0 0 1 1 0z" />
					</svg>
				</a>
				<a class="btn btn-small btn-warning" name="btnEdit" href=""><svg
						xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
						class="bi bi-pencil-square" viewBox="0 0 16 16">
						<path
							d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z" />
						<path fill-rule="evenodd"
							d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z" />
					</svg>
				</a>
				<a class="btn btn-small btn-danger" name="btnDelete" href=""><svg
						xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
						class="bi bi-trash" viewBox="0 0 16 16">
						<path
							d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5Zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5Zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6Z" />
						<path
							d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1ZM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118ZM2.5 3h11V2h-11v1Z" />
					</svg>
				</a>
				<a class="btn btn-small btn-primary" name="btnUpdt" href=""><svg
						xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
						class="bi bi-arrow-clockwise" viewBox="0 0 16 16">
						<path fill-rule="evenodd"
							d="M8 3a5 5 0 1 0 4.546 2.914.5.5 0 0 1 .908-.417A6 6 0 1 1 8 2v1z" />
						<path
							d="M8 4.466V.534a.25.25 0 0 1 .41-.192l2.36 1.966c.12.1.12.284 0 .384L8.41 4.658A.25.25 0 0 1 8 4.466z" />
					</svg>
				</a>

				</td>
			</tr>
						<?php } ?>
					</tbody>
				</table>
			</div>
		</div>
	</div>

	<hr>
        <!-- fin de formulario -->
      </div>
    </div>
  </div>



</body>

</html>