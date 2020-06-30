<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Minutas | Sistema de Stock</title>

    <link rel="stylesheet" type="text/css" href="themes/bootstrap/easyui.css">
    <link rel="stylesheet" type="text/css" href="themes/icon.css">
    <script type="text/javascript" src="jquery.min.js"></script>
    <script type="text/javascript" src="jquery.easyui.min.js"></script>

    <script type="text/javascript" src="main.js"></script>

</head>


<body class="easyui-layout">

<div>
    Click <a href="#" onclick="showmenu()">here</a> to show the menu.
</div>

<div id="mm" class="easyui-menu" style="width:120px;">
    <div onclick="javascript:alert('new')">New</div>
    <div>
        <span>Open</span>
        <div style="width:150px;">
            <div><b>Word</b></div>
            <div>Excel</div>
            <div>PowerPoint</div>
        </div>
    </div>
    <div icon="icon-save">Save</div>
    <div class="menu-sep"></div>
    <div>Exit</div>
</div>

<div data-options="region:'north',title:'Menú Principal'" style="height:100px;">
    <a id="btnVenta" href="#" class="easyui-linkbutton" data-options="iconCls:'icon-add'">Nueva venta</a>
    <a id="btnConsultaVenta" href="#" class="easyui-linkbutton" data-options="iconCls:'icon-search'">Consultar Ventas</a>
    <a id="btnConsultaStock" href="#" class="easyui-linkbutton" data-options="iconCls:'icon-search'">Controlar Stock</a>


</div>


<div data-options="region:'center',title:'Contenido'" style="padding:5px;background:#eee;">

    <div id="winVenta" class="easyui-window" title="My Window" style="width:600px;height:400px"
         data-options="iconCls:'icon-save',modal:true">
        <div class="easyui-layout" data-options="fit:true">
            <div data-options="region:'center'">
                The Content.
            </div>
        </div>
    </div>


</div>



</body>
</html>