<?php


$sumatorio = 0;

if(isset($_POST["enviar"])){
    echo "<p>Cantidad de números ".$_POST["cantidad"];
    echo "<form action=\"\" method=\"post\">";
    for($i=0; $i<$_POST["cantidad"]; $i++){
        echo "<label>Número $i: <input type=\"number\" name=\"numeros[]\" required/></label>";
    }
    echo "<input type=\"submit\" name=\"sumar\" value=\"Sumar\">";
}else{
    echo "<form action=\"\" method=\"post\">";
    echo "<label>Cantidad de números<input type=\"number\" name=\"cantidad\" min=\"2\" max\"6\" required/></label>";
    echo "<input type=\"submit\" name=\"enviar\" value=\"Enviar\">";
    echo "</form>";
}

if(isset($_POST["sumar"])){
    foreach($_POST["numeros"] as $numero){
        $sumatorio+=$numero;
    }
    echo "El sumatorio de los números introducidos es: ".$sumatorio;
}
?>