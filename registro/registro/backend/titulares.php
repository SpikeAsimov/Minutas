<?php header('Access-Control-Allow-Origin: *'); ?>
<?php
@include('conexion_registro.php');
$dni=$_GET['dni'];
$sql="SELECT  * FROM titulares	WHERE nro_doc='$dni'";
	//titular_inmueble.nro_doc='$persona'";
$res=odbc_exec($con, $sql);
$row=odbc_fetch_array($res);
$apellidonombre=$row['apellidonombre'];
$nro_doc=$row['nro_doc'];
$cuit=$row['cuit'];
 //echo json_encode($datos_json);

 echo '{"apellidonombre":"'.$apellidonombre.'",
          "nombre":"'.$row['nombre'].'",
	           "nro_doc":"'.$nro_doc.'",
	              "cuit":"'.$cuit.'",
	     "localidad":"'.$row['localidad'].'",
	     "Nacionalidad":"'.$row['Nacionalidad'].'",
	     "datos_conyugue":"'.$row['datos_conyuge'].'"
      }';
?>