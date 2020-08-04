<?php

namespace CDC\Loja\Carrinho\Builder;

use CDC\Loja\Carrinho\CarrinhoDeCompras;
use CDC\Loja\Produto\Produto;

class CarrinhoDeComprasBuilder
{
    public $carrinho;
    
    public function __construct()
    {
        $this->carrinho = new CarrinhoDeCompras();
    }

    public function comItens()
    {
        $valores = func_get_args();
        foreach ($valores as $valor) {
            $this->carrinho->adicionar(new Produto("Item", $valor, 1));
        }
        return $this;
    }
    
    public function criar()
    {
        return $this->carrinho;
    }
}