<?php

include_once('funciones/funciones.php');

$muestra = muestra();

if (isset($_POST['aceptar'])) {
    if (isset($_POST['nombre'])) {
        $nombre = $_POST['nombre'];
        inserta($nombre);
        header("Location: index.php");
    }
}

if ($_GET['accion'] == 'e') {
    borrar($_GET['id']);
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="index.php" method="post">
        <input type="text" name="nombre" id="nombre" required>
        <input type="submit" name="aceptar" value="aceptar">
    </form>

    <?php
    foreach ($muestra as $heroe) {
        echo $heroe['nombre'] . "<a href='index.php?id=" . $heroe['id'] . "&accion=e'>Eliminar</a><a href='actualiza.php?id=" . $heroe['id'] . "'>Actualizar</a>" . "<br/>";
    }

    ?>

</body>

</html>