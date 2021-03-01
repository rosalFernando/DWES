<?php
include_once('funciones/funciones.php');


if($_GET['id']){
    $id = $_GET['id'];
    $super = muestraSuper($id);

  echo  <<< EOT
  <html>

<head>
    <title>Actualizar</title>
</head>

<body>
    <form action='' method='post'>
        <input type="text" name="nombre" id="nombre" value=" {$super['nombre']}" required>
        <input type="number" name="velocidad" id="velocidad" value=" {$super['velocidad']}" required>
        <input type='submit' name="actualizar" value="actualizar">
        <a href="index.php">Volver</a>
    </form>
</body>

</html>
EOT;

}else{
    echo  <<< EOT
    <html>
  
  <head>
      <title>Actualizar</title>
  </head>
  
  <body>
      <form action='' method='post'>
          <input type="text" name="nombre" id="nombre" required>
          <input type="number" name="velocidad" id="velocidad" required>
          <input type='submit' name="aniadir" value="Añadir">
          <a href="index.php">Volver</a>
      </form>
  </body>
  
  </html>
  EOT;
}


if (isset($_POST['actualizar'])) {
    if (isset($_POST['nombre']) && isset($_POST['velocidad'])) {
        $nombre = limpiarDatos($_POST['nombre']);
        $velocidad = limpiarDatos(($_POST['velocidad']));
        actualiza($id, $nombre,$velocidad);
        header("Location: index.php");
    }
}

if (isset($_POST['aniadir'])) {
    if (isset($_POST['nombre']) && isset($_POST['velocidad'])) {
        $nombre = limpiarDatos($_POST['nombre']);
        $velocidad = limpiarDatos(($_POST['velocidad']));
        inserta($nombre,$velocidad);
        header("Location: index.php");
    }
}


