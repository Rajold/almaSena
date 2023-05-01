<?php
    session_start();
    $name= $_SESSION['usuario'];

    if(!isset ($_SESSION['usuario'])){
        header("Location:../index.php");
    }
    if($_SESSION['rol'] == "user") {
        header("Location:../views/salidas.html");
    }if($_SESSION['rol'] == "admin") {
        header("Location:../views/administracion.html");
    }
    echo "<H1>Hi $name </H1>";
    //echo $_SESSION['rol'];
    echo "<a href='../controllers/logout.php'>Cerrar Sesión</a>";

    

?>