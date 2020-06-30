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
    <title>SISTEMA-RPI</title>
    <!-- <link rel="stylesheet" type="text/css" href="themes/default/easyui.css">-->

     <link rel="stylesheet" type="text/css" href="themes/metro-blue/easyui.css">
        <link rel="stylesheet" type="text/css" href="themes/icon.css">
        <link rel="stylesheet" type="text/css" href="themes/demo.css">  
        <link rel="stylesheet" type="text/css" href="themes/color.css">

        <script type="text/javascript" src="js/jquery.min.js"></script>
        <script type="text/javascript" src="js/jquery.easyui.min.js"></script>
       
        <script type="text/javascript" src="js/locale/easyui-lang-es.js"></script>
        <script type="text/javascript" src="js/datagrid-filter.js"></script>    
     
    <!--  <link rel="stylesheet" type="text/css" href="http://www.jeasyui.com/easyui/themes/default/easyui.css">
    <link rel="stylesheet" type="text/css" href="http://www.jeasyui.com/easyui/themes/icon.css">
    <link rel="stylesheet" type="text/css" href="http://www.jeasyui.com/easyui/themes/color.css">
    <link rel="stylesheet" type="text/css" href="http://www.jeasyui.com/easyui/demo/demo.css">
    <script type="text/javascript" src="http://code.jquery.com/jquery-1.6.min.js"></script>
    <script type="text/javascript" src="http://www.jeasyui.com/easyui/jquery.easyui.min.js"></script>  -->


        
</head>
<body>

     
    <!--<h2 align="left">Registro de la propiedad</h2>-->
    <h2><img src="imagenes/logo_registro.png" width='5%'>Registro de La Propiedad Inmueble</h2>
    <div style="margin:20px 0;"></div>
    <div class="easyui-panel" style="padding:5px;">
        <a href="#" onclick="$('#dlg_buscar_folio').window('open')" class="easyui-linkbutton" data-options="plain:true,iconCls:'icon-search'">Buscador</a>
        <a href="#" class="easyui-menubutton" data-options="menu:'#mm1',iconCls:'icon-edit'" >Gestion Folio Reales</a>
        <a href="#" class="easyui-menubutton" data-options="menu:'#mm2'">Inhibiciones</a>
        <a href="#" class="easyui-menubutton" data-options="menu:'#mm3'">Sistema</a>
        <a href="#" class="easyui-linkbutton" data-options="plain:true">Gestion de Tramite</a>
        <a href="#" class="easyui-linkbutton" data-options="plain:true">Estadisticas</a>
         <a href="#" class="easyui-linkbutton" data-options="plain:true">Configuracion</a>
         <a href="#" class="easyui-linkbutton" data-options="plain:true">Otras Opciones</a>
          <a href="#" class="easyui-linkbutton" data-options="plain:true">Salir</a>
    </div>
    <div id="mm1" style="width:150px;">
        <div onclick="$('#win-folio_carga').window('open')">Cargar Folios</div>
        <div onclick="$('#win-folio_carga').window('open')">Editar Folios</div>
        
        <div >Verificaciones</div>
    </div>
    <div id="mm2" style="width:200px;">
        <div>Ingreso de Inhibiciones</div>
        <div>Busqueda Y Consulta</div>
        <div>Reporte de Inhibiciones</div>
        <div>Reporte de Cancelaciones</div>
    </div>
    <div id="mm3" style="width:200px;">
        <div>Gestion de Archivos</div>
        <div  onclick="$('#win-impresio').window('open')" >Impresion de Folios</div>
        <div onclick="$('#w').window('open')" >Errores de Syntis</div>
        </div>
         
<!-- menu  -->
<!-- cuadra buscar  -->

    <!-- login  -->
<div id="w" class="easyui-window" title="Modal Window" data-options="modal:true,closed:true,iconCls:'icon-save'" style="width:500px;height:200px;padding:10px;">
        The window content.
    </div>
    <!-- login  -->
</body>
</html>
<script type="text/javascript">
//$('#w').window('open');
//$('#edita_buscar').hide();
function buscar(buscar){
             
         
    
  
  
         
            $('#grid_1').datagrid({
    url:'backend/consulta_1.php?persona='+buscar,
    //method:'GET'
    columns:[[
        {field:'matricula',title:'MATRICULA',width:100},
        {field:'apellido',title:'APELLIDO',width:200},
        {field:'nombre',title:'NOMBRE',width:200},
        {field:'nro_doc',title:'DNI',width:100,align:'right'},
        {field:'cuit',title:'CUIT',width:100,align:'right'},
        {field:'ubicacion',title:'INMUEBLE UBICACION',width:500,align:'right'}
     
        
        
    ]]

});
            $('#grid_1').datagrid('reload');
           
     
        }

 $('#grid_1').datagrid({//eventos correspondientes a la tabla
                onDblClickRow: function(index,row){//click en un row
 //alert("ad");
                    $('#win-folio_info').window('open');
                    $('#fm-folio_info').form('load',row);
                    //alert(row.MATRICULA);
                     //url = 'backend/consulta_folio_info.php?id='+row.numero;
                }
               
            });

 $('#departa').val('Capital');
</script>
