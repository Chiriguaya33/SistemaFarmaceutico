
<?php

include_once 'Conexion.php';

class Usuario{

    var $objetos;

    public function __construct(){
        $db = new Conexion();
        $this->acceso = $db->pdo;
    }

    function Loguearse($dni,$pass){
        $sql="SELECT * FROM usuario inner join tipo_usuario on tipo_usuario_id=id_tusuario where dni=:dni and contrasena=:pass";
        $query = $this->acceso->prepare($sql);
        $query->execute(array(':cedula'=>$dni,':pass'=>$pass));
        $this->objetos= $query->fetchall();
        return $this->objetos;
    }

}

?>