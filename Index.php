
<!DOCTYPE html>

<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>Login</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/Login.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

</head>

<?php

session_start();

if(!empty($_SESSION['tipo_usuario_id'])){
    header('location: Controller/ControladorLogin.php');
}
else{

    session_destroy();

?>

<body class="login-page">

    <div class="login-box">

        <div class="login-logo">
            <a href="index.php"><b>Farmacia</b>IMP</a>
        </div>

        <!-- /.login-logo -->
        <div class="card">

            <div class="card-body login-card-body">

                <p class="login-box-msg">Sign in to start your session</p>

                <form action="Controller/ControladorLogin.php" method="post">
                    
                    <div class="input-group mb-3">

                        <div class="i">
                            <i class="fas fa-user"></i>
                        </div>

                        <div class="input-group-text">
                            <input type="text" name="user" class="form-control">
                            <h5>CEDULA</h5>
                        </div>

                    </div>

                    <div class="input-div pass">

                        <div class="i">
                            <i class="fas fa-lock"></i>
                        </div>

                        <div class="div">
                            <h5>CONTRASENA</h5>
                            <input type="password" name="pass" class="input">
                        </div>

                    </div>
                    <!--<div class="input-group mb-3">

                        <input type="text" class="form-control" placeholder="Username">
                        
                        <div class="input-group-append">

                            <div class="input-group-text">
                                <span class="fas fa-envelope"></span>
                            </div>

                        </div>

                    </div>

                    <div class="input-group mb-3">

                        <input type="password" class="form-control" placeholder="Password">
                        
                        <div class="input-group-append">

                            <div class="input-group-text">
                                <span class="fa-solid fa-lock"></span>
                            </div>

                        </div>

                    </div>-->

                    <div class="row">

                        <div class="col-8">

                            <div class="icheck-primary">
                                
                                <input type="checkbox" id="recordar">
                                
                                <label for="recordar">
                                    Recordarme
                                </label>

                            </div>

                        </div>

                        <div class="col-4">
                            <button type="submit" class="btn btn-primary btn-block">Sign In</button>
                        </div>

                    </div>

                </form>

                <p class="mb-1">
                    <a href="View/Recuperar.php">I forgot my password</a>
                </p>

                <p class="mb-0">
                    <a href="View/Registro.php" class="text-center">Register a new membership</a>
                </p>

            </div>

        </div>

    </div>

</body>

<script src="js/login.js"></script>

</html>

<?php
}
?>
