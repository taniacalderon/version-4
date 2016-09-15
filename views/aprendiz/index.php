<html>
<title>
<body>
<style type="text/css">
body {
	background-color: #FFFFFF;
	background-image: url(../imagenes%20de%20fondo/fondoperpetua2.gif);
}
.Estilo3 {color: #0080FF}
.Estilo8 {font-size: xx-large}
.Estilo9 {color: #0080FF; font-size: xx-large; }
.Estilo10 {font-size: 24px}
</style>


<title>TASNEGO</title>

</head>

		<!-- headerinner -->
			<div id="logo"> 
			<!-- LOGO -->
				<a href="" style="outline: none;"></a>
			<!-- /LOGO --> 
			</div>
			<p align="center" class="Estilo3"><span class="Estilo8"> TASNEGO </span></p>
			<p align="center" class="Estilo3"><a href="" class="Estilo3"><img src="views/subir/uploads/logo.png" alt="logo" width="133" height="137" /></a></p>
			<p align="center" class="Estilo9">TASNEGO, El que vende todo y No deja nada</p>
			<div id="contextmenue"> 
			<!-- FEATUREMENUE -->
				
			<!--
				<br clear="all" /><br clear="all" />
				<h2 class="hidden">Suche und weitere Links:</h2>
				-->			</div>
				<div class="navbar navbar-default">
	<div class="container">
		<div class="navbar-header">
			<a href="" class="navbar-brand">TASNEGO</a>
			</div>
			<ol class="nav navbar-nav">
			<li><a href="../explicacion/index.php"><span class="glyphicon glyphicon-home"></span>cerrar sesión</a></li>
			<li><a href="../explicacion/tasnego/perfil1.html"><span class="glyphicon glyphicon-asterisk" ></span> Quienes Somos</a></li>
			
<li class=" dropdown dropdown-pencil">
				<a href="" class="dropdown-toggle" data-toggle="dropdown">Conocenos<span class="caret"></span></a>
				<ul class="dropdown-menu">
					<li><a href="../explicacion/tasnego/vision.html"><img src="../explicacion/views/img/eyes.png" width="20" height="20"/>                  Visión</a><li>
					<li><a href="../explicacion/tasnego/misión.html"><img src="../explicacion/views/img/gt.jpg" width="25" height="25"/>                 Misión </a></li>		
				</ul>
			</li>
        <li class="dropdown">
				<a href="" class="dropdown-toggle" data-toggle="dropdown"> Productos<span class="caret"></span></a>
				<ul class="dropdown-menu">
					<li><a href="../explicacion/tasnego/descripciondelosproductos1.html">CARACTERISTICAS </a></li>
					<li><a href="../explicacion/views/subir/motora.php"><img id="myeyes" scr="eyes.png"  style="display:none;"><img src="../explicacion/views/img/lo.png" width="25" height="25"/>Productos de Discapacidad motora</a><li>
					<li><a href="../explicacion/views/subir/motora.php"><img src="../explicacion/views/img/bgo.png" width="25" height="25"/>Productos de Discapacidad visual </a></li>
					<li><a href="../explicacion/views/subir/motora.php"><img src="../explicacion/views/img/aoo.png" width="25" height="25"/>Productos de Discapacidad auditiva</a></li>
				  	
				</ul>
				<li>
					<a href="../../explicacion/carrito/index.php"><img src="../explicacion/views/img/carrito.png" width="25" height="25">Añadir a Compra</a>
				</li>
			</li>
		</div>
	</div>
</div>

			<!-- /headerinner --> 
		<h1>TASNEGO </h1>
		</div>
	<!-- /header --> <h2>Contenido</h2>
			  <div id="contentinner2">
					
	<!--  CONTENT ELEMENT, uid:99/text [begin] -->
		<div id="c99" class="csc-default">
		<!--  Text: [begin] -->
		  <h2><strong>Bienvenido a tasnego</strong></h2>
<p class="bodytext">Se penso en la realizacion de una pagina web la cual  consistira en la venta de productos para personas invidentes, en esta se  describiran de manera consistente cada uno de los servicios, sus formas de pago  y el servicio de entrega a su domicilio.</p>
		<!--  Text: [end] -->
			</div>
</body>
</title>
</html>
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
// Configuración imagen, traer ubicación de la tabla y luego colocar dentro
// del html para decirle donde esta la imagen

$z=$res['ubicacion'];
$x="<img src='$z' width='150' height='150' alt='Alargada' border='0'>";



		
         echo '<tr>
		<td>'.$res['id_productos'].'</td>
		<td>'.$res['categoria'].$x.'</td>
		<td>'.$res['precio'].'</td>
	</tr>
	';
		}
		$tbHtml.= "</table>";
	}
	else
	{
	echo "No hay resultados";
	}
	//cambiar los datos por productos
	
?>
<html >
  <head>
    <meta charset="UTF-8">
    <title>10</title>
    
    
    
    
        <link rel="stylesheet" href="../../issets/css/style.css">

    
    
    
  </head>
</style>
<body>

    </body></html>
    

















