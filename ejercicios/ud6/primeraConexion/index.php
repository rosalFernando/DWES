<?php

include_once ('config/config.php');
include_once ('funciones/funciones.php');

$conecta=conectaDB(BBDD,USER,PASS);
var_dump($conecta);
//insert
/*
$nombre = "spiderman";
$sql ="insert into superheroes(nombre) values('". $nombre." ')";
if ($conecta->query($sql)) {
 echo "correcto";
 
}
else {
 echo"error";
}
*/

//select
$sql = "SELECT * FROM superheroes";
$resultado = $conecta->query($sql);
foreach ($resultado as $valor) {
echo $valor['nombre']."<br/>";
echo $valor['velocidad']."<br/>";
}

//update
/*
$nombre = "pepitpo";
$id = 3;
$sql = "update superheroes set nombre = '".$nombre."' where id =".$id;
if ($conecta->query($sql)) {
 echo "correcto update";
}
else {
    echo "mal";
}
*/
$velocidad = 5;
$sql = "update superheroes set velocidad =".$velocidad;
if ($conecta->query($sql)) {
 echo "correcto update";
}
else {
    echo "mal";
}
/*
//delete
$id=4;
$sql = "delete from superheroes where id = '".$id."'";
if ($conecta->query($sql)) {
    echo "correcto del";
}
else {
    echo "mal";
}
*/

?>