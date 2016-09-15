<?php session_start(); 

$elusuario ="Tania";
$_sesssion["usuario"]=$elusuario;

if (!isset($_SESSION["usuario"]))

{ 
// Si la variable usuario está vacía le asigna el valor
invitado;
$_SESSION["usuario"]="Invitado"; 
echo $_session["usuario"];
}
else
{ 
$_SESSION["usuario"]=$elusuario;
echo "el usuario actual es:";
echo $_session["usuario"];


}
?>
