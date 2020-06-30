<?php
@mysql_connect('localhost','root','');
@mysql_select_db('rpi');
$nro_tramite=$_POST['nro_tramite'];
$antecedente=$_POST['antecedente'];
$calificador=$_POST['calificador'];
$fecha_salida=$_POST['fecha_salida'];
$control=$_POST['control'];
$reg=$_POST['reg'];
$estado=$_POST['estado'];
$folio=$_POST['folio'];


$update="UPDATE seguimiento_de_me 
SET antecedente='$antecedente',calificador='$calificador',estado='$estado', 	fecha_salida='$fecha_salida',control='$control', reg='$reg',folio='$folio'
where nro_tramite='$nro_tramite'";

mysql_query($update) or die (mysql_error());

$datos_json='[{"valido":"validate"}]';
ECHO $datos_json;
?>