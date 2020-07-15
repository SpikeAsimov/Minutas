<?php
include('agregar_venta.php');
include('agregar_excepcion.php');
include('consultar_ventas.php');
include('cargar_stock.php');

?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Secretaria de Tierras - Minutas</title>

    <link rel="stylesheet" type="text/css" href="themes/metro-red/easyui.css">
    <link rel="stylesheet" type="text/css" href="themes/icon.css">
    <link rel="stylesheet" type="text/css" href="themes/demo.css">

    <script type="text/javascript" src="js/jquery.min.js"></script>
    <script type="text/javascript" src="js/jquery.easyui.min.js"></script>

    <script type="text/javascript" src="js/locale/easyui-lang-es.js"></script>
    <script type="text/javascript" src="js/datagrid-filter.js"></script>

        
</head>
<body>



    <h1 style="padding: 20px">
    <img src="imagenes/logoSGM.png" width='5%'>
        Sistema de Gestion Minutas
    </h1>

    <div class="easyui-panel" style="padding:5px;">
        <a href="#" onclick="$('#win_nueva_venta').window('open')" class="easyui-linkbutton" data-options="plain:'true',iconCls:'icon-remove'" >Agregar Venta</a>
        <a href="#" onclick="$('#win_consultar_ventas').window('open')" class="easyui-linkbutton" data-options="plain:true,iconCls:'icon-search'">Consultar Ventas</a>
        <a href="#" onclick="$('#win_cargar_stock').windows('open')" class="easyui-linkbutton" data-options="plain:true, iconCls:'icon-add'" >Cargar Stock</a>
        <a href="#" class="easyui-linkbutton" data-options="plain:true">Salir</a>
    </div>    
<!-- menu  -->

</body>
</html>
