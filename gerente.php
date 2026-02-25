<?php

require_once 'funcionario.php';

class Gerente extends Funcionario{

    private $bonus;

    public function __construct($nome, $salarioBase, $bonus){
        parent::__construct($nome, $salarioBase);
        $this -> bonus = $bonus;
    }

    public function calcularSalario(){
        return $this -> salarioBase + $this -> bonus;
    }

}

?>