<?php

namespace CDC\Loja\RH;

use CDC\Loja\RH\Funcionario;

/**
 * Regra básica de negócio
 * 
 * Desenvolvedores possuem 20% de desconto caso seus salários sejam
 * maiores do que R$ 3000,0. Caso contrário, o desconto é de 10%.
 * 
 * DBAs e testadores possuem desconto de 25% se seus salários forem
 * maiores do que R$ 2500,0. 15%, em caso contrário.
 * 
 */
class CalculadoraDeSalario
{
    public function calcularSalario(Funcionario $funcionario)
    {
        // if ($funcionario->getCargo() === TabelaCargos::DESENVOLVEDOR) {

        //     if ($funcionario->getSalario() > 3000) {
        //         return 3200.00;
        //     }

        //     return 1350.0;
        // }

        // return 425.0;
        if ($funcionario->getCargo() === TabelaCargos::DESENVOLVEDOR) {
            if ($funcionario->getSalario() > 3000) {
                return $funcionario->getSalario() * 0.8;
            }

            return $funcionario->getSalario() * 0.9;
        }
        return $funcionario->getSalario() * 0.85;
    }
}