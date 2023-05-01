<?php
    session_start();
    include("./dbConection.php");

    $correo= $_POST['email'];
    $contrasena= $_POST['password'];

    $sql= "SELECT * FROM usuarios WHERE email= '$correo' AND password= '$contrasena'";

    $resultado= mysqli_query($conexion, $sql);
    //var_dump($result);
    //var_dump($result->num_rows);

    while($row= mysqli_fetch_array($resultado)) {
        $usuario_db=    $row['user'];
        $password_db=   $row['password'];
        $rol_db=        $row['rol'];
    }

    if($resultado->num_rows> 0) {
        $_SESSION ['usuario'] = $usuario;
        $_SESSION ['rol'] = $rol_db;
        header("Location:panel.php");
    }else {
       header("location:../index.html");
    } 
?>