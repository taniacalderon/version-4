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

            $stm = $this->pdo->prepare("SELECT * FROM  productos");
            $stm->execute();

            foreach($stm->fetchAll(PDO::FETCH_OBJ) as $r)
            {
                $alm = new Alumno();

                $alm->__SET('id_productos', $r->id_productos);
                $alm->__SET('referencia', $r->referencia);
                $alm->__SET('categoria', $r->categoria);
                $alm->__SET('marca', $r->marca);
                $alm->__SET('precio', $r->precio);
				$alm->__SET('ubicacion', $r->ubicacion);
 			  

                $result[] = $alm;
            }

            return $result;	
        }
        catch(Exception $e)
        {
            die($e->getMessage());
        }
    }

    public function Obtener($id_productos)
    {
        try 
        {
            $stm = $this->pdo
                      ->prepare("SELECT * FROM productos WHERE id_productos = ?");
                      

            $stm->execute(array($id_productos));
            $r = $stm->fetch(PDO::FETCH_OBJ);

            $alm = new Alumno();

                $alm->__SET('id_productos', $r->id_productos);
                $alm->__SET('referencia', $r->referencia);
                $alm->__SET('categoria', $r->categoria);
                $alm->__SET('marca', $r->marca);
                $alm->__SET('precio', $r->precio);
				$alm->__SET('ubicacion', $r->ubicacion);
 			    

            return $alm;
        } catch (Exception $e) 
        {
            die($e->getMessage());
        }
    }

    public function Eliminar($id_productos)
    {
        try 
        {
            $stm = $this->pdo
                      ->prepare("DELETE FROM productos WHERE id_productos = ?");                      

            $stm->execute(array($id_productos));
        } catch (Exception $e) 
        {
            die($e->getMessage());
        }
    }

    public function Actualizar(Alumno $data)
    {
        try 
        {
            $sql = "UPDATE productos SET 
                        referencia    	        = ?, 
                        categoria     		    = ?,
                        marca     	= ?,
						precio    	= ?,
						ubicacion   = ? 
                       
                   WHERE id_productos = ?";

            $this->pdo->prepare($sql)
                 ->execute(
                array(
                    $data->__GET('referencia'), 
                    $data->__GET('categoria'), 
                    $data->__GET('marca'),
					$data->__GET('precio'),
					$data->__GET('ubicacion'),
                    $data->__GET('id_productos')
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
        $sql = "INSERT INTO productos (id_productos, referencia, categoria, marca, precio, ubicacion) 
                VALUES (?, ?, ?, ?, ?, ?)";

        $this->pdo->prepare($sql)
             ->execute(
            array(
                $data->__GET('id_productos'), 
				$data->__GET('referencia'), 
                $data->__GET('categoria'), 
		        $data->__GET('marca'),
				$data->__GET('precio'),
				$data->__GET('ubicacion'),
                )
            );
			
        } catch (Exception $e) 
        {
            die($e->getMessage());
        }
    }
}

?>