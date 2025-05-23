<?php 
$SERVER= "localhost";
$USER= "root";
$PASSWORD= "";
$DATABASE= "almasenadb";

$conexion= mysqli_connect($SERVER, $USER, $PASSWORD, $DATABASE);

if ($conexion-> connect_errno) {
   die("error de conexión... ".$conexion-> connect_errno);
}else {
    echo "Conectado";
}
?>