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
    <div class="row">
      <div class="btn border-info bg-success text-white mt-4 shadow-sm  col-2">
        <?php 
          echo $_SESSION["nombre"]
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
  </div>
<hr>
  <div class="form-floating input-group mt-1 justify-content-center align-items-center">
    <H2>Relacione los datos personales del Usuario.</H2>
  </div>

  <div class="d-flex justify-content-center align-items-center vh-800">
    <div class=" p-5 rounded-5 text-secondary shadow" style="width: 50rem">

      <!-- inicio formulario -->
      <form action="#" method="post">
        <div class="form-floating input-group mt-4">
          <input class=" form-control bg-light" name="dniCode" type="text" id="dniInput" placeholder="" />
          <label for="dniInput" class="form-label px-5">Identificación</label>
        </div>

        <div class="form-floating input-group mt-4">
          <input class=" form-control" name="apName" type="text" id="apName" placeholder="" />
          <label for="apName" class="form-label px-5">Nombre</label>
        </div>

        <div class="form-floating input-group mt-4">
          <input class=" form-control bg-light" name="fichaInput" type="text" id="ficha" placeholder="" />
          <label for="ficha" class="form-label px-5">Id Ficha</label>
        </div>

        <div class="form-floating input-group mt-4">
          <input class=" form-control" name="mailInput" type="text" id="eMail" placeholder="" />
          <label for="eMail" class="form-label px-5">E-mail</label>
        </div>

        <div class="form-floating input-group mt-4">
          <select class="form-select bg-light" name="elements" id="selectr">
            <option value="1">Aprendíz</option>
            <option value="2">Instructor</option>
            <option value="3">Administrativo</option>
            <option value="4">Contratista</option>
            <option value="5">otro</option>
          </select>
          <label for="eMail" class="form-label px-5">Rol</label>
        </div>
      </form>
    </div>
  </div>

  <div class="form-floating input-group mt-4 justify-content-center align-items-center">
    <H2>Relacione los elementos a entregar...</H2>
  </div>

  <div class="container-fluid d-flex justify-content-center align-items-center input-group mb-3">
    <div class="mb-3 input-group-prepend">
      <span class="bg-primary text-white p-2 rounded" for="selectr" type="text">Para comenzar seleccione una categoría de
        Elemento a ingresar.</span>

      <!-- size="3" para tipo scroll bar-->
      <select class="form-select" name="elements" id="selectr">
        <option value="1">Cabeza</option>
        <option value="2">Ojos</option>
        <option value="3">Oidos</option>
        <option value="4">Respiratorio</option>
        <option value="5">cuerpo</option>
        <option value="6">Manos</option>
        <option value="7">Pies</option>
      </select>
    </div>
  </div>



  <div class="d-flex justify-content-center align-items-center vh-100">
    <div class=" p-5 rounded-5 text-secondary shadow" style="width: 50rem">

      <!-- inicio formulario -->
      <form action="#" method="post">
        <div class="form-floating input-group mt-4">
          <input class=" form-control bg-light" name="elmCode" type="text" id="codeInput" placeholder="" />
          <label for="codeInput" class="form-label px-5">Código de Elemento</label>
        </div>

        <div class="form-floating input-group mt-4">
          <select class="form-select" name="elements" id="selectr">
            <option value="1">Nombre de elemnto</option>
            <option value="2">Botas Puntera</option>
            <option value="3">Tapa</option>
            <option value="4">Oidos</option>
            <option value="5">Respiratorio</option>
            <option value="6">cuerpo</option>
            <option value="7">Manos</option>
            <option value="8">Pies</option>
          </select>
          <!-- <label for="mailInput" class="form-label px-5">Nombre</label> -->
        </div>

        <div class="form-floating input-group mt-4">
          <select class="form-select bg-light" name="elements" id="selectr">
            <option value="1">Marca</option>
            <option value="2">Cabeza</option>
            <option value="3">Ojos</option>
            <option value="4">Oidos</option>
            <option value="5">Respiratorio</option>
            <option value="6">cuerpo</option>
            <option value="7">Manos</option>
            <option value="8">Pies</option>
          </select>
        </div>

        <div class="form-floating input-group mt-4">
          <select class="form-select" name="elements" id="selectr">
            <option value="1">Talla</option>
            <option value="2">Cabeza</option>
            <option value="3">Ojos</option>
            <option value="4">Oidos</option>
            <option value="5">Respiratorio</option>
            <option value="6">cuerpo</option>
            <option value="7">Manos</option>
            <option value="8">Pies</option>
          </select>
        </div>

        <div class="form-floating input-group mt-4">
          <select class="form-select bg-light" name="elements" id="selectr">
            <option value="1">Color</option>
            <option value="2">Cabeza</option>
            <option value="3">Ojos</option>
            <option value="4">Oidos</option>
            <option value="5">Respiratorio</option>
            <option value="6">cuerpo</option>
            <option value="7">Manos</option>
            <option value="8">Pies</option>
          </select>
        </div>

        <div class="form-floating input-group mt-4">
          <input class=" form-control" name="cantidad" type="number" id="amount" placeholder="" />
          <label for="amount" class="form-label px-5">Cantidad</label>
        </div>

        <div class="form-floating input-group mt-4">
          <textarea class=" form-control bg-light" name="obsrvn" type="text" id="obsrvn" placeholder=""></textarea>
          <label for="obsrvn" class="form-label px-5">Observaciones</label>
        </div>

        <div class="row">
          <div class="col-6">
            <button class="btn btn-info text-white w-100 mt-4 fw-semibold shadow-sm" 
            type="submit">Asignar más elementos a este Usuario</button>
          </div>
  
          <div class="col-6">
            <button class="btn btn-info text-white w-100 mt-4 fw-semibold shadow-sm" 
            type="submit">Finalizar </button>
          </div>
        </div>

      </form>
      <!-- fin de formulario -->
    </div>
  </div>

<!-- Script para los elementos select -->
<script type="text/javascript">
	$(document).ready(function(){
		$('#dniCode').val(1);
		recargarLista();

		$('#dniCode').change(function(){
			recargarLista(); 
		});
	})
</script>

<script type="text/javascript">
	function recargarLista(){
		$.ajax({
			type:"POST",
			url:"../controllers/addElements.controller.php",
			data:"categoria=" + $('#dniCode').val(),
			success:function(r){
				$('#select2lista').html(r);
			}
		});
	}
</script>

</body>

</html>