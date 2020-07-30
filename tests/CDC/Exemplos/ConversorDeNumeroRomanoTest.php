<?php

namespace CDC\Exemplos;

require "./vendor/autoload.php";

use CDC\Exemplos\ConversorDeNumeroRomano;
use PHPUnit\Framework\TestCase as PHPUnit;

class ConversorDeNumeroRomanoTest extends PHPUnit
{
    public function testDeveEntenderOSimboloI()
    {
        $romano = new ConversorDeNumeroRomano();
        $numero = $romano->converter("I");
        $this->assertEquals(1, $numero);
    }

    public function testDeveEntenderOSimboloV()
    {
        $romano = new ConversorDeNumeroRomano();
        $numero = $romano->converter("V");
        $this->assertEquals(5, $numero);
    }
}