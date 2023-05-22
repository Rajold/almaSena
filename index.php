<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="./assets/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="./csss/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="./csss/style.css">
    <title>almaSena</title>
</head>

<body class="d-flex justify-content-center align-items-center vh-100 bg-image"
    style="background-image: url('./assets/inventoryView.webp'); height: 100vh">
    <div class="bg-white p-5 rounded-5 text-secondary shadow" style="width: 25rem">
        <div class="d-flex justify-content-center">
            <img src="./assets/login-icon.svg" alt="login-icon" style="height: 7rem" />
        </div>

        <div class="text-center fs-1 fw-bold">Login</div>

        <?php
        include("controllers/dbConection.php");
        include("controllers/login.php"); 
        ?>
        <!-- inicio formulario -->
        <form action="" method="post">
            <div class="form-floating input-group mt-4">
                <div class="input-group-text bg-info">
                    <img src="./assets/username-icon.svg" alt="username-icon" style="height: 1rem" />
                </div>
                <input class=" form-control bg-light" name="email" type="email" id="mailInput" placeholder="" />
                <label for="mailInput" class="form-label px-5">Correo SENA</label>
            </div>

            <div class="form-floating input-group mt-1">
                <div class="input-group-text bg-info">
                    <img src="./assets/password-icon.svg" alt="password-icon" style="height: 1rem" />
                </div>
                <input class="form-control bg-light" name="password" type="password" placeholder="" />
                <label for="exampleInputPassword1" class="form-label px-5">Contraseña</label>
            </div>
            <div class="d-flex justify-content-around mt-1">
                <div class="d-flex align-items-center gap-1">
                    <input class="form-check-input" type="checkbox" />
                    <div class="pt-1" style="font-size: 0.9rem">Recordarme</div>
                </div>
                <div class="pt-1">
                    <a href="#" class="text-decoration-none text-info fw-semibold fst-italic"
                        style="font-size: 0.9rem">Ya perdió la contraseña?</a>
                </div>
            </div>
            
            <div>
                <input name="btnLogin" class="btn btn-info text-white w-100 mt-2 fw-semibold shadow-sm" 
                type="submit" value="Iniciar Sesión">
            </div>
            
            <div class="d-flex gap-1 justify-content-center mt-1">
                <div>No está registrado?</div>
                <a href="./views/registro.php" class="text-decoration-none text-info fw-semibold">Regístrese pues</a>
            </div>
        </form>
        <!-- fin de formulario -->
    </div>

    <script>
    //Autoclose
   window.setTimeout(function() {
    $(".alert").fadeTo(2500, 0).slideDown(1000, function(){
        $(this).remove(); 
    });
   }, 1000); //1 segundo y desaparece
    </script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
</body>

</html>