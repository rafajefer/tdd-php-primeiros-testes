<?php

namespace CDC\Exemplos;

class ConversorDeNumeroRomano
{
    protected $tabela = [
        "I" => 1,
        "II" => 2,
        "V" => 5,
        "X" => 10,
        "L" => 50,
        "C" => 100,
        "D" => 500,
        "M" => 1000
    ];

    public function converter($numeroEmRomano)
    {
        if (array_key_exists($numeroEmRomano, $this->tabela)) {
            return $this->tabela[$numeroEmRomano];
        }
    }
}