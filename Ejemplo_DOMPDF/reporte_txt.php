<?php

header("Content-type: application/vnd.ms-txt");
header("Content-Disposition: attachment; filename=Reporte_Personal_usuarios.txt");


		$conexion=mysql_connect("localhost","root","");
		mysql_select_db("proyecto",$conexion);
		
		
		
$sql=mysql_query("select * from tasnego");
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

	<?php echo $id_cliente; ?>
	<?php echo $usuario; ?>
	<?php echo $password; ?>
	<?php echo $documento; ?>
     <?php echo $telefono; ?>
	<?php echo $direccion; ?>        
    <?php echo $rol; ?>                      

  
      <?php
  }
	
    ?>
  
  
    	

