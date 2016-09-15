<?php
require_once 'alumno.entidad.php';
require_once 'alumno.model.php';

// Logica
$alm = new Alumno();
$model = new AlumnoModel();

if(isset($_REQUEST['action']))
{
    switch($_REQUEST['action'])
    {
        case 'actualizar':
            $alm->__SET('id_inventario',              		$_REQUEST['id_inventario']);
            $alm->__SET('productos_ingresados',          			$_REQUEST['productos_ingresados']);
            $alm->__SET('precio_ingresados',       				$_REQUEST['precio_ingresados']);
            $alm->__SET('productos_egresados',            $_REQUEST['productos_egresados']);
			$alm->__SET('precio_egresados',           $_REQUEST['precio_egresados']);
            $alm->__SET('categorias', 		$_REQUEST['categorias']);
			$alm->__SET('conteo', 		$_REQUEST['conteo']);

            $model->Actualizar($alm);
            header('Location: index.php');
            break;

        case 'registrar':
            $alm->__SET('id_inventario',              		$_REQUEST['id_inventario']);
            $alm->__SET('productos_ingresados',          			$_REQUEST['productos_ingresados']);
            $alm->__SET('precio_ingresados',       				$_REQUEST['precio_ingresados']);
            $alm->__SET('productos_egresados',            $_REQUEST['productos_egresados']);
			$alm->__SET('precio_egresados',           $_REQUEST['precio_egresados']);
            $alm->__SET('categorias', 		$_REQUEST['categorias']);
			$alm->__SET('conteo', 		$_REQUEST['conteo']);

            $model->registrar(alm);
            header('Location: index.php');
            break;

        case 'eliminar':
            $model->Eliminar($_REQUEST['id_inventario']);
            header('Location: index.php');
            break;

        case 'editar':
            $alm = $model->Obtener($_REQUEST['id_inventario']);
            break;
    }
}

?>

<!DOCTYPE html>
<html lang="es">
    <head>
        <title>Anexsoft</title>
        <link rel="stylesheet" href="http://yui.yahooapis.com/pure/0.5.0/pure-min.css">
        <style type="text/css">
        body {
	background-image: url(../../imagenes%20de%20fondo/fondoperpetua2.gif);
}
        </style>
    <meta charset="utf-8">
    </head>
    <body >

        <div class="pure-g">
            <div class="pure-u-1-12">
            

                <table class="pure-table pure-table-horizontal">
                    <thead>
                        <tr>
                            <th >productos_ingresados</th>
                            <th >precio_ingresados</th>
                            <th >productos_egresados</th>
                            <th >precio_egresados</th>
							<th >categorias</th>
							<th >conteo</th>
                        </tr>
                    </thead>
                    <?php foreach($model->Listar() as $r): ?>
                        <tr>
                            <td><?php echo $r->__GET('productos_ingresados'); ?></td>
                            <td><?php echo $r->__GET('precio_ingresados'); ?></td>
                            <td><?php echo $r->__GET('productos_egresados'); ?></td>
							<td><?php echo $r->__GET('precio_egresados'); ?></td>
                            <td><?php echo $r->__GET('categorias'); ?></td>
							<td><?php echo $r->__GET('conteo'); ?></td>
                        </tr>
                    <?php endforeach; ?>
                </table>     
              
            </div>
        </div>
<form method="post" action="index.html">
				
					<button class="btn btn-info btn-block">anterior pagina</button><div id="bar">
       
      </form>
    </body>
</html>



