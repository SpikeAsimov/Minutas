    <div id="win_nueva_venta" class="easyui-window" closed="true" title="Agregar Venta" style="width:100%;max-width:400px;padding:30px 60px;">
        <form id="form_venta" method="post">            
            <div style="margin-bottom:20px">
				<label for="tipoTramite">Tipo de tramite:</label>					
				<select class="easyui-combobox" name="tipo_tramite" label="Tipo de Tramite" style="width:100%">
                	<option value="tim">Timbrado</option>
                	<option value="min" selected="selected">Minuta</option>                	                	
                </select>
            </div>
            <div style="margin-bottom:20px">
        		<label for="numero">Numero:</label>				
                <input class="easyui-textbox" name="Numero" readonly="true" style="width:100%" data-options="label:'Numero:',required:true">
            </div>            
            <div style="margin-bottom:20px">
				<label for="tipoMinuta">Tipo Minuta:</label>
                <select class="easyui-combobox" name="tipoMinuta" label="Tipo Minuta" style="width:100%">
                	<option value="a" selected="selected">Minuta A</option>
                	<option value="b">Minuta B</option>
                	<option value="c">Minuta C</option>
                	<option value="d">Minuta D</option>
                	<option value="e">Minuta E</option>
                	<option value="f">Minuta F</option>
                	<option value="g">Minuta G</option>
                	<option value="h">Minuta H</option>
                	<option value="i">Minuta I</option>
                	<option value="j">Minuta J</option>
                	<option value="k">Minuta K</option>                
                </select>
            </div>
			<div style="margin-bottom: 20px">
				<label for="esTU">Tramite Urgente:</label>
				<br>
				<input type="radio" id="NO_TU" name="no_esTU" value="NO" selected="selected">
				<label for="NO">NO</label><br>

			    <input type="radio" id="SI_TU" name="si_esTU" value="SI">
				<label for="si">SI</label><br>

		    </div>	    
			
            <div style="margin-bottom:20px">
            	<label for="precio">Precio:</label>
                <input class="easyui-textbox" name="precio" readonly="true" style="width:50px" data-options="label:'Precio:', required:true">
            </div>
            <div style="margin-bottom: 20px">
            	<a href="#" class="easyui-linkbutton" onclick="$('#dlg_agregar_excepcion').window('open')" style="width:150px">Agregar Excepcion</a>	
            </div>
            
        </form>
        <div style="text-align:center;padding:5px 0">
            <a href="javascript:void(0)" class="easyui-linkbutton" onclick="submitForm()" style="width:100px">Cargar Venta</a>
            <a href="javascript:void(0)" class="easyui-linkbutton" onclick="close()" style="width:100px">Cancelar</a>
        </div>
    </div>