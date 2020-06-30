<?php
?>
<!-- cuadra buscar  -->
<div id="dlg_buscar_folio" class="easyui-window" title="Buscar Folio" data-options="iconCls:'icon-search'" closed="true"style="width:100%"
 top='180' border='thin' cls='c6' >
<!--<div id="dlg" class="easyui-window" style="width:100%" closed="true"  border='thin' cls='c6' top='10'left='630'>-->
        <form id="fm" method="post" novalidate style="margin:0;padding:30px 70px">
            <div style="margin-bottom:20px;font-size:14px;border-bottom:1px solid #ccc">Buscar Folios</div>
            <table>
              <tr>
                <td>
                  <div style="margin-bottom:10px">Criterio
                <select class="easyui-combobox" name="state"  labelPosition="top" style="width:100%;">
                <option value="AL">APELLIDO</option>
                <option value="AK">NOMBRE</option>
                <option value="AZ">MATRICULA</option>
                <option value="AR">UBICACION</option>
                <option value="CA">CIRCUNSCRIPCION</option>
                <option value="CO">SECCION</option>
                 <option value="CO">MANZANA</option>
                 <option value="CO">PARCELA</option>
            </select>
                <input name="busca_1" id="busca_1"class="easyui-textbox" required="true" label="Busqueda" >
                 <a href="#" class="easyui-linkbutton" iconCls="icon-search"   onclick="buscar($('#busca_1').val());">Buscar</a>
            </div>
          </td>
        </tr>
                
            </table>
        </form>
        <div id='grid_1' data-options="region:'center',singleSelect:'true',collapsible:'true'" style="width:100%,height:50%">
    
       
       </div>

    </div>
    <!-- cuadro buscar  -->