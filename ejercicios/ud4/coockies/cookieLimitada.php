<?php
/**
 * @author Fernando del Rosal Cuesta
 * Escriba una página que permita crear una cookie de duración limitada, comprobar el estado de la cookie y destruirla
 */

setcookie("ejercicio1", "cookie tiempo limitado", 30);

function comprobarCookies()
    {
        $activas = false;
        if( isset($_COOKIE['ejercicio1']) )
            $activas = true;
        return $activas;
    }

    if( comprobarCookies() == true ){
        echo("Las Cookies están activas");
    }else{
        echo "Las Cookies están desactivadas";
    }
        
    setcookie("ejercicio1", "cookie tiempo limitado", -30);


?>