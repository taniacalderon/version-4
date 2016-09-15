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
            $alm->__SET('id_productos',              		$_REQUEST['id_productos']);
            $alm->__SET('referencia',          			$_REQUEST['referencia']);
            $alm->__SET('categoria',       				$_REQUEST['categoria']);
            $alm->__SET('marca',            $_REQUEST['marca']);
			$alm->__SET('precio',           $_REQUEST['precio']);
            $alm->__SET('ubicacion',           $_REQUEST['ubicacion']);
            $model->Actualizar($alm);
            header('Location: index.php');
            break;

        case 'registrar':
            $alm->__SET('id_productos',              		$_REQUEST['id_productos']);
            $alm->__SET('referencia',          			$_REQUEST['referencia']);
            $alm->__SET('categoria',       				$_REQUEST['categoria']);
            $alm->__SET('marca',            $_REQUEST['marca']);
			$alm->__SET('precio',           $_REQUEST['precio']);
			$alm->__SET('ubicacion',           $_REQUEST['ubicacion']);

            $model->registrar(alm);
            header('Location: index.php');
            break;

        case 'eliminar':
            $model->Eliminar($_REQUEST['id_productos']);
            header('Location: index.php');
            break;

        case 'editar':
            $alm = $model->Obtener($_REQUEST['id_productos']);
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
	background-repeat: repeat;
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
                            <th >referencia</th>
                            <th >categoria</th>
                            <th >marca</th>
                            <th >precio</th>
                            <th >ubicacion</th>
                        </tr>
                    </thead>
                    <?php foreach($model->Listar() as $r): ?>
                        <tr>
                            <td><?php echo $r->__GET('referencia'); ?></td>
                            <td><?php echo $r->__GET('categoria'); ?></td>
                            <td><?php echo $r->__GET('marca'); ?></td>
							<td><?php echo $r->__GET('precio'); ?></td>
                            <td><?php echo $r->__GET('ubicacion'); ?></td>
                        </tr>
                    <?php endforeach; ?>
                </table>     
              
            </div>
        </div>
  <form method="post" action="index.html">
				
					<button class="btn btn-info btn-block">anterior pagina</button><div id="bar"> </form>
    </body>
</html>



