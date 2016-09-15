
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
            $alm->__SET('id_inventario',                   $_REQUEST['id_inventario']);
            $alm->__SET('productos_ingresados',      		        $_REQUEST['productos_ingresados']);
            $alm->__SET('precio_ingresados',       			    $_REQUEST['precio_ingresados']);
            $alm->__SET('productos_egresados',            $_REQUEST['productos_egresados']);
			$alm->__SET('precio_egresados',           $_REQUEST['precio_egresados']);
            $alm->__SET('categorias',       $_REQUEST['categorias']);
			$alm->__SET('conteo',       $_REQUEST['conteo']);

            $model->Actualizar($alm);
            //header('Location: index.html');
            header('Location: index.php');
            
			break;

        case 'registrar':
            // se añadio
			$alm->__SET('id_inventario',          			$_REQUEST['id_inventario']);
			$alm->__SET('productos_ingresados',         		    $_REQUEST['productos_ingresados']);
            $alm->__SET('precio_ingresados',       		        $_REQUEST['precio_ingresados']);
            $alm->__SET('productos_egresados',            $_REQUEST['productos_egresados']);
			$alm->__SET('precio_egresados',           $_REQUEST['precio_egresados']);
			$alm->__SET('categorias',       $_REQUEST['categorias']);
			$alm->__SET('conteo',       $_REQUEST['conteo']);

            $model->Registrar($alm);
            echo "Guardo el Registro Exitosamente";

			//header('Location: index.html');
            //header('Location: index.php');
            break;

        case 'eliminar':
            $model->Eliminar($_REQUEST['id_inventario']);
			echo "Elimino el Registro Exitosamente";

           // header('Location: index.php');
            break;

        case 'editar':
            $alm = $model->Obtener($_REQUEST['id_inventario']);
            break;
    }
}

?>
<style type="text/css">
body {
	background-image: url(../../imagenes%20de%20fondo/fondoperpetua2.gif);
}
</style>

<form method="post" action="index.html">
				
					<button class="btn btn-info btn-block">anterior pagina</button><div id="bar">
       
      </form>