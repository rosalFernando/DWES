<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Buscaminas</title>
</head>
<body>
<form action="buscaminas.php" method="post">
        Filas: <input type="number" name="filas"> <br>
        Colmnas: <input type="number" name="columnas"> <br>
        Bombas: <input type="number" name="bombas"> <br>
        

        <button type="submit" name="enviar">Añadir</button>
        <br>

    </form>
</body>
</html>