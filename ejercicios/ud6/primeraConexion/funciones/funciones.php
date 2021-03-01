<?php
function conectaDB($BBDD,$USER,$PASS)
{
    
    try {
        $dsn = $BBDD;
        $db = new PDO($dsn, $USER, $PASS);
        $db->setAttribute(PDO::MYSQL_ATTR_USE_BUFFERED_QUERY, true);
        $db->setAttribute(PDO::MYSQL_ATTR_INIT_COMMAND, 'SET NAMES utf8');
        return ($db);
    } catch (PDOException $e) {
        echo "Error conexión";
        exit();
    }
}
?>