<?php 
	session_start();
	if(isset($_SESSION['usuario'])){
		
 ?>


<!DOCTYPE html>
<html>

<head>
    <title>Categorias</title>
    <?php require_once "menu.php"; ?>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-sm-4">
                <div class="col-col-sm-4">
                    <form id="frmCategorias">
                        <label>Categoria</label>
                        <input type="text" class="form-control input-sm" name="categoria" id="categgoria">
                        <p></p>
                        <span class="btn btn-primary" id="btnAgregarCategoria">Agregar</span>
                    </form>
                </div>
                <div class="col-sm-4">
                    <div id="tablaCategoriaLoad"></div>
                </div>
            </div>
        </div>
    </div>


</body>

</html>

<script type="text/javascript">
$(document).ready(function() {

    $('#tablaCategoriaLoad').load("categorias/tablaCategorias.php");

    $('btnAgregarCategoria').click(function() {

        vacios = validarFormVacio('frmCategorias');

        if (vacios > 0) {
            alertify.alert("Debes llenar todos los campos");
            return false;
        }

        datos = $('frmCategorias').serialize();
        $.ajax({
            type: "POST",
            data: datos,
            url: "../procesos/categorias/agregaCategoria.php",
            success: function(r) {
                if (r == 1) {
                    alertify.success("Categoria agregada con exito");
                } else {
                    alertify.error("No se pudo agregar categoria");
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