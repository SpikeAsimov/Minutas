<?php
include('buscar_folio.php');
include('info_folio.php');
include('carga_folio.php');
include('impresion_folios.php');
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Secretaría de Tierras - Minutas</title>

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
        Sistema de Gestión Minutas
    </h1>

    <div class="easyui-panel" style="padding:5px;">
        <a href="#" class="easyui-menubutton" data-options="plain:'true',menu:'#menuVenta', iconCls:'icon-add'" >Agregar</a>
        <a href="#" onclick="$('#dlg_consulta_ventas').window('open')" class="easyui-linkbutton" data-options="plain:true,iconCls:'icon-search'">Consultar Ventas</a>
        <a href="#" class="easyui-linkbutton" data-options="plain:true, iconCls:'icon-add'" >Cargar Stock</a>
        <a href="#" class="easyui-linkbutton" data-options="plain:true">Salir</a>
    </div>
    <div id="menuVenta" style="width:150px;" >
        <a href="#" onclick="$('#dlg_nueva_venta').window('open')" class="easyui-linkbutton" data-options="plain:'true',iconCls:'icon-remove'" >Venta</a>
        <a href="#" onclick="$('#dlg_nueva_excepcion').window('open')" class="easyui-linkbutton" data-options="plain:'true',iconCls:'icon-remove'" >Excepción</a>
    </div>
<!-- menu  -->

</body>
</html>
