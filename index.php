<?php
//TODO indexar ejercicios mediante array
function muestraImg()
{
  $estacion = date('z');
  switch ($estacion) {
    case $estacion < 79:
      echo '<img src="/assets/imagenes/estaciones/invierno.jpg" width="100%" height="200" />';
      break;
    case $estacion < 172:
      echo '<img src="/assets/imagenes/estaciones/primavera.jpg" width="100%" height="200" />';
      break;
    case $estacion < 265:
      echo '<img src="/assets/imagenes/estaciones/verano.jpg" width="100%" height="200" />';
      break;
    case $estacion < 352:
      echo '<img src="/assets/imagenes/estaciones/otonio.jpg" width="100%" height="200" />';
      break;

    default:
      echo "No se puede cargar el recurso";
      break;
  }
}

function muestraDia()
{
  $dia = date('w');
  switch ($dia) {
    case 0:
      echo '<img src="/assets/imagenes/diaSemana/domingo.jpg" width="250" height="200" />';
      break;
    case 1:
      echo '<img src="/assets/imagenes/diaSemana/lunes.jpg" width="250" height="200" />';
      break;
    case 2:
      echo '<img src="/assets/imagenes/diaSemana/martes.jpg" width="250" height="200" />';
      break;
    case 3:
      echo '<img src="/assets/imagenes/diaSemana/miercoles.jpg" width="250" height="200" />';
      break;
    case 4:
      echo '<img src="/assets/imagenes/diaSemana/jueves.jpg" width="250" height="200" />';
      break;
    case 5:
      echo '<img src="/assets/imagenes/diaSemana/viernes.jpg" width="250" height="200" />';
      break;
    case 6:
      echo '<img src="/assets/imagenes/diaSemana/sabado.jpg" width="250" height="200" />';
      break;

    default:
      echo "no se puede cargar";
      break;
  }
}

//contador

function contador()
{
  if (isset($_COOKIE['visitas'])) {

    setcookie('visitas', $_COOKIE['visitas'] + 1, time() + 3600 * 24);
    $mensaje = 'Numero de visitas: ' . $_COOKIE['visitas'];
  } else {

    setcookie('visitas', 1, time() + 3600 * 24);
    $mensaje = 'Bienvenido por primera vez a nuesta web';
  }
}

//mensaje de ultima visita

function ultimaVisita()
{
  if (isset($_COOKIE['fechaultimavisita'])) {
    $fecha_ultimavisita = $_COOKIE['fechaultimavisita'];
    $datetime1 = new DateTime(DateTime::createFromFormat('Y-m-d H:i:s', $fecha_ultimavisita)->format('Y-m-d H:i:s'));
    $datetime2 = new DateTime(date("Y-m-d H:i:s", time()));
    $interval = $datetime1->diff($datetime2);
    $anio = $interval->format('%Y');
    $mes = $interval->format('%m');
    $dia = $interval->format('%d');
    $hora = $interval->format('%H');
    $minutos = $interval->format('%i');
    $segundos = $interval->format('%s');
    echo "<br>Estas de regreso!... tu última visita fue hace: <b>" . $anio . "</b> años, <b>" . $mes . "</b> meses, <b>" . $dia . "</b> días, <b>" . $hora . "</b> horas, <b>" . $minutos . "</b> minutos, <b>" . $segundos . "</b> segundos";
  } else {
    $fecha_visita = date('Y-m-d H:i:s');
    setcookie('fechaultimavisita', $fecha_visita, time() + 31536000);
    echo "Eres nuevo, el sitio te gustará";
  }
}


?>

<!DOCTYPE html>
<html lang="es">

<head>
  <title>Bienvenida</title>
  <meta charset="UTF-8">
  <link href="/CSS/stilosGerenal.css" rel="stylesheet" type="text/css">
