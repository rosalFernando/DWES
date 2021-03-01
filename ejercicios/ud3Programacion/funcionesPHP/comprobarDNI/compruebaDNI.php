<?php


$aletras = ['T', 'R', 'W', 'A', 'G', 'M', 'Y', 'F', 'P',
    'D', 'X', 'B', 'N', 'J', 'Z', 'S', 'Q', 'V',
    'H', 'L', 'C', 'K', 'E', 'T'];

    $numDni=$_POST["numeroDNI"];
    


    function dni($dni,$letras){
   

        if($dni < 0 || $dni > 99999999){
            echo("<p> numero incorrecto </p>");
        }else{
            $result=$dni % 23;
            $letraDni=$letras[$result];
            echo("<p>" . $dni . "-".$letraDni."</p>");
        }
    }

    dni($numDni,$aletras);
?>