<?php

class Funcionario{

    protected $nome;
    protected $salarioBase;

    public function __construct($nome, $salarioBase){
        $this -> nome = $nome;
        $this -> salarioBase = $salarioBase;
    }

    public function getNome(){
        return $this -> nome;
    }

    public function calcularSalario(){
        return $this -> salarioBase;
    }
    
}

?>