
    <?php

       
        session_start();

    ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agenda Contactos</title>
</head>
<body>
    <form action="procesaAgenda.php" method="post">
        <input type="text" name="nombre">
        <input type="text" name="movil">
        <button type="submit" name="enviar">Añadir</button>
        <br>        
        <?php print_r($_SESSION['agenda']); ?>
    </form>
</body>
</html>