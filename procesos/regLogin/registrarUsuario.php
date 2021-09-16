
<?php

    require_once "../../clases/conexion.php";
    require_once "../../clases/usuarios.php";

    $obj = new usuarios();

    //sha1 sirve para encriptar contraseña
    $pass=sha1($_POST['password']);
    $datos=array(
        $_POST['nombre'],
        $_POST['apellido'],
        $_POST['usuario'],
        $pass
    );

    echo $obj->registroUsuario($datos);

?>