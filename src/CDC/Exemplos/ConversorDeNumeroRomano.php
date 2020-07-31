<?php

namespace CDC\Exemplos;

class ConversorDeNumeroRomano
{
    protected $tabela = [
        "I" => 1,
        "V" => 5,
        "X" => 10,
        "L" => 50,
        "C" => 100,
        "D" => 500,
        "M" => 1000
    ];

    public function converter($numeroEmRomano)
    {
        $acumulador = 0;
        $ultimoVizinhoDaDireita = 0;
        for ($i = strlen($numeroEmRomano) - 1; $i >= 0; $i--) {
            
            // pega o inteiro referente ao simbolo atual
            $atual = 0;
            $numCorrente = $numeroEmRomano[$i];
            if (array_key_exists($numCorrente, $this->tabela)) {
                $atual = $this->tabela[$numCorrente];
            }

            // se o da direita for menor, o multiplicaremos
            // por -1 para torná-lo negativo
            $multiplicar = 1;
            if ($atual < $ultimoVizinhoDaDireita) {
                $multiplicar = -1;
            }

            $acumulador += ($atual * $multiplicar);

            // Atualiza o vizinho da direito;
            $ultimoVizinhoDaDireita = $atual;
        }
        return $acumulador;

    }
}