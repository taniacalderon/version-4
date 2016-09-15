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
            $alm->__SET('id_productos',            	 	 $_REQUEST['id_productos']);
            $alm->__SET('referencia',         			 $_REQUEST['referencia']);
            $alm->__SET('categoria',        				 $_REQUEST['categoria']);
			$alm->__SET('marca',             $_REQUEST['marca']);
            $alm->__SET('precio',            $_REQUEST['precio']);
			 $alm->__SET('ubicacion',            $_REQUEST['ubicacion']);

            $model->Actualizar($alm);
            header('Location: modificar.php');
            break;

        case 'registrar':
            $alm->__SET('id_productos',            	 	 $_REQUEST['id_productos']);
            $alm->__SET('referencia',         			 $_REQUEST['referencia']);
            $alm->__SET('categoria',        				 $_REQUEST['categoria']);
			$alm->__SET('marca',             $_REQUEST['marca']);
            $alm->__SET('precio',            $_REQUEST['precio']);
			 $alm->__SET('ubicacion',            $_REQUEST['ubicacion']);

            $model->Registrar($alm);
            header('Location: index.html');
            break;

        case 'eliminar':
            $model->Eliminar($_REQUEST['id_productos']);
            header('Location: index.html');
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
                
                <form action="?action=<?php echo $alm->id_productos > 0 ? 'actualizar' : 'registrar'; ?>" method="post" class="pure-form pure-form-stacked" >
                    <input type="hidden" name="id_productos" value="<?php echo $alm->__GET('id_productos'); ?>" />
                    
                    <table >
                        <tr>
                            <th >referencia</th>
                            <td><input type="text" name="referencia" value="<?php echo $alm->__GET('referencia'); ?>"  /></td>
                        </tr>
                        <tr>
                            <th >categoria</th>
                            <td><input type="text" name="categoria" value="<?php echo $alm->__GET('categoria'); ?>"  /></td>
                        </tr>
						<tr>
                            <th >marca</th>
                            <td><input type="text" name="marca" value="<?php echo $alm->__GET('marca'); ?>"  /></td>
                        </tr>
						<tr>
                            <th >precio</th>
                            <td><input type="text" name="precio" value="<?php echo $alm->__GET('precio'); ?>"  /></td>
                        </tr>
                        <tr>
                            <th >ubicacion</th>
                            <td><input type="text" name="ubicacion" value="<?php echo $alm->__GET('ubicacion'); ?>"  /></td>
                        </tr>
                      <tr>
                            <td colspan="2">
                                <button type="submit" class="pure-button pure-button-primary">Guardar</button>
                            </td>
                        </tr>
                    </table>
                </form>

                <table class="pure-table pure-table-horizontal">
                    <thead>
                        <tr>
                            <th >referencia</th>
                            <th >categoria</th>
                            <th >marca</th>
                            <th >precio</th>
                            <th >ubicacion</th>
                            <th></th>
                            <th></th>
                        </tr>
                    </thead>
                    <?php foreach($model->Listar() as $r): ?>
                        <tr>
                            <td><?php echo $r->__GET('referencia'); ?></td>
                            <td><?php echo $r->__GET('categoria'); ?></td>
                            <td><?php echo $r->__GET('marca'); ?></td>
							<td><?php echo $r->__GET('precio'); ?></td>
                            <td><?php echo $r->__GET('ubicacion'); ?></td>
                          <td>
                                <a href="?action=editar&id_productos=<?php echo $r->id_productos; ?>">Editar</a>
                            </td>
                            <td>
                                <a href="?action=eliminar&id_productos=<?php echo $r->id_productos; ?>">Eliminar</a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </table>     
              
            </div>
        </div>
        <form method="post" action="index.html">
				
					<button class="btn btn-info btn-block">anterior pagina</button><div id="bar"> </form>
    </body>
</html>



