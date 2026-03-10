<?php

class Divisão{

    public $valor1;
    public $valor2;

    public function __construct($valor1, $valor2){
        $this -> valor1 = $valor1;
        $this -> valor1 = $valor2;
    }

    public function Dividir(){
        return $this -> valor1 / $this -> valor2;
    }
     
}

?>