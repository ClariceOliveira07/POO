<?php

class Subtração{

    public $valor1;
    public $valor2;

    public function __construct($valor1, $valor2){
        $this -> valor1 = $valor1;
        $this -> valor1 = $valor2;
    }

    public function Subtrair(){
        return $this -> valor1 - $this -> valor2;
    }
     
}

?>