<?php

$continentes = array(
    "Europa" => array(
        "España" => array(
            "capital" => "Madrid", 
            "bandera" => "banderas/espana.jpg"),
        "Francia" => array(
            "capital" => "Paris", 
            "bandera" => "banderas/francia.svg"),
        "Italia" => array(
            "capital" => "Roma",
            "bandera" => "banderas/italia.svg"),
        "Alemania" => array(
            "capital" => "Berlin",
            "bandera" => "banderas/alemania.svg")),
    "Asia" => array(
        "China" => array(
            "capital" => "Pekin",
            "bandera" =>"banderas/china.svg"),
        "India" => array(
            "capital" => "Nueva Delhi",
            "bandera" => "banderas/india.png"),
        "Myanmar" => array(
            "capital" => "Naypyidó",
            "bandera" => "banderas/myanmar.svg"),
        "Bangladesh" => array(
            "capital" => "Daca",
            "bandera" => "banderas/bangladesh.svg")),
    "América" => array(
        "Mexico" => array(
            "capital" => "Ciudad de Mexico",
            "bandera" =>"banderas/mexico.png"),
        "Estados Unidos" => array(
            "capital" => "Washington",
            "bandera" =>"banderas/estadosUnidos.svg"),
        "Brasil" => array(
            "capital" => "Sao Paulo",
            "bandera" =>"banderas/brasil.png"),
        "Argentina" => array(
            "capital" => "Buenos Aires",
            "bandera" =>"banderas/argentina.svg"),
        ),
    "África" => array(
        "Argelia" => array(
            "capital" => "Argel",
            "bandera" =>"banderas/argelia.svg"),
        "Nigeria" => array(
            "capital" => "Niamery",
            "bandera" =>"banderas/nigeria.svg"),
        "Madagascar" => array(
            "capital" => "Antananarivo",
            "bandera" =>"banderas/madagascar.svg"),
        "Tanzania" => array(
            "capital" => "Dodoma",
            "bandera" =>"banderas/tanzania.svg"),),
    "Oceanía" => array(
        "Indonesia" => array(
            "capital" => "Yakarta",
            "bandera" =>"banderas/indonesia.svg"),
        "Australia" => array(
            "capital" => "Canberra",
            "bandera" =>"banderas/australia.svg"),
        "Papua Nueva Guinea" => array(
            "capital" => "Puerto Moresby",
            "bandera" =>"banderas/papuaNuevaGuinea.svg"),
        "Nueva Zelanda" => array(
            "capital" => "Wellington",
            "bandera" =>"banderas/nuevaZelanda.svg"),)
);

foreach($continentes as $contin => $paises){
    echo "<h3>$contin</h3>";
    echo "<table border=\"1px solid black\" width=\"500px\">";
    echo "<tr><td><strong>Pais</strong></td><td><strong>Capital</strong></td><td><strong>Bandera</strong></td></tr>";
    echo "<tr>";
    foreach($paises as $infoPais => $datos){
        echo "<td>$infoPais</td>";
        foreach($datos as $clave => $valor){
            if(strpos($valor, "banderas/") === false){
                echo "<td>$valor</td>";
            }else{
                echo "<td><img src=\"$valor\" width=\"100px\"></img></td>";
            }
        }
        echo "</tr>";
    }
    echo "</table>";
}
echo "</table>";
?>