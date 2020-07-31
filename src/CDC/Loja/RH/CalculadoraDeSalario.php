<?php

namespace CDC\Loja\RH;

use CDC\Loja\RH\Funcionario;

class CalculadoraDeSalario
{
    public function calcularSalario(Funcionario $funcionario)
    {
        if ($funcionario->getSalario() > 3000) {
            return 3200.00;
        }
        
        return 1350.0;
    }
}