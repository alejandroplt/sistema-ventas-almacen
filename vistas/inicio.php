<?php

    session_start();

    if(isset($_SESSION['usuario'])){
        echo $_SESSION['usuario'];

?>




<!DOCTYPE html>
<html lang="es">
<head>
    <title>Document</title>
</head>
<body>
    
</body>
</html>

<?php
    }else{
        header("../index.php");
    }
?>