<?php

session_start();

$usuario="";
$pas="";
$msgUsuario=$msgPassword="";
$procesaForm=false;


$usuario =limpiarDatos($_POST["user"]);
$pas =limpiarDatos($_POST["pass"]);

if(empty($usuario)){
    $clase_error="clase_error";
    $msgUsuario= "&#9888; Obligatorio";
}

if (empty($psw)) {
    $clase_error="clase_error";
    $msgPassword=  "&#9888; Obligatorio";
    $lprocesaFormulario = false;
 }

 if($procesaForm){
     if(($usuario == 'admin') and ($pas == 'admin')){
        $_SESSION['aut'] = true;
		$_SESSION['user'] = 'Administrador';
     }
 }


function limpiarDatos($dato): string
{
    $dato = trim($dato);
    $dato = stripslashes($dato);
    $dato = htmlspecialchars($dato);
    return $dato;
}   
?>