
<?php

include_once '../model/Usuario.php';

session_start();

$user = $_POST['user'];
$pass = $_POST['pass'];
$usuario = new Usuario();

if(!empty($_SESSION['us_tipo'])){

    switch ($_SESSION['us_tipo']) {
        case 1:
            header('Location: ../view/adminitrador.php');
            break;

        case 2:
            header('Location: ../view/tecnico.php');
            break;

        case 3:
            header('Location: ../view/trabajador.php');
            break;
    }

}
else{

    $usuario->Loguearse($user,$pass);

    if(!empty($usuario->objetos)) {

        foreach ($usuario->objetos as $objeto) {
            $_SESSION['usuario']=$objeto->id_usuario;
            $_SESSION['us_tipo']=$objeto->us_tipo;
            $_SESSION['nombre_us']=$objeto->nombre_us;
        }

        switch ($_SESSION['us_tipo']) {
            case 1:
                header('Location: ../view/adm_catalogo.php');
                break;

            case 2:
                header('Location: ../view/tec_catalogo.php');
                break;

            case 3:
                header('Location: ../view/clt_catalogo.php');
                break;
        }

    }
    else{
        header('Location: ../view/login.php');
    }
}
?>