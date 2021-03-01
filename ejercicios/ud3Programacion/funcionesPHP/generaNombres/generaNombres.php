<?php
/**
 * @author Fernando del Rosal Cuesta
 * Generador de nombres de usuario
 */

$aUsuarios = array(

    array('nombre'=>'Jesús','apellido1'=>'Martínez','apellido2'=>'García'),

    array('nombre'=>'Mercedes','apellido1'=>'Calamaro','apellido2'=>'Pedrajas'),

    array('nombre'=>'Elena','apellido1'=>'Pérez','apellido2'=>''),

);


$generador=array_map(function($usuario){
   
    $nom=$usuario["nombre"];
    $ape1=$usuario["apellido1"];
    $ape2=$usuario["apellido2"];

    for ($i=0; $i <$nom ; $i++) { 
        return ;
    }




},$aUsuarios);


print_r($generador);


?>