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
    <p>Nombre: <input type="text" name="user" id="user"></p>
    <p>Correo: <input type="email" name="email" id="email"></p>
    <p>Contraseña: <input type="password" name="pass" id="pass"></p>
    <p>Repite la contraseña: <input type="password" name="repPass" id="repPass"></p>
    <p><input type="submit" value="Registrarse"></p><a href="index.php">Inicia Sesion</a>
    </form>
</body>
</html>