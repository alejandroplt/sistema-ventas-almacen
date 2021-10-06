<?php

    require_once "../../clases/conexion.php";
    require_once "../../clases/categorias.php";


    $datos=array($_POST['idcategoria'],$_POST['categoriaU']);

    $obj= new categorias();
    
    echo $obj->actualizaCateogria($datos);


?>