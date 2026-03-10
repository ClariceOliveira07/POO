<?php

class Multiplicação{

    public $valor1;
    public $valor2;

    public function __construct($valor1, $valor2){
        $this -> valor1 = $valor1;
        $this -> valor1 = $valor2;
    }

    public function Multiplicar(){
        return $this -> valor1 * $this -> valor2;
    }
     
}

?>