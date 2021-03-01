<?php
/**
 * @author Fernando del rosal Cuesta.
 * Escribir un script que muestre una lista de enlaces. 
 * Los enlaces serán creados por una función que recibirá 
 * como como parámetro un array con las opciones necesarias.
 */
$label="";
$url="";

 $aEnlaces=array(
     array("label"=>"google","url"=>"www.google.com"),
     array("label"=>"moodle","url"=>"https://moodle.iesgrancapitan.org/"),
     array("label"=>"MDN","url"=>"https://developer.mozilla.org/"),
     array("label"=>"API android","url"=>"https://developer.android.com/"),
     
 );

 function generaURL($arrayUrl){
    foreach($arrayUrl as $clave => $valor){
     
        $label=$valor["label"];
       
       $url=$valor["url"];
        $urlGenerada="<a href=".$url.">.$label.</a>";
      
       
    }
    return $urlGenerada;
 }
