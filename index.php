<!doctype html>
<html lang="es">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" type="text/css" href="librerias/bootstrap/css/bootstrap.css">

    <title>Login usuario</title>
  </head>
  <body>
      <br><br><br>
      <div class="container">
          <div class="row">
              <div class="col-sm-4"></div>
              <div class="col-sm-4">
                  <div class="panel panel-primary">
                      <div class="panel panel-heading"> Sistema de ventas
                        y almacen</div>
                        <div class="panel panel-body">
                            <p>
                                <img src="img/ventas.jpg" height="190">
                            </p>
                            <form id="frmLogin">
                              <label>Usuario:</label>
                              <input type="text" class="form-control input-sm" name="usuario" id="usuario">
                              <label>Password</label>
                              <input type="password" class="form-control input-sm" name="password" id="password">
                              <p></p>
                              <scan class="btn btn-primary btn-sm" id="entrarSistema">Entrar</scan>
                              <a href="registro.php" class="btn btn-danger btn-sm">Registrar</a>
                            </form>
                        </div>
                  </div>
              </div>
              <div class="col-sm-4"></div>
          </div>
      </div>

    <script src="librerias/jquery-3.2.1.min.js"></script>
    <script src="js/funciones.js"></script>
  </body>
</html>

<script type="text/javascript">
      $(document).ready(function(){
        $('#entrarSistema').click(function(){

          vacios=validarFormVacio('frmLogin');

          if(vacios > 0){
            alert("Debes llenar todos los campos");
            return false;
          }
          
          datos=$('#frmLogin').serialize();
          $.ajax({
            type:"POST",
            data:datos,
            url:"procesos/regLogin/login.php",
            success:function(r){

              if(r==1){
                window.location="vistas/inicio.php";
              }else{
                alert("Usuario o contraseña incorrectos");
              }
            }
          });
        });
      });

</script>