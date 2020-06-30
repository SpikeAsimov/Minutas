<?php

@$letra=$_POST['letra'];
@$desde=$_POST['desde'];
@$hasta=$_POST['hasta'];

for ($i=$desde ; $i < $hasta ; $i++ ) { 
	$numero=$letra.str_pad($i, '10', '0', STR_PAD_LEFT);
	

	echo '<table width="1541" height="202" border="0" cellpadding="1" cellspacing="10">
  <tr>
    <th width="735" scope="col"><table width="674" height="266" border="1" cellpadding="0" cellspacing="0">
      <tr>
        <th height="71" colspan="3" scope="col"><p><img src="untitled.jpg" alt="" width="52" height="57"></p>
  <p>Registro de La Propiedad Inmuebl</p><p>www.tierraslarioja.com.ar</p></th>
        <th colspan="3" scope="col"><p><img src="untitled.jpg" alt="" width="52" height="57"></p>
          <p>Registro de La Propiedad Inmueble</p><p>www.tierraslarioja.com.ar</p></th>
        </tr>
      <tr>
        <td width="177" align="center" class="numero">'.$numero.'</td>
        <td colspan="2" align="center"><img src="barcode.php?text='.$numero.'"></td>
        <td width="186" align="center" class="numero">'.$numero.'</td>
        <td colspan="2" align="center"><img src="barcode.php?text='.$numero.'"></td>
        </tr>
      <tr>
        <td align="center">Minutas</td>
        <td colspan="2" align="center">&nbsp;</td>
        <td align="center">Minutas</td>
        <td colspan="2" align="center">&nbsp;</td>
      </tr>
      <tr>
        <td align="center">Acto</td>
        <td colspan="2" align="center">&nbsp;</td>
        <td align="center">Acto</td>
        <td colspan="2" align="center">&nbsp;</td>
      </tr>
      <tr>
        <td rowspan="2" align="center">T.U</td>
        <td align="center">Si</td>
        <td align="center">Reg:</td>
        <td rowspan="2" align="center">T.U</td>
        <td width="26" align="center">Si</td>
        <td width="97" align="center">Reg:</td>
      </tr>
      <tr>
        <td width="24" align="center">No</td>
        <td width="102" align="center">&nbsp;</td>
        <td align="center">No</td>
        <td align="center">&nbsp;</td>
      </tr>
    </table></th>
  </tr>
</table>';
	
  
}



?>
<style type="text/css">
.numero {
	font-weight: bold;
	font-size: 24px;
}
</style>


