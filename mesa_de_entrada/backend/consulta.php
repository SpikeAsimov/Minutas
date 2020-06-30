<?php
@mysql_connect('localhost','root','');
@mysql_select_db('rpi');


@$tramite=$_GET['nro_tramite'];
@$tipo=$_GET['tipo'];
@$fecha=$_GET['fecha'];

if ($tramite!="" && $tipo=='7') {
	$select="SELECT * FROM  `seguimiento_de_me` where `nro_tramite` like '%$tramite' order by nro_tramite desc";
}

if ($tramite!="" && $tipo=='4') {
	$select="SELECT * FROM  `seguimiento_de_me` where `dni` like '%$tramite' order by nro_tramite desc";
}
if ($tramite!="" && $tipo=='5') {
	$select="SELECT * FROM  `seguimiento_de_me` where `calificador` like '%$tramite' order by nro_tramite desc";
}
if ($tramite!="" && $tipo=='6') {
	$select="SELECT * FROM  `seguimiento_de_me` where `nro_registro` like '%$tramite' order by nro_tramite desc";
}

if ($tipo=='0' && $tramite=="") {
	$select="SELECT * FROM  `seguimiento_de_me` where  fecha = '$fecha' 
	order by nro_tramite desc";

}
if ($tipo=='1' && $tramite=="") {
	$select="SELECT * FROM  `seguimiento_de_me` where fecha = '$fecha' 
	and `nro_tramite` like 'A%' order by nro_tramite desc";

}
if ($tipo=='2' && $tramite=="") {
	$select="SELECT * FROM  `seguimiento_de_me` where fecha = '$fecha' 
	and `nro_tramite` like 'B%' order by nro_tramite desc";
}
if ($tipo=='3' && $tramite=="") {
	$select="SELECT * FROM  `seguimiento_de_me` where fecha = '$fecha' 
	and `nro_tramite` like 'C%' order by nro_tramite desc";
}
   
  

$res=mysql_query($select);
$datos_json=array();

while ($row=mysql_fetch_array($res)) {

     $datos_json[]=array_map('utf8_encode', $row);
	}


echo json_encode($datos_json);

?>
