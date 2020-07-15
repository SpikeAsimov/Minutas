<div id="win_cargar_stock" class="easyui-window" closed="true" title="Cargar Stock" style="width:100%;max-width:500px;padding:10px 20px;">
	<div style="margin-bottom:20px">
		<label for="cantidad">Cantidad:</label>	
		<input id="cantidad" type="text" class="easyui-text" required="required">
	</div>
	<br>	
	<div style="text-align:center;padding:5px 0">
		<a href="javascript:void(0)" class="easyui-linkbutton" onclick="submitForm()" style="width:100px">Aceptar</a>
	</div>
	<div id='grid_consulta_ventas' data-options="region:'center',singleSelect:'true',collapsible:'true'" style="width:100%,height:100%">
		<table class="easyui-datagrid">
		    <thead>
		        <tr>
		            <th data-options="field:'Fecha',width:100">Fecha:</th>
		            <th data-options="field:'Cantidad',width:100">Minuta:</th>
		            <th data-options="field:'Total',width:100">Total cantidad:</th>
		            <th data-options="field:'Recaudado',width:100">Total recaudado:</th>
		        </tr>
		    </thead>
		    <tbody>
		        <tr>
		            <td>02/06/</td><td>H</td><td>23</td><td>2300</td>
		        </tr>
		        <tr>
		            <td>02/06/</td><td>G</td><td>12</td><td>1200</td>
		        </tr>
		    </tbody>
		</table>

	</div>
</div>