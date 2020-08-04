<?php

namespace CDC\Loja\Carrinho;

use CDC\Loja\Carrinho\Builder\CarrinhoDeComprasBuilder;
use PHPUnit\Framework\TestCase;
use CDC\Loja\Carrinho\CarrinhoDeCompras;
use CDC\Loja\Produto\Produto;

class CarrinhoDeComprasTest extends TestCase
{

    private $carrinho;

    protected function setUp()
    {
        $this->carrinho = new CarrinhoDeCompras();
        parent::setUp();
    }

    public function testDeveRetornarZeroSeCarrinhoVazio()
    {
        $valor = $this->carrinho->maiorValor($this->carrinho);
        $this->assertEquals(0, $valor, null, 0.0001);
    }

    public function testDeveRetornarValorDoItemSeCarrinhoCom1Elemento()
    {
        $this->carrinho->adicionar(new Produto("Geladeira", 1, 900.00));
        $valor = $this->carrinho->maiorValor($this->carrinho);
        $this->assertEquals(900.00, $valor, null, 0.0001);
    }

    public function testDeveRetornarMaiorValorSeCarrinhoComMuitosElementos()
    {
        // $this->carrinho->adicionar(new Produto("Geladeira", 1, 900.00));
        // $this->carrinho->adicionar(new Produto("Fogão", 1, 1500.00));
        // $this->carrinho->adicionar(new Produto("Máquina de lavar", 1, 750.00));
        // $valor = $this->carrinho->maiorValor($this->carrinho);
        // $this->assertEquals(1500.00, $valor, null, 0.00001);
        $carrinho = (new CarrinhoDeComprasBuilder())->comItens(200.0, 300)->criar();
        $valor = $carrinho->maiorValor($carrinho);
        $this->assertEquals(300, $valor, null, 0.00001);
    }
}