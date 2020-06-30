<?php
@mysql_connect('localhost','root','');
@mysql_select_db('rpi');


@$tramite=$_GET['nro_tramite'];
@$tipo=$_GET['tipo'];
@$fecha=$_GET['fecha'];


if ($tipo=='5') {
	$select="SELECT * FROM  `seguimiento_de_me`  order by id desc";

}
if ($tipo=='2') {
	$select="SELECT * FROM  `seguimiento_de_me` where fecha = '$fecha' order by id desc";

}
if ($tipo=='1') {
	$select="SELECT * FROM `seguimiento_de_me` WHERE `nro_tramite` like '$tramite%'";
}

   
  

$res=mysql_query($select);
$datos_json=array();

while ($row=mysql_fetch_array($res)) {

     $datos_json[]=array_map('utf8_encode', $row);
	}


echo json_encode($datos_json);

?>
