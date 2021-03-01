<?php
include_once('funciones/funciones.php');

$id = $_GET['id'];
$super = muestraSuper($id);


if (isset($_POST['actualizar']) && $_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['nombre'])) {
        $nombre = $_POST['nombre'];
        actualiza($id, $nombre);
        header("Location: index.php");
    }
}
?>

<html>

<head>
    <title>Actualizar</title>
</head>

<body>
    <form action='' method='post'>
        <input type="text" name="nombre" id="nombre" value="<?php echo $super['nombre'] ?>" required>
        <input type='submit' name="actualizar" value="actualizar">
        <a href="index.php">Volver</a>
    </form>
</body>

</html>