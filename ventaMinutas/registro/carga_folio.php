
<div id="win-folio_carga" class="easyui-window" title="--Folio--ABM"  closed="true"style="width:100%" border='thin' cls='c6' >
<!--<div id="dlg" class="easyui-window" style="width:100%" closed="true"  border='thin' cls='c6' top='10'left='630'>-->
     
            <div style="margin-bottom:20px;font-size:14px;border-bottom:1px solid #ccc">
            <button onclick="carga_nuevo();" >Grabar e Informar</button>
            <button onclick="buscar_nuevo_titular();">Cargar Titular</button>
            <label>Carga Digital<input type="file"></label>
           
            </div>
          <form id="fm-carga_folio" method="post" novalidate style="margin:0;padding:30px">
        <div id="cc" class="easyui-layout" style="width:100%;height:350px;">
        <div data-options="region:'north',split:true" title="Matricula Catastral"style="height:100px">
           Matricula<input type="text"name="matricula" id="matricula" class="easyui-textbox"  style="width:200px">
         <table width="100%" border="0" cellspacing="0">
    <tr>
    <th scope="col">Dep <select name="dep" id="dep" class="easyui-combobox" >
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
   
  
</select></th>
    <th scope="col">Circ
       <select name="circ" id="circ" class="easyui-combobox"  style="width:100px">
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
    </th>
    <th scope="col">Sec
<select name="sec" id="sec" class="easyui-combobox" style="width:100px">
        <option value="0A">A</option>
        <option value="0B">B</option>
        <option value="0C">C</option>
        <option value="0D">D</option>
        <option value="0E">E</option>
        <option value="0F">F</option>
        <option value="0G">G</option>
        <option value="0H">H</option>
        
      </select>
    </th>
    <th scope="col">Mza<input type="text"name="mc_manzana" class="easyui-textbox"  style="width:100px"></th>
    <th scope="col">Parc<input type="text"name="mc_parcela"  class="easyui-textbox"  style="width:100px"></th>
    <th scope="col">Hoja<input type="text"name="mc_hoja"  class="easyui-textbox"  style="width:100px"></th>
    <th scope="col">Coord<input type="text"name="mc_coordenadas"  class="easyui-textbox"  style="width:100px"></th>
  </tr>
</table>
         </div>
         
        <div data-options="region:'south',split:true" style="height:100px;" >
        
        <div class="easyui-layout" data-options="fit:true" >
            <div data-options="region:'west',split:true" style="width:300px;padding:10px"title="ANTECEDENTE DOMINIAL">
            
            <div style="margin-bottom:20px">Dominio
                <input class="easyui-textbox" name="Dominio" style="width:100%" data-options="label:'Name:dxsdas'">
            </div>
        <div style="margin-bottom:20px">Plano
                <input class="easyui-textbox" name="Plano" style="width:100%" data-options="label:'Name:dxsdas'">
            </div>
            </div>
            
            <div data-options="region:'center'" style="width:100%;padding:10px">
               <div class="easyui-tabs" style="width:100%">
        <div title="Titularidad del Dominio" style="padding:10px">
            <p style="font-size:14px">
                
            </p>
            
        </div>
        <div title="Otros Derechos Relales Gravamenes Y Correciones" data-options="closable:true" style="padding:10px">
            
            <!--<ul class="easyui-tree" data-options="url:'tree_data1.json',method:'get',animate:true"></ul>-->
        </div>
        <div title="Cancelaciones" data-options="closable:true" style="padding:10px">
            
        </div>
    </div>
            </div>
        </div>
   

         </div>
        
        <div data-options="region:'west',split:true" name="Tipo" style="width:200px;" title="Parcela">
            <div style="margin-bottom:20px">Tipo
                <input class="easyui-textbox"  style="width:100%" data-options="label:'Name:dxsdas'">
            </div>
            <div style="margin-bottom:20px">Unidad
                <input class="easyui-textbox" name="Unidad" style="width:100%" data-options="label:'Name:dxsdas'">
            </div>
            <div style="margin-bottom:20px">Piso
                <input class="easyui-textbox" name="Piso" style="width:100%" data-options="label:'Name:dxsdas'">
            </div>
            <div style="margin-bottom:20px">Superficie
                <input class="easyui-textbox" name="Superficie" style="width:100%" data-options="label:'Name:dxsdas'">
            </div>
            <div style="margin-bottom:20px">Porcentual
                <input class="easyui-textbox" name="Porcentual" style="width:100%" data-options="label:'Name:dxsdas'">
            </div>
            <div style="margin-bottom:20px">Destinada
                <input class="easyui-textbox" name="Destinada" style="width:100%" data-options="label:'Name:dxsdas'">
            </div>
            <div style="margin-bottom:20px">Principales
                <input class="easyui-textbox"  style="width:100%" data-options="label:'Name:dxsdas'">
            </div>
            <div style="margin-bottom:20px">Comple
                <input class="easyui-textbox" name="Comple" style="width:100%" data-options="label:'Name:dxsdas'">
            </div>
        </div>
        <div data-options="region:'center'  " id="titulares" name="titulares" title="Titulares" >
          <div id='grid_titularidad_nuevo' data-options="region:'center',singleSelect:'true',collapsible:'true'" style="width:100%,height:50%">
          </div>    
        </div>

    </div>
   </form>

    </div>


    <div id="buscar_dni" class="easyui-dialog"  style="margin:0;padding:30px 70px"  closed="true" >
         Ingrese DNI:
        <input name="dni" id="dni" class="easyui-textbox" required="true"  style="width:100px">
        <a href="#" class="easyui-linkbutton c6" iconCls="icon-search" onclick="datos_titular($('#dni').val())" style="width:90px">Buscar</a>
        
    </div>
 


    <script type="text/javascript">
    
  var matricula= 10;

 function ver_titular_nuevo(){

  matricula
    $('#nuevo_titular').dialog('close');
    $('#buscar_dni').dialog('close');

     $('#grid_titularidad_nuevo').datagrid({
    url:'backend/consulta_1.php?persona='+matricula,
    //method:'GET'
    /*/
   toolbar:[{
      
        iconCls: 'icon-add',
        handler: function(){
          $('#buscar_dni').dialog('open').dialog('center').dialog('setTitle','Buscar Titular');
            
        }
        }],
/*/
    columns:[[
        {field:'matricula',title:'MATRICULA',width:100},
        {field:'apellido',title:'APELLIDO',width:200},
        {field:'nombre',title:'NOMBRE',width:200},
        {field:'nro_doc',title:'DNI',width:100,align:'right'},
        {field:'cuit',title:'CUIT',width:180,align:'right'}
         ]]

});
            $('#grid_titularidad_nuevo').datagrid('reload');
          
     
        }

        function buscar_nuevo_titular(){
   $('#buscar_dni').dialog('open').dialog('center').dialog('setTitle','Buscar');
            
            
       

     }
  
     function datos_titular(dni){





     }
    </script>

