<?php 
session_start();
if ($_SESSION['doc_administrador']=="" || $_SESSION['doc_administrador']==null) {
	header("location:index.php");
}



 ?>
<style type="text/css">
body {
	background-image: url(../../imagenes%20de%20fondo/fondoperpetua2.gif);
}
</style>

<center><h1>  PAGINA DE ADMINISTRADOR </h1>
</center>



<html><center>
<a href="../explicacion/views/reportes.html"><h1>Reportes</h1></a>
<a href="../explicacion/tasnego/crudcliente/index.html"><h1>Gestion De Usuario </h1></a>
<a href="../explicacion/tasnego/crudproductos/index.html"><h1>Gestion De Productos</h1></a>
<a href="../explicacion/tasnego/crudinventario/index.html"><h1>Gestion De inventario</h1>
</a><a href="../explicacion/views/subir/archivo.html"><h1>Subir las imagenes de los productos</h1></a>
<a href="../explicacion/views/subir/6reportehtmlqli1.php"><h1>Listado de los productos</h1></a>


<button class="btn btn-info"><span class="glyphicon glyphicon-log-out"></span> <a href="?views/administrador/index.php=salir">SALIR</a></button>
</center>
</body>
</html>
</html>

