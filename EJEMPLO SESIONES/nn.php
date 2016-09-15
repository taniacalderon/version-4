<?php session_start();
$elusuario ="Tania";
$_sesssion["usuario"]=$elusuario;

if(isset($_session ["usuario"]))
{
// si lña variable usuario esta vacia le asigna el valor 
//invitado
$_session ["usuario"]="invitado";
echo "el usuario actual es:";
echo $_session["usuario"];
}
else
{
$elusuario=$_session["usuario"];
echo "el usuario actual es:";
echo $_session["usuario"];
	
}

?>