<?php

class usuarios
{
    public function registroUsuario($datos)
    {
        $c = new conectar();
        $conexion = $c->conexion();

        //ESTABLECER FECHA ACTUAL
        $fecha = date('Y-m-d');

        $sql = "INSERT into usuarios (nombre,
                              apellido,
                              email,
                              password,
                              fechaCaptura)

                         values('$datos[0]',
                                '$datos[1]',
                                '$datos[2]',
                                '$datos[3]',
                                '$fecha')";

        return mysqli_query($conexion, $sql);
    }

    public function loginUser($datos)
    {
        $c = new conectar();
        $conexion = $c->conexion();
        $password = sha1($datos[1]);

        //SESION DE ID
        $_SESSION['usuario'] = $datos[0];
        $_SESSION['iduser'] = self::traerID($datos);

        $sql = "SELECT * from usuarios where email='$datos[0]' and password='$password'";
        $result = mysqli_query($conexion, $sql);

        if (mysqli_num_rows($result) > 0) {
            return 1;
        } else {
            return 0;
        }
    }

    //FUNCION PARA EXTRAER EL ID
    public function traerID($datos)
    {
        $c = new conectar();
        $conexion = $c->conexion();

        $password = sha1($datos[1]);

        $sql = "SELECT id_usuario from usuarios where email='$datos[0]' and password='$password'";

        $result = mysqli_query($conexion, $sql);

        //ESTO EXTRAER EL PRIMER ELEMENTO DEL ARREGLO
        return mysqli_fetch_row($result)[0];
    }
}