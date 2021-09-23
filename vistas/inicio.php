  
  <!--Se inicia sesion siempre y cuando algun usuario se haya logeado de lo contrario se va al index -->
  <?php 
	session_start();
	if(isset($_SESSION['usuario'])){
 ?>


  <!DOCTYPE html>
  <html>

  <head>
      <title>inicio</title>
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