<?php

include("Superheroe.php");

$sh = Superheroe::getInstancia();
$datos=array(
    "nombre"=>"funciona",
    "velocidad" => 5
);
$sh -> set($datos);

$id = $sh->lastInsert();
$datos = $sh->get($id);
foreach ($datos as $elemento) {
    foreach ($elemento as $key => $valor) {
        echo "$key: $valor</br>";
    }
}
