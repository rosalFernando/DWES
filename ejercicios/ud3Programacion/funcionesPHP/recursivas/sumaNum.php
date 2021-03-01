<?php
/**
 * @author Fernando del Rosal Cuesta.
 * 
 *  Función recursiva que permita sumar los dígitos de un número pasado por la URL.
 */

 $numero=$_POST["num"];

 function sumaNumero($num){
    return array_sum(str_split($num,1));
 }

 echo "la suma de los digitos de: ".$numero." es: ".sumaNumero($numero);

?>