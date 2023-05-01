<?php
    include('conexion.php');

    $user=                  $_POST['user'];
    $password=              $_POST['password'];
    $password_confirmation= $_POST['password_confirmation'];

    /* echo $user;
    echo "<br>" .$password;
    echo "<br>" .$password_confirmation; */

        if ($password != $password_confirmation) {
            header("Location:../views/registro.php?error=Las contraseñas deben ser iguales bobo!");
        }
    $query= "INSERT INTO usuarios (user, password, rol) VALUES ('$user', '$password', 'user')";

    mysqli_query($conexion, $query);
    echo "Usuario creado."
?>