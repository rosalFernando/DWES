<?php
require_once 'vendor/autoload.php';
use App\Models\Perro;
use App\Models\Persona;

echo "hola mundo";

$perro = new Perro();
$perro -> saluda();

$persona = new Persona();
$persona -> saluda();
?>