<?php

namespace CDC\Loja\RH;

require "./vendor/autoload.php";

use PHPUnit\Framework\TestCase as PHPUnit;
use CDC\Loja\RH\Funcionario, CDC\Loja\RH\TabelaCargos, CDC\Loja\RH\CalculadoraDeSalario;

class CalculadoraDeSalarioTest extends PHPUnit
{
    public function testCalculoSalarioDesenvolvedoresComSalarioAbaixoDoLimite()
    {
        $calculadora = new CalculadoraDeSalario();
        $desenvolvedor = new Funcionario("Rodrigo", 1500.0, TabelaCargos::DESENVOLVEDOR);
        $salario = $calculadora->calcularSalario($desenvolvedor);
        $this->assertEquals(1500.0 * 0.9, $salario, null, 0.00001);
    }

    public function testCalculoSalarioDesenvolvedoresComSalarioAcimaDoLimite()
    {
        $calculadora = new CalculadoraDeSalario();
        $desenvolvedor = new Funcionario("Rafael", 4000.0, TabelaCargos::DESENVOLVEDOR);
        $salario = $calculadora->calcularSalario($desenvolvedor);
        $this->assertEquals(4000.0 * 0.8, $salario, null, 0.00001);
    }
}