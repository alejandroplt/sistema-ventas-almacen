<?php

    session_start();
    if(isset($_SESSION['usuario'])){

?>




<!DOCTYPE html>
<html lang="es">

<head>
    <title>Articulos</title>
    <?php require_once "menu.php"; ?>
</head>

<body>
    <div class="container">
        <h1>Articulos</h1>
        <div class="row">
            <div class="col-sm-4">
                <form id="frmArticulos" enctype="multipart/form-data"><!-- enctype="multipart/form-data"  esto permite enviar archivos-->
                    <label>Categoria</label>
                    <select class="form-control input-sm" id="categoriaSelect" name="categoriaSelect">
                        <option value="A">Selecciona Categoria</option>
                    </select>
                    <label>Nombre</label>
                    <input type="text" class="form-control input-sm" id="nombre" name="nombre">
                    <label>Descripcion</label>
                    <input type="text" class="form-control input-sm" id="descripcion" name="descripcion">
                    <label>Cantidad</label>
                    <input type="text" class="form-control input-sm" id="cantidad" name="cantidad">
                    <label>Precio</label>
                    <input type="text" class="form-control input-sm" id="precio" name="precio">
                    <label>Imagen</label>
                    <input type="file" id="imagen" name="imagen">
                    <p></p>
                    <span id="btnAgregarArticulo" class="btn btn-primary">Agregar</span>
                </form>
            </div>
            <div class="col-sm-8">
                <div id="tablaArticulosLoad"></div>
            </div>
        </div>
    </div>

</body>

</html>

<script type="text/javascript">
$(document).ready(function(){
    $('#tablaArticulosLoad').load("articulos/tablaArticulos.php");

    $('#btnAgregarArticulo').click(function() {

        vacios = validarFormVacio('frmArticulos');

        if (vacios > 0) {
            alertify.alert("Mensaje", "Debes llenar todos los campos");
            return false;
        }

        datos = $('#frmArticulos').serialize();
        $.ajax({
            type: "POST",
            data: datos,
            url: "../procesos/articulos/agregarArticulos.php",
            success:function(r) {
                if (r==1) {
                    alertify.success("Agregado con exito");
                } else {
                    alertify.error("No se pudo agregar");
                }
            }
        });
    });
});
</script>



<?php
    }else{
        header("location:../index.php");
    }
?>