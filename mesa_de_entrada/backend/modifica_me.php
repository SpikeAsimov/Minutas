 
<?php
@mysql_connect('localhost','root','');
@mysql_select_db('rpi');
$nro_tramite=$_POST['nro_tramite'];
$matricula=$_POST['matricula'];
$apeynom=$_POST['apeynom'];
//$fecha_salida=$_POST['fecha_salida'];
$dni=$_POST['dni'];
$detalle=$_POST['detalle'];



$update="UPDATE seguimiento_de_me SET matricula='$matricula',apeynom='$apeynom',dni='$dni',detalle='$detalle' where nro_tramite='$nro_tramite'";

mysql_query($update) or die (mysql_error());

$datos_json='[{"valido":"validate"}]';
ECHO $datos_json;


?>