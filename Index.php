
<!DOCTYPE html>

<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>Login</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@700&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="../css/style.css">
    <link rel="stylesheet" type="text/css" href="../css/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

</head>

<?php

session_start();

if(!empty($_SESSION['us_tipo'])){
    header('location: ../controller/LoginController.php');
}
else{

    session_destroy();

?>

?>

<body>


    <div class="contenedor">

        <div class="img">
            <img src="Img/Farmacia.svg" alt="">
        </div>

        <div class="contenido-login">

            <form action="Controller/ControladorLogin.php">

                <img src="Img/AvatarLogin.png" alt="">
                <h2>FARMACIA</h2>

                <div class="input-div cedula">
                    <i class="fas fa-user"></i>
                </div>

            </form>

        </div>

    </div>
    

</body>

</html>

<script src="../js/login.js"></script>

<?php
}
?>