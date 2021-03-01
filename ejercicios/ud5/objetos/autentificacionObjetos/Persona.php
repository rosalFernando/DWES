<?php
class Persona{
    private $nombre;
    private $pass;

    public function __construct($nombre,$pass){

        $this->_nombre=$nombre;
        $this->_pass=$pass;

    }

    function nombre($nombre){

        return $this->$nombre;

    }


    function pass($pass){

        return $this->$pass;
    }
    
        
    
}
?>