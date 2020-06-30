<?php header('Access-Control-Allow-Origin: *'); ?>

<?php
mysql_connect('localhost','root','');
mysql_select_db('rpi');
$apeynom=$_POST['persona'];
$dni=$_POST['dni'];
$cuil=$_POST['cuil'];
$disposicion=$_POST['disposicion'];
$ubicacion=$_POST['ubicacion'];
$tomo=$_POST['tomo'];
$folio=$_POST['folio'];
$anio=$_POST['anio'];
$dominio_antc=$_POST['dominio_antc'];
$acto=$_POST['acto'];
@$dep=$_POST['dep'];
@$circ=$_POST['circ'];
@$sec=$_POST['sec'];
//$mza=$_POST['mza'];
//$parc=$_POST['parc'];
@$dep_rural= $_POST['dep_rural'];
@$Hoja= $_POST['Hoja'];
@$Sub_hoja= $_POST['Sub_hoja'];
@$cord_x=  $_POST['cord_x'];
@$cord_y= $_POST['cord_y'];

$par_nomenc_rural=$dep_rural;
$mza= str_pad( $_POST['mza'],5,"0",STR_PAD_LEFT);
$parc= str_pad( $_POST['parc'],5,"0",STR_PAD_LEFT);
$par_nomenc=$dep.$circ.$sec.$mza.$parc."0000000";

$sql="INSERT INTO planos (apeynom,dni,cuil,disposicion,ubicacion,tomo,folio,anio,dominio_antc,par_nomenc,par_nomenc_rural) 
values ('$apeynom','$dni','$cuil','$disposicion','$ubicacion','$tomo','$folio','$anio','$dominio_antc','$par_nomenc','$par_nomenc_rural')";
$res=mysql_query($sql) or die ("Error en: $busqueda: " . mysql_error());
$datos_json=array();

$datos_json='[{"valido":"validate"}]';

echo $datos_json; 


?>