<?php
include_once ('config/config.php');
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


//insert

function inserta($nombre){
    $conecta=conectaDB(BBDD,USER,PASS);
    $sql ="insert into superheroes(nombre) values('". $nombre." ')";
    if ($conecta->query($sql)) {
     echo "correcto";
     $conecta = null;
    }
    else {
     echo"error";
     $conecta = null;
    }
    
}



//select

function muestra(){
    $conecta=conectaDB(BBDD,USER,PASS);
    $sql = "SELECT * FROM superheroes";
    $super=[];
    $resultado = $conecta->query($sql);
    foreach ($resultado as $valor) {
    
    $super[]=$valor;
    }
    return $super;
    $conecta = null;
}


//update
function actualiza($id,$nombre){
    $conecta=conectaDB(BBDD,USER,PASS);
    $sql = "update superheroes set nombre = '".$nombre."' where id =".$id;
    if ($conecta->query($sql)) {
     echo "correcto update";
     
    }
    else {
        echo "mal";
    }
    $conecta = null;
}



//delete
function borrar($id){
    $conecta=conectaDB(BBDD,USER,PASS);
    $sql = "delete from superheroes where id = '".$id."'";
    if ($conecta->query($sql)) {
        header("Location: index.php");
    }
    else {
        header("Location: index.php");
        echo "No se ha podido eliminar";
    }
    $conecta = null;
}

function muestraSuper($id){
    $conecta=conectaDB(BBDD,USER,PASS);
    $sql = "SELECT * from superheroes where id = '".$id."'";
    $resultado = $conecta->query($sql);
    foreach ($resultado as $valor) {
    
       return $valor;
        }
    $conecta = null;
}
