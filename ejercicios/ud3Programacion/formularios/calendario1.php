<?php


include "Calendario.php";
echo "<form action=\"\" method=\"post\">";
echo "<p> Mes : <select name=\"mes\" required>";
for($i=1; $i<13; $i++){
    echo "<option value=\"$i\">$i</option>";
}
echo "</p></select>";
echo "<p> Año :<input name=\"anio\" type=\"number\" min=\"1900\" max=\"2100\" required/s></p>";
echo "<input type=\"submit\" name=\"subir\" value=\"Enviar\">";
echo "</form>";
echo "</br>";
if(isset($_POST["subir"])){
    $mes = $_POST["mes"];
    $annyo = $_POST["anio"];    
    $calendario = new Calendario($_POST["mes"], $_POST["anio"]);
    $calendario->calcularCalendario();
    $calendario->imprimirCalendario();
}else{
    $calendario = new Calendario(date("n"), date("Y"));
    $calendario->calcularCalendario();
    $calendario->imprimirCalendario();
}
?>