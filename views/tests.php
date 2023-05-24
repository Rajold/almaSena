<!DOCTYPE html>
<html lang="es">

<head>
	<link rel="stylesheet" href="./tests.css">
	<link rel="stylesheet" href="../csss/bootstrap/css/bootstrap.min.css">
	<link rel="shortcut icon" href="../assets/senaGreen.png" type="image/x-icon">
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

<body>
	<input type="submit" value="Seguros para perros" onclick="showDiv1()">
	<a> | </a><br><input type="submit" value="Seguros para gatos" onclick="showDiv2()">
	<a> | </a><br><input type="submit" onclick="showDiv3()" value="Seguros para otros">
	<br>
	<div class="div1" id="div1" style="">
		
	</div>
	<div class="div2" id="div2" style="display: none">
		Seguro para gatos<br>
		Seguro1 <br>
		Seguro no ole!<br>
		Seguro3
	</div>
	<div class="div3" id="div3" style="display: none">
		Seguro que si otros<br>
		Segurolas Sam <br>
		Seguro3
	</div>

	<hr>

	<div class="container-fluid">
		<div class="row">
			<!-- Formulario de adición -->
			<div class="col-3">
				<div class="input-group mb-3">
					<span class="input-group-text bg-info border-primary" id="">Categoría</span>
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
					<span class="input-group-text bg-info border-primary" id="">Nombre</span>
					<input type="text" class="form-control border-primary" placeholder="del elemento"
						aria-label="Nombre del elemento" aria-describedby="basic-addon2">
				</div>

				<div class="input-group mb-3">
					<span class="input-group-text bg-info border-primary" id="">Talla</span>
					<input type="text" class="form-control border-primary" id="basic-url">
					<span class="input-group-text bg-info border-primary">Marca</span>
					<input type="text" class="form-control border-primary">
				</div>

				<div class="input-group mb-3">	
					<span class="input-group-text bg-info border-primary">Color</span>
					<input type="text" class="form-control border-primary">
					<span class="input-group-text bg-info border-primary">Existencias</span>
					<input type="text" class="form-control border-primary">
				</div>

				<div class="input-group">
					<span class="input-group-text bg-info border-primary">Nota:</span>
					<textarea class="form-control border-primary" aria-label="With textarea"></textarea>
				</div>
			</div>
			


</body>

</html>