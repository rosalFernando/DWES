<?php

/**
 * @author Fernando del Rosal Cuesta
 * Crea un formulario de login que permita al usuario recordar los datos introducidos. Incluye una opción para borrar la información almacenada.
 */

$nombre=$_POST['nombre']??null;
$pass=$_POST['pass']??null;

$cookie=$_COOKIE['user'] ?? null;
$cookiePass=$_COOKIE['pass'] ?? null;

if(isset($_POST['recordar'])){
    if($_POST){
        setcookie("user", $nombre, time()+3600);
        setcookie("pass", $pass, time()+3600);
    }
}else{
    setcookie("user", $nombre, time()-3600);
    setcookie("pass", $pass, time()-3600);
}



if($_COOKIE){
    echo "user: ".($cookie);
    echo "pass: ".($cookiePass);
}else{
    echo "nada";
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
    <form action="<?php $_SERVER['PHP_SELF']; ?>" method="post">
        <p>nombre: <input type="text" name="nombre" id="nombre"></p>
        <p>contraseña: <input type="text" name="pass" id="pass"></p>
        <button type="submit" value="enviar">Enviar</button>
        <input type="checkbox" name="recordar" id="recordar">

    </form>


</body>

</html>