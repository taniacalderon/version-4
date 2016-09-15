<style type="text/css">
body {
	background-image: url(../../imagenes%20de%20fondo/fondoperpetua2.gif);
}
</style>
<?php

class AlumnoModel
{
    private $pdo;

    public function __CONSTRUCT()
    {
        try
        {
            $this->pdo = new PDO('mysql:host=localhost;dbname=proyecto', 'root', '');
            $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);                
        }
        catch(Exception $e)
        {
            die($e->getMessage());
        }
    }

    public function Listar()
    {
        try
        {
            $result = array();

            $stm = $this->pdo->prepare("SELECT * FROM  tasnego");
            $stm->execute();

            foreach($stm->fetchAll(PDO::FETCH_OBJ) as $r)
            {
                $alm = new Alumno();

                $alm->__SET('id_cliente', $r->id_cliente);
                $alm->__SET('usuario', $r->usuario);
                $alm->__SET('password', $r->password);
                $alm->__SET('documento', $r->documento);
                $alm->__SET('telefono', $r->telefono);
 			    $alm->__SET('direccion', $r->direccion);
				$alm->__SET('correo', $r->correo);
				$alm->__SET('rol', $r->rol);

                $result[] = $alm;
            }

            return $result;	
        }
        catch(Exception $e)
        {
            die($e->getMessage());
        }
    }

    public function Obtener($id_cliente)
    {
        try 
        {
            $stm = $this->pdo
                      ->prepare("SELECT * FROM tasnego WHERE id_cliente = ?");
                      

            $stm->execute(array($id_cliente));
            $r = $stm->fetch(PDO::FETCH_OBJ);

            $alm = new Alumno();

                $alm->__SET('id_cliente', $r->id_cliente);
                $alm->__SET('usuario', $r->usuario);
                $alm->__SET('password', $r->password);
                $alm->__SET('documento', $r->documento);
                $alm->__SET('telefono', $r->telefono);
 			    $alm->__SET('direccion', $r->direccion);
				 $alm->__SET('correo', $r->correo);

            return $alm;
        } catch (Exception $e) 
        {
            die($e->getMessage());
        }
    }

    public function Eliminar($id_cliente)
    {
        try 
        {
            $stm = $this->pdo
                      ->prepare("DELETE FROM tasnego WHERE id_cliente = ?");                      

            $stm->execute(array($id_cliente));
        } catch (Exception $e) 
        {
            die($e->getMessage());
        }
    }

    public function Actualizar(Alumno $data)
    {
        try 
        {
            $sql = "UPDATE tasnego SET 
                        usuario    	        = ?, 
                        password     		    = ?,
                        documento     	= ?,
						telefono    	= ?, 
                        direccion  = ?,
						correo  = ?,
						rol  = ?
                   WHERE id_cliente = ?";

            $this->pdo->prepare($sql)
                 ->execute(
                array(
                    $data->__GET('usuario'), 
                    $data->__GET('password'), 
                    $data->__GET('documento'),
					$data->__GET('telefono'),
                    $data->__GET('direccion'),
					$data->__GET('correo'),
					$data->__GET('rol'),
                    $data->__GET('id_cliente')
                    )
                );
        } 
		catch (Exception $e) 
        {
            die($e->getMessage());
        }
    }

    public function Registrar(Alumno $data)
    {
        try 
        {
        $sql = "INSERT INTO tasnego (id_cliente,usuario,password,documento,telefono,direccion,correo,rol) 
                VALUES (?, ?, ?, ?, ?, ?, ?, ?)";

        $this->pdo->prepare($sql)
             ->execute(
            array(
                $data->__GET('id_cliente'), 
				$data->__GET('usuario'), 
                $data->__GET('password'), 
		        $data->__GET('documento'),
				$data->__GET('telefono'),
                $data->__GET('direccion'),
				$data->__GET('correo'),
				$data->__GET('rol')
                )
            );
			
        } catch (Exception $e) 
        {
            die($e->getMessage());
        }
    }
}

?>