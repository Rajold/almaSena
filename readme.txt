$sqlCat= $conexion->query("SELECT * FROM categorias where idCategoria='$tableData->fkCategoria'");
var_dump($sqlCat->nombreCat);
echo $sqlCat["nombreCat"]

$sqlCat= $conexion->query("SELECT * FROM categorias where idCategoria='$tableData->fkCategoria'");
echo $sqlCat["nombreCat"]=$sqlCat->nombreCat;