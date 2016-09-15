
<?php


// Pagina Princilap index.html
// Explicar sentencia por Sentencia.

// Registro de Usuarios


require_once 'alumno.entidad.php';
require_once 'alumno.model.php';

$alm = new Alumno();
$model = new AlumnoModel();



if(isset($_REQUEST['tipo']))
{

    //switch($_REQUEST['action'])
	switch($_REQUEST['tipo'])
	//switch($tipo)
    {
        case 'actualizar':
            $alm->__SET('id_productos',                   $_REQUEST['id_productos']);
            $alm->__SET('referencia',      		        $_REQUEST['referencia']);
            $alm->__SET('categoria',       			    $_REQUEST['categoria']);
            $alm->__SET('marca',            $_REQUEST['marca']);
			$alm->__SET('precio',           $_REQUEST['precio']);
			$alm->__SET('ubicacion',           $_REQUEST['ubicacion']);
          
            $model->Actualizar($alm);
            //header('Location: index.html');
            header('Location: index.php');
            
			break;

        case 'registrar':
            // se añadio
			$alm->__SET('id_productos',          			$_REQUEST['id_productos']);
			$alm->__SET('referencia',         		    $_REQUEST['referencia']);
            $alm->__SET('categoria',       		        $_REQUEST['categoria']);
            $alm->__SET('marca',            $_REQUEST['marca']);
			$alm->__SET('precio',           $_REQUEST['precio']);
			$alm->__SET('ubicacion',           $_REQUEST['ubicacion']);

            $model->Registrar($alm);
            echo "Guardo el Registro Exitosamente";

			//header('Location: index.html');
            //header('Location: index.php');
            break;

        case 'eliminar':
            $model->Eliminar($_REQUEST['id_productos']);
			echo "Elimino el Registro Exitosamente";

           // header('Location: index.php');
            break;

        case 'editar':
            $alm = $model->Obtener($_REQUEST['id_productos']);
            break;
    }
}

?>
<style type="text/css">
body {
	background-image: url(../../imagenes%20de%20fondo/fondoperpetua2.gif);
	background-repeat: repeat;
}
</style>

  <form method="post" action="index.html">
				
					<button class="btn btn-info btn-block">anterior pagina</button><div id="bar"> </form>
  <p>&nbsp;</p>
  