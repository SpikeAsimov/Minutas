<?php
session_start();
@$usuario_valido=$_SESSION['usuario_valido'];
if (!$usuario_valido) {
  $usuario_valido="Control de Acceso";
}

?>
<!DOCTYPE html>

<!--[if lt IE 7]> <html class="lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
<!--[if IE 7]> <html class="lt-ie9 lt-ie8" lang="en"> <![endif]-->
<!--[if IE 8]> <html class="lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html lang="en"> <!--<![endif]-->
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <title>Secretaría de Tierras - Minutas</title>
  <link rel="stylesheet" href="css/style.css">
 
  <script type="text/javascript" src="global/jquery.mobile/jquery-1.7.2.min"></script>

    <script type="text/javascript" src="js/jquery.min.js"></script>


<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<style type="text/css">
body {
	background-image: url();
  
  position: absolute;
  top: -20px;
  left: -20px;
  right: -40px;
  bottom: -40px;
  width: auto;
  height: auto;
  
  background-size: cover;
  
  -webkit-filter: blur(0px);
  z-index: 0;

}
</style>
</head>
<body>
  <section class="container">
    <p>&nbsp;</p>
    <p>&nbsp;</p>
    <p>&nbsp;</p>
    <p>&nbsp;</p>
    <p>&nbsp;</p>
    <p>&nbsp;</p>
   
    
    <table width="200" border="0" align="center" cellspacing="0">
      <tr>
        </p>
        <p>&nbsp;</p></th>
      </tr>
    </table>
   
   
    <div class="login">
       <hr></hr>
      <h3 align="center"><img src="registro/imagenes/logoSGM.png" width="50%" ></h3>
      <h3 align="center">Sistema de Gestión Minutas</h3>
      <hr></hr>
      <h3><?php echo $usuario_valido; ?></h3>
      <form id="form1" name="form1" method="post" action="registro/index.php">
        <p><input type="text" id="usuario" name="usuario" value="" placeholder="Ingrese Su Usuario"></p>
        <p><input type="password" id="password" name="password" value="" placeholder="Ingrese Su Clave"></p>
        <p class="remember_me">
          <label>
                       
          </label>
        </p>
        <p class="submit"><input type="submit" name="commit" id="boton_enviar" value="Ingresar"></p>
      </form>
    </div>

    <div class="login-help">
      <p>&nbsp;</p>
    </div>
  </section>
</body>
<script type="text/javascript">



</script>
</html>