</head>
<header>
  <?php muestraImg() ?>
  <div id="header">
    

  <h3>Unidad 2.</h3>
        <ul>
          <li><a href="./ejercicios/ud2TecnologiasServidor/areaCirculo.php">Area Circulo</a> <a href="https://github.com/rosalFernando/DWES/blob/main/ejercicios/ud2TecnologiasServidor/areaCirculo.php">Ver Codigo</a></li>
          <li><a href="./ejercicios/ud2TecnologiasServidor/fichaPersonal.php">Ficha Personal</a> <a href="https://github.com/rosalFernando/DWES/blob/main/ejercicios/ud2TecnologiasServidor/fichaPersonal.php">Ver Codigo</a></li>
          <li><a href="./ejercicios/ud2TecnologiasServidor/holaMundo.php">Hola Mundo</a> <a href="https://github.com/rosalFernando/DWES/blob/main/ejercicios/ud2TecnologiasServidor/holaMundo.php">Ver Codigo</a></li>
          <li><a href="./ejercicios/ud2TecnologiasServidor/info.php">Informacion</a> <a href="https://github.com/rosalFernando/DWES/blob/main/ejercicios/ud2TecnologiasServidor/info.php">Ver Codigo</a></li>
          <li><a href="./ejercicios/ud2TecnologiasServidor/operaciones.php">Operaciones 1</a> <a href="https://github.com/rosalFernando/DWES/blob/main/ejercicios/ud2TecnologiasServidor/operaciones.php">Ver Codigo</a></li>
          <li><a href="./ejercicios/ud2TecnologiasServidor/operaciones2.php">Operaciones 2</a> <a href="https://github.com/rosalFernando/DWES/blob/main/ejercicios/ud2TecnologiasServidor/operaciones2.php">Ver Codigo</a></li>
          <li><a href="./ejercicios/ud2TecnologiasServidor/sumaVariables.php">Suma Variables</a> <a href="https://github.com/rosalFernando/DWES/blob/main/ejercicios/ud2TecnologiasServidor/sumaVariables.php">Ver Codigo</a></li>
          <li><a href="./ejercicios/ud2TecnologiasServidor/tipoDatos.php">Tipos de Datos</a> <a href="https://github.com/rosalFernando/DWES/blob/main/ejercicios/ud2TecnologiasServidor/tipoDatos.php">Ver Codigo</a></li>
       
        </ul>

      <h3>Unidad 3.</h3>
        <ul>
          
          <li><a href="./ejercicios/ud3Programacion/arrays/mesAnnyo.php">Mes del Año</a> <a href="https://github.com/rosalFernando/DWES/blob/main/ejercicios/ud3Programacion/arrays/mesAnnyo.php">Ver Codigo</a></li>
          <li><a href="./ejercicios/ud3Programacion/arrays/notasAlumnos.php">Notas Alumnos</a> <a href="https://github.com/rosalFernando/DWES/blob/main/ejercicios/ud3Programacion/arrays/notasAlumnos.php">Ver Codigo</a></li>
          <li><a href="./ejercicios/ud3Programacion/arrays/continentes.php">Banderas</a>  <a href="https://github.com/rosalFernando/DWES/blob/main/ejercicios/ud3Programacion/arrays/continentes.php">Ver Codigo</a></li>
          <li><a href="./ejercicios/ud3Programacion/formularios/message/message.php">Portfolio</a> <a href="https://github.com/rosalFernando/DWES/tree/main/ejercicios/ud3Programacion/formularios/message">Ver Codigo</a></li>
          <li><a href="./ejercicios/ud3Programacion/formularios/continentes.php">Banderas Formulario</a> <a href="https://github.com/rosalFernando/DWES/blob/main/ejercicios/ud3Programacion/formularios/continentes.php">Ver Codigo</a></li>
          <li><a href="./ejercicios/ud3Programacion/arrays/verbos.php">Verbos Irregulares</a> <a href="https://github.com/rosalFernando/DWES/blob/main/ejercicios/ud3Programacion/arrays/verbos.php">Ver Codigo</a></li>
          <li><a href="./ejercicios/ud3Programacion/formularios/sumaNumeros.php">Suma de Numeros</a> <a href="https://github.com/rosalFernando/DWES/blob/main/ejercicios/ud3Programacion/formularios/sumaNumeros.php">Ver Codigo</a></li>
          <li><a href="./ejercicios/ud3Programacion/formularios/calendario1.php">Calendario</a> <a href="https://github.com/rosalFernando/DWES/blob/main/ejercicios/ud3Programacion/formularios/calendario1.php">Ver Codigo</a></li>
          <li><a href="./ejercicios/ud3Programacion/funcionesPHP/comprobarDNI/formulario.php">CompruebaDNI</a> <a href="https://github.com/rosalFernando/DWES/tree/main/ejercicios/ud3Programacion/funcionesPHP/comprobarDNI">Ver Codigo</a></li>
          <li><a href="./ejercicios/ud3Programacion/funcionesPHP/factorizarNum/formulario.php">Factoriza Numero</a> <a href="https://github.com/rosalFernando/DWES/tree/main/ejercicios/ud3Programacion/funcionesPHP/factorizarNum">Ver Codigo</a>></li>
          <li><a href="./ejercicios/ud3Programacion/funcionesPHP/generaNombres/generaNombres.php">Generador de Nombres</a> <a href="https://github.com/rosalFernando/DWES/tree/main/ejercicios/ud3Programacion/funcionesPHP/generaNombres">Ver Codigo</a></li>
          <li><a href="./ejercicios/ud3Programacion/funcionesPHP/muestraEnlaces/enlaces.php">Muestra Enlaces</a> <a href="https://github.com/rosalFernando/DWES/blob/main/ejercicios/ud3Programacion/funcionesPHP/muestraEnlaces/enlaces.php">Ver Codigo</a></li>
          <li><a href="./ejercicios/ud3Programacion/funcionesPHP/recursivas/formulario.php">Recursividad</a> <a href="https://github.com/rosalFernando/DWES/tree/main/ejercicios/ud3Programacion/funcionesPHP/recursivas">Ver Codigo</a></li>
        </ul>

        <h3>Unidad 4.</h3>
        <ul>
          <li><a href="./ejercicios/ud4/autentificacion/auth/index.php">Autentificacion</a> <a href="https://github.com/rosalFernando/DWES/tree/main/ejercicios/ud4/autentificacion/auth">Ver Codigo</a></li>
          <li><a href="./ejercicios/ud4/autentificacion/registroAuth/index.php">Registro</a> <a href="https://github.com/rosalFernando/DWES/tree/main/ejercicios/ud4/autentificacion/registroAuth">Ver Codigo</a></li>
          <li><a href="./ejercicios/ud4/coockies/cookieLimitada.php">cookie limitada</a> <a href="https://github.com/rosalFernando/DWES/blob/main/ejercicios/ud4/coockies/cookieLimitada.php">Ver Codigo</a></li>
          <li><a href="./ejercicios/ud4/coockies/formularioCookie.php">formulario cookie</a> <a href="https://github.com/rosalFernando/DWES/blob/main/ejercicios/ud4/coockies/formularioCookie.php">Ver Codigo</a></li>
          <li><a href="./ejercicios/ud4/coockies/ejercicio2/cookie1.php">Ejercicio cookie</a> <a href="https://github.com/rosalFernando/DWES/blob/main/ejercicios/ud4/coockies/ejercicio2/cookie1.php">Ver Codigo</a></li>
          <li><a href="./ejercicios/ud4/ficheros/ejemploClase/form.html">Ficheros</a> <a href="https://github.com/rosalFernando/DWES/tree/main/ejercicios/ud4/ficheros/ejemploClase">Ver Codigo</a></li>
          <li><a href="./ejercicios/ud4/sesiones/agenda/index.php">Agenda</a> <a href="https://github.com/rosalFernando/DWES/tree/main/ejercicios/ud4/sesiones/agenda">Ver Codigo</a></li>
          <li><a href="./ejercicios/ud4/sesiones/buscaminas/index.php">Buscaminas</a> <a href="https://github.com/rosalFernando/DWES/tree/main/ejercicios/ud4/sesiones/buscaminas">Ver Codigo</a></li>
          <li><a href="./ejercicios/ud4/sesiones/gestionAcademica/index.php">Gestion academica</a> <a href="https://github.com/rosalFernando/DWES/tree/main/ejercicios/ud4/sesiones/gestionAcademica">Ver Codigo</a></li>
        </ul>
      
        <h3>Unidad 5.</h3>
        <ul>
          <li><a href="./ejercicios/ud5/objetos/autentificacionObjetos/index.php">Autentificacion Objetos</a> <a href="https://github.com/rosalFernando/DWES/tree/main/ejercicios/ud5/objetos/autentificacionObjetos">Ver Codigo</a></li>
          <li><a href="./ejercicios/ud5/objetos/carritoCompra/index.php">carrito</a> <a href="https://github.com/rosalFernando/DWES/tree/main/ejercicios/ud5/objetos/carritoCompra">Ver Codigo</a></li>
          <li><a href="./ejercicios/ud5/objetos/mascotas_autoload/index.php">MAscotas autoload</a> <a href="https://github.com/rosalFernando/DWES/tree/main/ejercicios/ud5/objetos/mascotas_autoload">Ver Codigo</a></li>
        </ul>

        <h3>Unidad 6.</h3>
        <ul>
          <li><a href="./ejercicios/ud6/CRUDbasico/index.php">CRUD Basico</a> <a href="https://github.com/rosalFernando/DWES/tree/main/ejercicios/ud6/CRUDbasico">Ver Codigo</a></li>
          <li><a href="./ejercicios/ud6/CRUDPrepare/index.php">CRUD Prepare</a> <a href="https://github.com/rosalFernando/DWES/tree/main/ejercicios/ud6/CRUDPrepare">Ver Codigo</a></li>
          <li><a href="./ejercicios/ud6/CRUDSuperHeroe/index.php">CRUD Superheroe</a> <a href="https://github.com/rosalFernando/DWES/tree/main/ejercicios/ud6/CRUDSuperHeroe">Ver Codigo</a></li>
          <li><a href="./ejercicios/ud6/primeraConexion/index.php">Primera conexion</a> <a href="https://github.com/rosalFernando/DWES/tree/main/ejercicios/ud6/primeraConexion">Ver Codigo</a></li>
          <li><a href="./ejercicios/ud6/pruebasingleton/index.php">Singleton</a> <a href="https://github.com/rosalFernando/DWES/tree/main/ejercicios/ud6/pruebasingleton">Ver Codigo</a></li>
          <li><a href="./ejercicios/ud6/symblog/views/index.twig">Symblog</a> <a href="https://github.com/rosalFernando/DWES/tree/main/ejercicios/ud6/symblog">Ver Codigo</a></li>
        </ul>





  </div>

</header>

<body>
  <h1>DIWES</h1>
  <h2>ESPACIO DE PRESENTACION DE EJERCICIOS</h2>
  <h3>Fernando del Rosal Cuesta.</h3>
  <p>contador de visitas: <?php contador() ?></p>


</body>

<footer>
  <?php muestraDia() ?>
  <?php ultimaVisita() ?>
</footer>

</html>