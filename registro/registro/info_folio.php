
<!-- cuadro folio  -->

<div id="win-folio_info" class="easyui-window" title="--Folio--"  closed="true"style="width:100%" border='thin' cls='c6' >
<!--<div id="dlg" class="easyui-window" style="width:100%" closed="true"  border='thin' cls='c6' top='10'left='630'>-->
        <form id="fm-folio_info" method="post" novalidate style="margin:0;padding:30px 70px">
            <div style="margin-bottom:20px;font-size:14px;border-bottom:1px solid #ccc">
             <a href="#" class="easyui-linkbutton" data-options="iconCls:'icon-large-picture'" target='popup'   onclick=[window.open('imagenes/folios/folio_prueba.jpg','name','width=600,height=400')]>Ver Folio Digital</a>
            <a href="#" class="easyui-linkbutton"  data-options="iconCls:'icon-print'">Imprimir</a>
            <a href="#" class="easyui-linkbutton" onclick="ver_asintos()" >Ver Asientos</a>
            <a href="#" class="easyui-linkbutton" onclick="ver_titular()" >Ver Titulares</a>
            
           
            
            </div>
        <div id="cc" class="easyui-layout" style="width:100%;height:310px;">
        <div data-options="region:'north',split:true"  title="Datos Catastrales"style="height:100px">
            <input type="text" id="matricula" name="matricula">
            ubicacion:<input name="ubicacion"class="easyui-textbox"  style="width:50%">
           
            
            
        <table width="100%" border="0" cellspacing="0">
    <tr>
    <th scope="col">Dep<input type="text" name="mc_departamento"></th>
    <th scope="col">Circ<input type="text"name="mc_circunscripcion"></th>
    <th scope="col">Sec<input type="text"name="mc_seccion"></th>
    <th scope="col">Mza<input type="text"name="mc_manzana"></th>
    <th scope="col">Parc<input type="text"name="mc_parcela"></th>
    <th scope="col">Hoja<input type="text"name="mc_hoja"></th>
    <th scope="col">Coord<input type="text"name="mc_coordenadas"></th>
  </tr>
</table>
         </div>
        <div data-options="region:'south',split:true" style="height:100px;" >
        
        <div class="easyui-layout" data-options="fit:true" >
            <div data-options="region:'west',split:true" style="width:300px;padding:10px"title="Medidas - Lindero Y Sup">
                <input class="easyui-textbox" name="medidas" style="width:100%;height:60px">
                
            </div>
            
            <div data-options="region:'center'" style="width:100%;padding:5px">
               <div class="easyui-tabs" id="tabs" style="width:100%">
        
    </div>
            </div>
        </div>
   

         </div>
        <div data-options="region:'east',split:true"  style="width:200px;" title="ANTECEDENTE DOMINIAL">
         <div style="margin-bottom:20px">Dominio
                <input class="easyui-textbox" name="dominio" style="width:100%" data-options="label:'Name:dxsdas'">
            </div>
        <div style="margin-bottom:20px">Plano
                <input class="easyui-textbox" name="plano" style="width:100%" data-options="label:'Name:dxsdas'">
            </div>
        </div>
        <div data-options="region:'west',split:true"  style="width:200px;" title="Parcela">
            <div style="margin-bottom:20px">Tipo
                <input class="easyui-textbox"  style="width:100%" data-options="label:'Name:dxsdas'">
            </div>
            <div style="margin-bottom:20px">Unidad
                <input class="easyui-textbox"  style="width:100%" data-options="label:'Name:dxsdas'">
            </div>
            <div style="margin-bottom:20px">Piso
                <input class="easyui-textbox"  style="width:100%" data-options="label:'Name:dxsdas'">
            </div>
            <div style="margin-bottom:20px">Superficie
                <input class="easyui-textbox"  style="width:100%" data-options="label:'Name:dxsdas'">
            </div>
            <div style="margin-bottom:20px">Porcentual
                <input class="easyui-textbox"  style="width:100%" data-options="label:'Name:dxsdas'">
            </div>
            <div style="margin-bottom:20px">Destinada
                <input class="easyui-textbox"  style="width:100%" data-options="label:'Name:dxsdas'">
            </div>
            <div style="margin-bottom:20px">Principales
                <input class="easyui-textbox"  style="width:100%" data-options="label:'Name:dxsdas'">
            </div>
            <div style="margin-bottom:20px">Comple
                <input class="easyui-textbox"  style="width:100%" data-options="label:'Name:dxsdas'">
            </div>
        </div>
        <div data-options="region:'center'" title="Titularidad"  style="width:100%;height:60px">
           
            
            <div id='grid_titularidad' data-options="region:'center',singleSelect:'true',collapsible:'true'" style="width:100%,height:50%">
    
       
      
        </div>
        </div>
    </div>
</form>
    </div>
     
    <script type="text/javascript">

   
   
   
 function ver_titular(){
             
         
    
  
  
         
            $('#grid_titularidad').datagrid({
    url:'backend/consulta_1.php',
    //method:'GET'
   
    columns:[[
        {field:'matricula',title:'MATRICULA',width:100},
        {field:'apellido',title:'APELLIDO',width:200},
        {field:'nombre',title:'NOMBRE',width:200},
        {field:'nro_doc',title:'DNI',width:100,align:'right'},
        {field:'cuit',title:'CUIT',width:180,align:'right'}
       
     
        
        
    ]]

});
            $('#grid_titularidad').datagrid('reload');
           
     
        }
        
 


        function ver_asintos(){

            $.ajax({
        dataType: "html",
        type: "POST",
        data:'matricula='+$('#matricula').val(),
        url: 'backend/ver_asientos.php',
              }).done(function (resultado) {
              var datosRecibidos = JSON.parse(resultado);
              var lista="";
              var count=0;

                $.each( datosRecibidos, function ( key, value ) {
                    
                $('#tabs').tabs('add',{
                title: 'Asiento Nro:'+value.nro_asiento, 
                content: '<div style="padding:10px">'+value.datos_varios+'</div>', 
                closable: true });

               count++;
            
                });
               
              
             

        });
    
        }

      
    </script>