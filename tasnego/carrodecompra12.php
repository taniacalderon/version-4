   <html>
<title>compras</title>
<style type="text/css">
<!--
.Estilo3 {color: #0080FF}
.Estilo8 {font-size: xx-large}
.Estilo9 {color: #0080FF; font-size: xx-large; }
.Estilo10 {color: #00FF66; font-size: xx-large; }
body {
	background-image: url(../imagenes%20de%20fondo/fondoperpetua2.gif);
	background-repeat: repeat;
}
-->
</style>
<body>
<div id="jump">
  <p class="hidden">&nbsp;</p>
</div>
<div id="header">
  <!-- header -->
  <div id="headerinner">
    <!-- headerinner -->
    <div id="logo">
    
      <!-- LOGO -->
      <a style="outline: none;"></a>
      <!-- /LOGO -->
    </div>
    <p align="center" class="Estilo3"><span class="Estilo8">TASNEGO </span></p>
    <p align="center" class="Estilo3"><a class="Estilo3"><img src="Imagen1.png" alt="logo" width="133" height="137" /></a></p>
    <p align="center" class="Estilo9">¡TASNEGO, El que vende todo y No deja  nada!</p>
  </div>
</div>
<p>&nbsp;</p>
<marquee direction="right"><p class="Estilo10">LISTA DE TUS COMPRAS</p></marquee>
<p class="Estilo10">&nbsp;</p>
<p class="Estilo9">&nbsp;</p>

<form id="form1" name="form1" method="post" action="../index.php?controller=administrador&accion=index">  <input type="submit" name="button" id="button" value="cerrar sesion" /></form>
</body>
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
//    <td>'.$res['id'].'</td>
//    <td>'.$res['nombre'].'</td>
//    <td>'.$res['password'].'</td>
//  </tr>
//  ';
//  }
  
  
      
  $tbHtml="";
  if($query->num_rows>0){
    
          echo "<table border='1px'>
             <header>
                <tr>
                  <th>id_productos</th>
                  <th>categoria</th>
                  <th>precio</th>
                  <th>cantidad</th>
                  <th>total</th>
              
                  </tr>
            </header>";
    

    
    while($res=$query->fetch_array())
    {
// ConfiguraciÃ³n imagen, traer ubicaciÃ³n de la tabla y luego colocar dentro
// del html para decirle donde esta la imagen
$z=$res['ubicamos'];
$x="<img src='$z' width='150' height='150' alt='Alargada' border='0'>";



    
         echo '<tr>
    <td>'.$res['id_productos'].'</td>
    <td>'.$res['categoria'].$x.'</td>
    <td>'.$res['precio'].'</td>
    <td>'.$res['cantidad'].'</td>
    <td>'.$res['total'].'</td>
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
<html>
<style type="text/css">
body {
  background-image: url(../imagenes%20de%20fondo/fondoperpetua2.gif);
  background-repeat: repeat;
}
</style>
<body>

  
    <form method="post" action="../?controller=aprendiz&accion=index">
        
          <button class="btn btn-info btn-block">anterior pagina</button><div id="bar"> </form>

    </body>
 </html>

