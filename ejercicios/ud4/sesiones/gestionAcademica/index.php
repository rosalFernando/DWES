

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestion academica DWES</title>
</head>

<body>
    <form action="procesa.php" method="post">
        Nombre: <input type="text" name="nombre"> <br>
        Nota primer trimestre: <input type="number" name="primer"> <br>
        Nota segundo trimestre: <input type="number" name="segundo"> <br>
        Nota tercer trimestre: <input type="number" name="tercer"> <br>

        <button type="submit" name="enviar">Añadir</button>
        <br>

    </form>

    <table>
        <?php
        session_start();
        
        $array = $_SESSION['gestion'];
        foreach ($array as $r) {
            echo '<tr>';

            echo '<td>' . $r . '</td>';

            echo '</tr>';
        }
        ?>

    </table>


</body>

</html>