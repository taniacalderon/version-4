
<?php
 
$host="localhost";
$usuario="root";
$password="";
$db="proyecto";

$conexion = new mysqli($host,$usuario,$password,$db);
$sql = "select * from productos";
$query=$conexion->query($sql);
 
// $conexion = mysql_connect("localhost","root","");
//mysql_select_db("usuario",$conexion);
// $sql= mysql_query("select * from users");
//while($res=mysql_fetch_array($sql)){
	
//echo'<tr>
//		<td>'.$res['id'].'</td>
//		<td>'.$res['nombre'].'</td>
//		<td>'.$res['password'].'</td>
//	</tr>
//	';
//	}
	
	
			
	$tbHtml="";
	if($query->num_rows>0){
		
	        echo "<table border='1px'>
             <header>
                <tr>
                  <th>id_productos</th>
                  <th>categoria</th>
                  <th>precio</th>
              
                  </tr>
            </header>";
		

		
		while($res=$query->fetch_array())
		{


$a=$res['ubicar'];
$b="<img src='$a' width='150' height='150' alt='Alargada' border='0'>";
$c="0";
$d="comprar";
$e=$res['id_productos'];
$f="<form id='formulario' name='formulario' action='../../tasnego/carrito.php' method='post' >";
$g="<input type='text' name='cantidad' value='$c'>";
$j="<input type='text' name='id_productos' value='$e' size='1' maxlegth='1' >";
$i="<input type='submit' name='enviar' value='$d'> </form> ";
		
   		echo '<tr>
		<td>'.$res['id_productos'].$f.'</td>
		<td>'.$res['categoria'].$b.'</td>
		<td>'.$res['precio'].$g.$j.$i.'</td>
	</tr>
	';

// Configuración imagen, traer ubicación de la tabla y luego colocar dentro
// del html para decirle donde esta la imagen

		}
		$tbHtml.= "</table>";
	}
	else
	{
	echo "No hay resultados";
	}
	//cambiar los datos por productos
	
?>
<html>
<style type="text/css">
body {
	background-image: url(../imagenes%20de%20fondo/fondoperpetua2.gif);
	background-repeat: repeat;
}
</style>
<body>
	  <form method="post" action="../../index.php?controller=aprendiz&accion=index">
				
					<button class="btn btn-info btn-block">anterior pagina</button><div id="bar"> </form>

    </body>
</html>