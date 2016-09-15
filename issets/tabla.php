
 <?php
error_reporting(E_ERROR);
  session_start();
     include '../../issets/conexion.php'
  if(isset($_SESSION['issets'])){
    if(isset($_SET['id_productos'])){
          $arreglo=$_SESSION['
          issets'];
          $encontro=false;
          $numero=0;
          for($i=0;$i<count($arreglo);$i++){
            if($arreglo[$i]['Id_productos']==$_SET['id_productos']){
              $encontro=true;
              $numero=$i;
            }
          }
          if($encontro==true){
            $arreglo[$numero]['Cantidad']=$arreglo[$numero]['Cantidad']+1;
            $_SESSION['issets']=$arreglo;
          }else{
            $categoria="";
            $precio=0;
            $ubicacion="";
            $re=mysql_query("select * from productos where id=".$_SET['id_productos']);
            while ($f=mysql_fetch_array($re)) {
              $xategoria=$f['categoria'];
              $precio=$f['precio'];
              $ubicacion=$f['ubicacion'];
            }
            $datosNuevos=array('Id_productos'=>$_SET['id_productos'],
                    'Categoria'=>$categoria,
                    'Precio'=>$precio,
                    'ubicacion'=>$ubicacion,
                    'Cantidad'=>1);

            array_push($arreglo, $datosNuevos);
            $_SESSION['issets']=$arreglo;

          }
    }




  }else{
    if(isset($_SET['id_productos'])){
      $categoria="";
      $precio=0;
      $ubicacion="";
      $re=mysql_query("select * from producto where id_productos=".$_SET['id_productos']);
      while ($f=mysql_fetch_array($re)) {
        $nombre=$f['categoria'];
        $precio=$f['precio'];
        $ubicacion=$f['ubicacion'];
      }
      $arreglo[]=array('Id_productos'=>$_SET['id_productos'],
              'Categoria'=>$categoria,
              'Precio'=>$precio,
              'ubicacion'=>$ubicacion,
              'Cantidad'=>1);
      $_SESSION['carrito']=$arreglo;
    }
  }
?>

<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8"/>
	<title>Carrito de Compras</title>
	<link rel="stylesheet" href="css/style.css">
	<script type="text/javascript" src="http://code.jquery.com/jquery-1.10.2.min.js"></script>
	<script type="text/javascript"  src="./js/scripts.js"></script>
</head>
<body>
	<header>
		<img src="../explicacion/carrito/imagenes/logo.png" id="logo">
		<a href="../explicacion/carrito/tabla.php" title="ver tabla"></a>
	</header>
	<section>
		<?php
			$total=0;
			if(isset($_SESSION['issets'])){
			$datos=$_SESSION['issets'];
			
			$total=0;
			for($i=0;$i<count($datos);$i++){
				
	?>
				<div class="producto">
					<center>
						<img src="../explicacion/carrito/productos/<?php echo $datos[$i]['ubicacion'];?>"><br>
						<span ><?php echo $datos[$i]['categoria'];?></span><br>
						<span>Precio: <?php echo $datos[$i]['Precio'];?></span><br>
						<span>Cantidad: 
							<input type="text" value="<?php echo $datos[$i]['Cantidad'];?>"
							data-precio="<?php echo $datos[$i]['Precio'];?>"
							data-id="<?php echo $datos[$i]['Id_productos'];?>"
							class="cantidad">
						</span><br>
						<span class="subtotal">Subtotal:<?php echo $datos[$i]['Cantidad']*$datos[$i]['Precio'];?></span><br>
						<a href="#" class="eliminar" data-id="<?php echo $datos[$i]['Id_productos']?>">Eliminar</a>
					</center>
				</div>
			<?php
				$total=($datos[$i]['Cantidad']*$datos[$i]['Precio'])+$total;
			}
				
			}else{
				echo '<center><h2>No has añadido ningun producto</h2></center>';
			}
			echo '<center><h2 id="total">Total: '.$total.'</h2></center>';
			if($total!=0){
					//echo '<center><a href="./compras/compras.php" class="aceptar">Comprar</a></center>';
			?>
				
</body>
</html>