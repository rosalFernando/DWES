<?php

/**
 * @author Fernando del Rosal Cuesta.
 * Escriba una página que compruebe si el navegador permite crear cookies y se lo diga al usuario (mediante una o más páginas)
 */
    setcookie("nombre", 1, time() + (60*2) );
     header("Location: cookie2.php");
?>