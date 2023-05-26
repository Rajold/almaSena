<?php
include ("../controllers/dbConection.php");

$categoria=$_POST['categoria'];

$sql="SELECT * FROM elementos as e, categorias as c, tallas AS t where e.fkCategoria=c.idCategoria AND e.fkTalla= t.idTalla AND fkCategoria='$categoria'";

$resultado=mysqli_query($conexion,$sql);

$cadena="<span class='input-group-text bg-success-subtle border-primary'>Elemento</span>
			<select class='form-select pe-5 border-primary' id='lista2' name='lista2'>";

            while ($ver=mysqli_fetch_row($resultado)) {
                $cadena=$cadena.'<option value='.$ver[0].'>'.utf8_encode($ver[3])." ".utf8_encode($ver[11]).'</option>';
            }   
            echo  $cadena."</select>";       

?>