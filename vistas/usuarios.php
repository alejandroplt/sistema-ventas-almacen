<?php

    session_start();
    if(isset($_SESSION['usuario'])){

?>




<!DOCTYPE html>
<html lang="es">

<head>
    <title>Usuarios</title>
    <?php require_once "menu.php"; ?>
</head>

<body>

</body>

</html>

<?php
    }else{
        header("location:../index.php");
    }
?>