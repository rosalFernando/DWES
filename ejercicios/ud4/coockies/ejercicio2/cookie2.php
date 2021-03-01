<?php
/**
 * @author Fernando del Rosal Cuesta.
 * comprobacion de que el usuario permite crear o no cookies.
 */
     function comprobarCookies()
    {
        $activas = false;
        if( isset($_COOKIE['nombre']) )
            $activas = true;
        return $activas;
    }
   
     if( comprobarCookies() == true )
        echo("Las Cookies están activas");
    else
        echo "Las Cookies están desactivadas";
?>