<?php
include_once('config/config.php');
function conectaDB($BBDD, $USER, $PASS)
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

function inserta($nombre,$veloci)
{
    $campo = $nombre;
    $campo2 = $veloci;
    $conecta = conectaDB(BBDD, USER, PASS);
    $sql = "insert into superheroes(nombre,velocidad) values(':nombre',':velocidad')";
    $consulta = $conecta->prepare($sql);
    $aParametros = array(
        ":nombre" => $campo,
        ":velocidad" => $campo2
    );
    $consulta->execute($aParametros);
    $resultado = $consulta->fetchAll();
    if (!$resultado) {
        echo "Consulta vacía";
    } else {
        echo "Correcto";
    }

    $conecta = null;
}



//select

function muestra()
{
    $conecta = conectaDB(BBDD, USER, PASS);
    $sql = "SELECT * FROM superheroes";
    $consulta = $conecta->prepare($sql);
    $consulta->execute();
    $resultado = $consulta->fetchAll();
    foreach ($resultado as $valor) {

        $super[] = $valor;
    }
    return $super;
    $conecta = null;
}
//select preparada con ?
/*
function muestraVarios($nombre,$veloz)
{
    $conecta = conectaDB(BBDD, USER, PASS);
    $campo = $nombre ?? 'C%';
    $velocidad = $veloz ?? 3;
    $sql = "SELECT * FROM superheroes WHERE nombre LIKE ? OR velocidad > ?";
    //$sql = "SELECT * FROM superheroes WHERE nombre LIKE :nombre OR velocidad > :velocidad";
    $consulta = $conecta->prepare($sql);
    $consulta->execute(array($campo, $velocidad));
    $resultado = $consulta->fetchAll();
    $numeroRegistros = $consulta->rowCount();
    echo "Listado de Superhéroes:$numeroRegistros<br/>";
    if (!$resultado) {
        echo "Consulta vacía";
    } else {
        foreach ($resultado as $valor) {
            $super[] = $valor;
        }
 
    }
    return $super;
    $conecta = null;
}
*/
function muestraVariosConValores($nombre)
{
    $conecta = conectaDB(BBDD, USER, PASS);
    $campo = $nombre;
    $sql = "SELECT * FROM superheroes WHERE nombre LIKE :nombre";
    $consulta = $conecta->prepare($sql);
    $aParametros = array(
        ":nombre" => $campo
    );
    $consulta->execute($aParametros);
    $resultado = $consulta->fetchAll();
    if (!$resultado) {
        echo "Consulta vacía";
    } else {
        foreach ($resultado as $valor) {
            $super[] = $valor;
        }
        return $super;
    }

    $conecta = null;
}




//update
function actualiza($id, $nombre, $velocidad)
{
    $conecta = conectaDB(BBDD, USER, PASS);
    $campoId = $id;
    $campo = $nombre;
    $campoVel = $velocidad;
    $sql = "update superheroes set nombre = ':nombre',velocidad = ':velocidad' where id =:id";
    $consulta = $conecta->prepare($sql);
    $aParametros = array(
        ":nombre" => $campo,
        ":velocidad" => $campoVel,
        ":id" => $campoId
    );
    $consulta->execute($aParametros);
    $resultado = $consulta->fetchAll();
    if (!$resultado) {
        echo "Consulta vacía";
    } else {
        echo "correcto upadate";
    }
    $conecta = null;
}



//delete
function borrar($id)
{
    $conecta = conectaDB(BBDD, USER, PASS);
    $campo = $id;
    $sql = "delete from superheroes where id =:id";
    $consulta = $conecta->prepare($sql);
    $aParametros = array(
        ":id" => $campo
    );
    $consulta->execute($aParametros);
    $resultado = $consulta->fetchAll();
    if (!$resultado) {
        header("Location: index.php");
        echo "Consulta vacía";
    } else {
        header("Location: index.php");
    }
    $conecta = null;
}

function muestraSuper($id)
{
    $conecta = conectaDB(BBDD, USER, PASS);
    $campo = $id;
    $sql = "SELECT * from superheroes where id = :id";

    $consulta = $conecta->prepare($sql);
    $aParametros = array(
        ":id" => $campo
    );
    $consulta->execute($aParametros);
    $resultado = $consulta->fetchAll();

    if (!$resultado) {
        echo "Consulta vacía";
    } else {
        foreach ($resultado as $valor) {

            return $valor;
        }
    }
    $conecta = null;
}

//limpieza de datos
function limpiarDatos($dato)
{
    $dato = trim($dato);
    $dato = stripslashes($dato);
    $dato = htmlspecialchars($dato);
    return $dato;
}
