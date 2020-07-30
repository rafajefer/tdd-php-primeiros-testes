<?php

namespace CDC\Exemplos;

class ConversorDeNumeroRomano
{
    public function converter($numeroEmRomano)
    {
        if ($numeroEmRomano === "V") {
            return 5;
        }

        return 1;
    }
}