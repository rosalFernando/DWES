<?php

session_start();
include "./Persona.php";

if(!isset($_SESSION["aut"])){
    header("Location: index.php");
}
echo "<a href=\"cerrarSesion.php\">Cerrar Sesion</a><br>";
echo "Hola, estas en  el home de Personas";
?>