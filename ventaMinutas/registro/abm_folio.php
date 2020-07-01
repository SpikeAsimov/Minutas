
<!-- cuadro folio  -->

<div id="win-folio_abm" class="easyui-window" title="--Folio--"  closed="true"style="width:100%" border='thin' cls='c6' >
<!--<div id="dlg" class="easyui-window" style="width:100%" closed="true"  border='thin' cls='c6' top='10'left='630'>-->
        <form id="fm-folio_abm" method="post" novalidate style="margin:0;padding:30px 70px">
            <div style="margin-bottom:20px;font-size:14px;border-bottom:1px solid #ccc">
             <a href="#" class="easyui-linkbutton" data-options="iconCls:'icon-large-picture'" target='popup'   onclick=[window.open('imagenes/folios/folio_prueba.jpg','name','width=600,height=400')]>Ver Folio Digital</a>
            <a href="#" class="easyui-linkbutton"  data-options="iconCls:'icon-print'">Imprimir</a>
            <a href="#" class="easyui-linkbutton" onclick="ver_asintos()" data-options="iconCls:'icon-edit'">Ver Asientos</a>
            <a href="#" class="easyui-linkbutton" onclick="ver_titular()" data-options="iconCls:'icon-edit'">Ver Titulares</a>
            <a href="#" class="easyui-linkbutton" onclick="matricula_cat()" data-options="iconCls:'icon-edit'">Corregir Matricula Catstral</a>
            <a href="#" class="easyui-linkbutton" onclick="matricula_cat()" data-options="iconCls:'icon-edit'">Nuevo Asiento</a>
            
            </div>
        <div id="cc" class="easyui-layout" style="width:100%;height:310px;">
        <div data-options="region:'north',split:true"  title="Datos Catastrales"style="height:100px">
            <input type="text" id="matricula" name="matricula">
            ubicacion:<input name="ubicacion"class="easyui-textbox"  style="width:50%">
            Mc:<input name="mc" id="mc"  style="width:15%">
            
            
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
     <div id="dlg" class="easyui-dialog" style="width:600px"
            closed="true" buttons="#dlg-buttons-mc">
        <form id="fm" method="post" novalidate style="margin:0;padding:30px 70px">
            <div style="margin-bottom:20px;font-size:14px;border-bottom:1px solid #ccc">Corregir Matricula Catastral</div>
           
             
                
            Nomenclatura: Departamento-Circuncrpcion-Seccion-Manzana-Parcela
            <div style="margin-bottom:10px">
                <label>
                <select name="dep" id="dep" class="easyui-combobox">
  <option value="01">capital</option>
  <option value="02">sanagasta</option>
  <option value="03">castro barros</option>
  <option value="04">arauco</option>
  <option value="05">san blas de los sauces</option>
  <option value="06">famatina</option>
  <option value="07">chilecito</option>
  <option value="08">villa union</option>
  <option value="09">gral lamadrid</option>
  <option value="10">vinchina</option>
  <option value="11">independencia</option> 
  <option value="12">chamical</option>
  <option value="13">gral. belgrano</option>
  <option value="14">gral. ortiz de ocampo</option>
  <option value="15">rosario v. pañaloza</option>
  <option value="16">gral. san martin</option>
  <option value="17">gral. juan f. quiroga</option>
   <option value="18">gral. angel v. peñaloza</option>
   
  
</select>
-
<select name="circ" id="circ" class="easyui-combobox">
  <option value="0000I">I</option>
  <option value="000II">II</option>
  <option value="00III">III</option>
  <option value="000IV">IV</option>
  <option value="0000V">V</option>
  <option value="000VI">VI</option>
  <option value="00VII">VII</option>
  <option value="0VIII">VIII</option>
  <option value="000IX">IX</option>
  <option value="0000X">X</option>
  <option value="000XI">XI</option>
  <option value="00XII">XII</option>
  <option value="0XIII">XIII</option>
  <option value="00XIV">XIV</option>
  <option value="000XV">XV</option>
  <option value="00XVI">XVI</option>
</select>
      
      -
      <select name="sec"  class="easyui-combobox" style="width:50px">
        <option value="0A">A</option>
        <option value="0B">B</option>
        <option value="0C">C</option>
        <option value="0D">D</option>
        <option value="0E">E</option>
        <option value="0F">F</option>
        <option value="0G">G</option>
        <option value="0H">H</option>
        
      </select>
      -
<input name="mza" type="text" id="mza" size="5" maxlength="5" class="easyui-textbox" />
-
<input name="parc" type="text" id="parc" size="5" maxlength="5" class="easyui-textbox"  />
  </label>
 
            </div>
            </div>
            </div>
             <div id="dlg-buttons-mc">
        <a href="javascript:void(0)" class="easyui-linkbutton" onclick="generar_mc();">Confirmar</a>
        <a href="javascript:void(0)" class="easyui-linkbutton" onclick="javascript:$('#dlg').dialog('close')">Cerrar</a>
    </div>
    <script type="text/javascript">

   
    
   
 function ver_titular(){
             
         
    
  
  
         
            $('#grid_titularidad').datagrid({
    url:'backend/consulta_1.php',
    //method:'GET'
    toolbar:[{
         iconCls: 'icon-cancel',
        handler: function(){  

               var row = $('#grid_titularidad').datagrid('getSelected');
             
               $.get('backend/eliminar_titular.php',{dni:row.dni,matricula:row.matricula},
                function(result){
                           
                                $('#grid_titularidad').datagrid('reload');    // reload the user data
                            });
                  $.messager.alert('Alerta','Esta Modificacion sera Sera Reflejada En los sistemas de Dgc(Dire.  Gral. de Catastro)  y Dgip (Dir. Gral. Ingr. Prov.)','warning');
             
                                }
    },'-',{
        iconCls: 'icon-add',
        handler: function(){
           
        },

      }],

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

        function matricula_cat(){
$('#dlg').dialog('open').dialog('center').dialog('setTitle','');
            //$('#fm').form('clear');
            //url = 'backend/carga_1.php';

        }

        function generar_mc(){
var dep = $('#dep').val();
var circ = $('#circ').val();
var sec = $('#sec').val();
var mza = $('#mza').val();
var parc = $('#parc').val();
 //alert(dep+"-"+circ+"-"+sec+"-"+mza+"-"+parc);
$('#mc').val(dep+"-"+circ+"-"+sec+"-"+mza+"-"+parc);
$('#dlg').dialog('close');
        }
    </script>