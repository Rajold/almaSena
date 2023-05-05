<?php
    session_start();
    include("./dbConection.php");

    // $categoria= $_POST['category'];
    $categoria= 'cabeza';
    // echo $categoria;


    $sql= "SELECT * FROM elementos WHERE categoria= '$categoria' ";

    $resultado= mysqli_query($conexion, $sql);
    // var_dump($resultado);
    // var_dump($resultado->num_rows);
    echo $resultado;

    
    switch ($categoria) {
        case 'Cabeza':
            echo "$categoria";
            break;
        case 'Visual':
            echo "$categoria";
            break;
        case 'Auditivo':
            echo "$categoria";
            break;
        case 'Respiratorio':
            echo "$categoria";
            break;
        case 'Cuerpo':
            echo "$categoria";
            break;
        case 'Manos':
            echo "$categoria";
            break;
        case 'Pies':
            echo "$categoria";
            break;
    }


    /* echo $user;
    echo "<br>" .$password;
    echo "<br>" .$password_confirmation; */

        /* if ($password != $password_confirmation) {
            header("Location:../views/registro.php?error=Las contraseñas deben ser iguales bobo!");
        }
    $query= "INSERT INTO usuarios (id, user, password, email, rol) VALUES ('$usrId', '$usrName', '$password', '$usrMail', 'user')";

    mysqli_query($conexion, $query);
    // echo "Usuario creado."
    header("Location:../index.html"); */
?>