<?php
/**
 * @author Fernando del Rosal Cuesta.
 * 
 * Crear funcion para factorizar un numero.
 */

 $num=$_POST["factor"];


 function factoriza($numero){
  if ($numero <= 1) {
    return 1;
    } else {
    return $numero * factoriza($numero - 1);
    }
 }


 factoriza($num);



?>