<?php

namespace CDC\Loja\Produto;

require "./vendor/autoload.php";

use CDC\Loja\Carrinho\CarrinhoDeCompras,
    CDC\Loja\Produto\Produto,
    CDC\Loja\Produto\MaiorEMenor;
use PHPUnit\Framework\TestCase as PHPUnit;

class MaiorEMenorTest extends PHPUnit
{
    public function testOrdemDecrescente()
    {
        $carrinho = new CarrinhoDeCompras();

        $carrinho->adicionar(new Produto("Geladeira", 450.00));
        $carrinho->adicionar(new Produto("Liquidificador", 250.00));
        $carrinho->adicionar(new Produto("Jogo de pratos", 70.00));

        $maiorMenor = new MaiorEMenor();
        $maiorMenor->encontrar($carrinho);

        $this->assertEquals("Jogo de pratos", $maiorMenor->getMenor()->getNome());
        $this->assertEquals("Geladeira", $maiorMenor->getMaior()->getNome());
    }

    public function testApenasUmProduto()
    {
        $carrinho = new CarrinhoDeCompras();
        
        $carrinho->adicionar(new Produto("Geladeira", 450.00));

        $maiorMenor = new MaiorEMenor();
        $maiorMenor->encontrar($carrinho);

        $this->assertEquals("Geladeira", $maiorMenor->getMenor()->getNome());
        $this->assertEquals("Geladeira", $maiorMenor->getMaior()->getNome());
        $this->assertInstanceOf("CDC\Loja\Produto\Produto", $maiorMenor->getMenor());
        $this->assertInstanceOf("CDC\Loja\Produto\Produto", $maiorMenor->getMaior());
        $this->assertInternalType("object", $maiorMenor->getMenor());
        $this->assertInternalType("object", $maiorMenor->getMaior());
    }
}