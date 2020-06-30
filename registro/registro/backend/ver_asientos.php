<?php header('Access-Control-Allow-Origin: *'); ?>
<?php
@include('conexion_registro.php');
@$matricula=$_POST['matricula'];






$sql="SELECT nro_asiento,datos_varios FROM  tit_dominios_mov WHERE 	matricula='$matricula'";
	
$res=odbc_exec($con, $sql);
$datos_json=array();

while ($row=odbc_fetch_array($res)) {
	$datos_json[]=array_map('utf8_encode', $row);
}
echo json_encode($datos_json);


?>