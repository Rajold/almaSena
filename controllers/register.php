<?php
    include('./dbConection.php');

    $usrId=                 $_POST['dni'];
    $usrName=               $_POST['uname'];
    $usrMail=               $_POST['email'];
    $password=              $_POST['pass'];
    $password_confirmation= $_POST['passConf'];

    /* echo $user;
    echo "<br>" .$password;
    echo "<br>" .$password_confirmation; */

        if ($password != $password_confirmation) {
            header("Location:../views/registro.php?error=Las contraseñas deben ser iguales bobo!");
        }
    $query= "INSERT INTO usuarios (id, user, password, email, rol) VALUES ('$usrId', '$usrName', '$password', '$usrMail', 'user')";

    mysqli_query($conexion, $query);
    // echo "Usuario creado."
    header("Location:../index.html");
?>