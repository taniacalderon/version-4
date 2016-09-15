<?php session_start(); 


if (!isset($_SESSION["usuario"]))
{ 
// Si la variable usuario está vacía le asigna el valor
invitado    
$_SESSION["usuario"] = "Invitado"; 
echo $_SESSION["usuario"];
}
else
{ 
$_SESSION["usuario"]=$elusuario;
echo $_SESSION["usuario"];


} 
