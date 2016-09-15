<style type="text/css">
body {
	background-image: url(../../imagenes%20de%20fondo/fondoperpetua2.gif);
}
</style>
<?php
class Alumno
{
    private $id_cliente;
    private $usuario;
    private $password;
    private $documento;
    private $telefono;
	private $direccion;
	private $correo;
	private $rol;

	
    public function __GET($k){ return $this->$k; }
    public function __SET($k, $v){ return $this->$k = $v; }
}

?>
