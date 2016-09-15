
<?php
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
            $alm->__SET('id_cliente',                   $_REQUEST['id_cliente']);
            $alm->__SET('usuario',      		        $_REQUEST['usuario']);
            $alm->__SET('password',       			    $_REQUEST['password']);
            $alm->__SET('documento',            $_REQUEST['documento']);
			$alm->__SET('telefono',           $_REQUEST['telefono']);
            $alm->__SET('direccion',       $_REQUEST['direccion']);
			$alm->__SET('correo',       $_REQUEST['correo']);
			$alm->__SET('rol',       $_REQUEST['rol']);

            $model->Actualizar($alm);
            //header('Location: index.html');
            header('Location: index.php');
            
			break;

        case 'registrar':
            // se añadio
			$alm->__SET('id_cliente',          			$_REQUEST['id_cliente']);
			$alm->__SET('usuario',         		    $_REQUEST['usuario']);
            $alm->__SET('password',       		        $_REQUEST['password']);
            $alm->__SET('documento',            $_REQUEST['documento']);
			$alm->__SET('telefono',           $_REQUEST['telefono']);
			$alm->__SET('direccion',       $_REQUEST['direccion']);
			$alm->__SET('correo',       $_REQUEST['correo']);
			$alm->__SET('rol',       $_REQUEST['rol']);

            $model->Registrar($alm);
            echo "Guardo el Registro Exitosamente";
			
			

			//header('Location: index.html');
            //header('Location: index.php');
            break;

        case 'eliminar':
            $model->Eliminar($_REQUEST['id_cliente']);
			echo "Elimino el Registro Exitosamente";

           // header('Location: index.php');
            break;

        case 'editar':
            $alm = $model->Obtener($_REQUEST['id_cliente']);
            break;
    }
}

?>
<style type="text/css">
body {
	background-image: url(../../imagenes%20de%20fondo/fondoperpetua2.gif);
}
</style>


       <font WIDTH=70% HEIGHT=40 BEHAVIOR=alternate> <div class=" navbar-header">
             <form method="post" action="../../index.php">
					<button class="btn btn-info btn-block">Inicio</button><div id="bar">
                    </form>
        

