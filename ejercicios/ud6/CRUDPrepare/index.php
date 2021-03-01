
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
    <a href="actualiza.php"><button name="aniadir">Añadir</button></a>
    <?php

    ?>

</body>

</html>

<?php

include_once('funciones/funciones.php');

if (isset($_POST['buscar'])) {
    if (isset($_POST['nombre'])) {
        $nombre = limpiarDatos($_POST['nombre']);
        $muestra = muestraVariosConValores($nombre);
        foreach ($muestra as $heroe) {
            echo $heroe['nombre']."-".$heroe['velocidad'] . "<a href='index.php?id=" . $heroe['id'] . "&accion=e'>Eliminar</a><a href='actualiza.php?id=" . $heroe['id'] . "'>Actualizar</a>" . "<br/>";
        }
    }
}
if (isset($_GET['accion'])) {
    if ($_GET['accion'] == 'e') {
        borrar($_GET['id']);
    }
}


?>