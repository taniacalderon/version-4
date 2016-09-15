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
            $alm->__SET('id_cliente',              		$_REQUEST['id_cliente']);
            $alm->__SET('usuario',          			$_REQUEST['usuario']);
            $alm->__SET('password',       				$_REQUEST['password']);
            $alm->__SET('documento',            $_REQUEST['documento']);
			$alm->__SET('telefono',           $_REQUEST['telefono']);
            $alm->__SET('direccion', 		$_REQUEST['direccion']);
			$alm->__SET('correo', 		$_REQUEST['correo']);
			$alm->__SET('rol', 		$_REQUEST['rol']);

            $model->Actualizar($alm);
            header('Location: index.php');
            break;

        case 'registrar':
            $alm->__SET('id_cliente',              		$_REQUEST['id_cliente']);
            $alm->__SET('usuario',          			$_REQUEST['usuario']);
            $alm->__SET('password',       				$_REQUEST['password']);
            $alm->__SET('documento',            $_REQUEST['documento']);
			$alm->__SET('telefono',           $_REQUEST['telefono']);
            $alm->__SET('direccion', 		$_REQUEST['direccion']);
			$alm->__SET('correo', 		$_REQUEST['correo']);
			$alm->__SET('rol', 		$_REQUEST['rol']);

            $model->registrar(alm);
            header('Location: index.php');
            break;

        case 'eliminar':
            $model->Eliminar($_REQUEST['id_cliente']);
            header('Location: index.php');
            break;

        case 'editar':
            $alm = $model->Obtener($_REQUEST['id_cliente']);
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
                            <th >usuario</th>
                            <th >password</th>
                            <th >documento</th>
                            <th >telefono</th>
							<th >direccion</th>
							<th >correo</th>
                            <th >rol</th>
                        </tr>
                    </thead>
                    <?php foreach($model->Listar() as $r): ?>
                        <tr>
                            <td><?php echo $r->__GET('usuario'); ?></td>
                            <td><?php echo $r->__GET('password'); ?></td>
                            <td><?php echo $r->__GET('documento'); ?></td>
							<td><?php echo $r->__GET('telefono'); ?></td>
                            <td><?php echo $r->__GET('direccion'); ?></td>
							<td><?php echo $r->__GET('correo'); ?></td>
                            <td><?php echo $r->__GET('rol'); ?></td>
                        </tr>
                    <?php endforeach; ?>
                </table>     
              
            </div>
        </div>
  <form method="post" action="index.html">
				
					<button class="btn btn-info btn-block">pagina anterior</button><div id="bar">
       
                    </form>
    </body>
</html>



