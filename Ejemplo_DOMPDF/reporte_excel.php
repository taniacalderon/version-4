<?php

header("Content-type: application/vnd.ms-excel");
header("Content-Disposition: attachment; filename=Reporte_Personal_usuarios.xls");


		$conexion=mysql_connect("localhost","root","");
		mysql_select_db("proyecto",$conexion);		


?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>LISTA DE USUARIOS</title>
</head>
<body>
<table width="100%" border="2" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td colspan="8" bgcolor="skyblue"><CENTER><strong>REPORTE DE LA TABLA USUARIOS</strong></CENTER></td>
  </tr>
  <tr bgcolor="blue">
    <td width="15%" bgcolor="#009933"><strong>id_cliente</strong></td>
    <td width="12%"><strong>usuario</strong></td>
    <td width="14%"><strong>password</strong></td>
    <td width="17%"><strong>documento</strong></td>
    <td width="13%"><strong>telefono</strong></td>
    <td width="16%"><strong>direccion</strong></td>
    <td width="8%"><strong>correo</strong></td>
    <td width="5%"><strong>rol</strong></td>
  </tr>
  
<?PHP
		
$sql=mysql_query("select id_cliente,usuario,password,documento,telefono,direccion,correo,rol from tasnego");
while($res=mysql_fetch_array($sql)){		

	$id_cliente=$res["id_cliente"];
	$usuario=$res["usuario"];
	$password=$res["password"];
	$documento=$res["documento"];
	$telefono=$res["telefono"];
	$direccion=$res["direccion"];	
	$correo=$res["correo"];	
	$rol=$res["rol"];			

?>  
 <tr>
	<td><?php echo $id_cliente; ?></td>
	<td><?php echo $usuario; ?></td>
	<td><?php echo $password; ?></td>
	<td><?php echo $documento; ?></td>
	<td><?php echo $telefono; ?></td>
	<td><?php echo $direccion; ?></td>        
    <td><?php echo $correo; ?></td> 
    <td><?php echo $rol; ?></td>                
 </tr> 
  <?php
}
  ?>
</table>
</body>
</html>