<?php
@mysql_connect('localhost','root','');
@mysql_select_db('rpi');


@$tramite=$_POST['nro_tramite'];
@$apeynom=$_POST['apeynom'];
@$dni=$_POST['dni'];
@$detalle=$_POST['detalle'];
@$fecha=date('Y-m-d');
@$matricula=$_POST['matricula'];




$select="SELECT * FROM seguimiento_de_me WHERE nro_tramite='$tramite'";
$res_sql=mysql_query($select);
$row_sql=mysql_fetch_array($res_sql);
if ($row_sql['id']=="") {

	$insert="INSERT INTO seguimiento_de_me (nro_tramite,apeynom,dni,detalle,estado,fecha,matricula) VALUES ('$tramite','$apeynom','$dni','$detalle','ingresado','$fecha','$matricula')";
mysql_query($insert);

$datos_json='[{"valido":"validate"}]';

echo $datos_json; 
}
 else
 {
 	echo '{"errorMsg":"ERROR: Ya Fue Cargado Anteriormente"}';
 }


?>
