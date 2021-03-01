<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="" method="post">
        <input type="text" name="nombre" id="nombre" required>
        <input type="submit" name="buscar" value="buscar">
        
    </form>
    <a href="add-up.php"><button name="aniadir">Añadir</button></a>
    <?php

    ?>

</body>

</html>


<?php
include_once('funciones/funcionesHeroe.php');
include("Superheroe.php");
$sh = Superheroe::getInstancia();
if(isset($_POST['buscar'])){
    if(isset($_POST['nombre']) && $_POST['velocidad']){
        $nombre = limpiarDatos($_POST['nombre']);
        $velocidad = limpiarDatos($_POST['velocidad']);
    }
    $datos=array(
        "nombre"=>"funciona",
        "velocidad" => 5
    );
    $id = $sh->lastInsert();
$datos = $sh->get($id);
foreach ($datos as $elemento) {
    foreach ($elemento as $key => $valor) {
        echo "$key: $valor</br>";
    }
}
}



$datos=array(
    "nombre"=>"funciona",
    "velocidad" => 5
);
$sh -> set($datos);



?>