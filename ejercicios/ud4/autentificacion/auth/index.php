<?php
session_start();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>autenticacion</title>
</head>
<body>
<form action="procesaAuth.php" method="post">
    <p>Usuario: <input type="text" name="user" id="user"></p>
    <p>Contraseña: <input type="password" name="pass" id="pass"></p>
    <p><input type="submit" value="Enviar"></p>
    </form>
</body>
</html>