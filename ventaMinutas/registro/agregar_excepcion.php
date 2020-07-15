    <div id="dlg_agregar_excepcion" class="easyui-dialog" closed="true" title="Agregar Excepcion" style="width:100%;max-width:400px;padding:30px 60px;">
        <form id="form_excepcion" method="post">            
            <div style="margin-bottom:20px">
				<label for="motivo">Motivo:</label>					
				<select class="easyui-combobox" name="motivo" label="Motivo : " style="width:100%">
                	<option value="rpi">Pedido del Registro de la Propiedad</option>
                	<option value="social" selected="selected">Pedido del Area Social</option>                	                	
                </select>
            </div>
            <div style="margin-bottom:20px">
        		<label for="cliente">Cliente:</label>				
                <input class="easyui-textbox" name="cliente" style="width:100%" data-options="label:'Cliente:',required:true">
            </div>            
            
        </form>
        <div style="text-align:center;padding:5px 0">
            <a href="javascript:void(0)" class="easyui-linkbutton" onclick="submitForm()" style="width:100px">Aceptar</a>
            <a href="javascript:void(0)" class="easyui-linkbutton" onclick="clearForm()" style="width:100px">Cancelar</a>
        </div>
    </div>