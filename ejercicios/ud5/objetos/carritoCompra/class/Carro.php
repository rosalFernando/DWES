<?php

class Carro{
    public $fecha;
    public $direccion;
    public $productos = array();

    public function __construct($aDatos){
        $this->fecha = $aDatos[0];
        $this->direccion = $aDatos[1]; 
    }
    public function addProducto($producto){
        array_push($this->productos, $producto);
    }
    public function calcularCarro(){
        $total = 0;
        foreach($this->productos as $producto){
            foreach($producto as $key => $value){
                if($key == "precio"){
                    $total += $value;
                }
            }
        }
        return $total;
    }
}
?>