<?php

require_once 'funcionario.php';

class Estagiario extends Funcionario{

    private $auxilioTransporte;

    public function __construct($nome, $salarioBase, $auxilioTransporte){
        parent::__construct($nome, $salarioBase);
        $this -> auxilioTransporte = $auxilioTransporte;
    }

    public function calcularSalario(){
        return $this -> salarioBase + $this -> auxilioTransporte;
    }

}

?>