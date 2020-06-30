<?php header('Access-Control-Allow-Origin: *'); ?>
<?php
//@include('conexion.php');
@include('conexion_registro.php');
//$con=odbc_connect('REGISTRO', '', '');
@$persona=$_GET['persona'];

if ($persona=="") {
	$persona='*****';
}
/*/
$sql="SELECT inmuebles.MATRICULA, APELLIDO+','+NOMBRE AS APEYNOM,NRO_DOC AS DOCUMENTO,
UBICACION+'/'+mc_departamento+'-'+mc_circunscripcion+'-'+mc_seccion+'-'+mc_manzana+'-'+mc_parcela AS UBICACION_NC,
UBICACION
FROM titular_inmueble, inmuebles WHERE 
	inmuebles.matricula=titular_inmueble.matricula
	AND 
	inmuebles.MATRICULA='C-40925'";
	//titular_inmueble.nro_doc='$persona'";
	/*/
	$sql="SELECT  * FROM titular_inmueble, inmuebles,tit_dominios_mov 
	WHERE 	inmuebles.matricula=titular_inmueble.matricula 
	AND     tit_dominios_mov.matricula=inmuebles.matricula
	AND 	inmuebles.MATRICULA='C-40925'";
	//titular_inmueble.nro_doc='$persona'";
$res=odbc_exec($con, $sql);
$datos_json=array();

while ($row=odbc_fetch_array($res)) {
	$datos_json[]=array_map('utf8_encode', $row);
}
 echo json_encode($datos_json);
//echo '{"matricula":"C-40925"}';
//ECHO '{"usuario":"mvaldez"}';
?>