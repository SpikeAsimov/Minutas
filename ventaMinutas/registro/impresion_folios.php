<div id="win-impresio" class="easyui-window" title="Impresion de Folio"  closed="true"style="width:100%;max-width:400px;padding:30px 60px;"  >

        <form id="ff" method="post">
        	<div style="margin-bottom:20px">Movimientos
                <select class="easyui-combobox" name="language" label="Language" style="width:100%">
                	<option value="ar">Titularidades</option>
                	<option value="bg">Gravamenes</option>
                	<option value="ca">Cancelaciones</option>
                	     	</select>
            </div>
            <div style="margin-bottom:20px">Desde
                <select class="easyui-combobox" name="language" label="Language" style="width:100%">
                	<option value="ar">Frente</option>
                	<option value="bg">Dorso</option>
        	     	</select>
            </div>
            <div style="margin-bottom:20px">Matricula
                <input class="easyui-textbox" name="matricula" style="width:100%" data-options="label:'Name:',required:true">
            </div>
            <a href="#" class="easyui-linkbutton" target='popup'   onclick=[window.open('folio/folio.html','name','width=1500,height=400')] data-options="iconCls:'icon-print'" style="width:80px">Imprimir</a>
            
        </form>
       
    </div>