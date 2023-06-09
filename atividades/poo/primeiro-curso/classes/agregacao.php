<?php
// Agregação
// Na agregação, uma classe precisa da outra para executar sua ação

class Produtos {
    public $name;
    public $valor;

    function __construct($nome, $valor)
    {
        $this->name = $nome;
        $this->valor = $valor;
    }
}

class Carrinho {
    public $produtos;

    public function adiciona(Produtos $produto) {
        $this->produtos[] = $produto;
    }

    public function exibe() {
        foreach ($this->produtos as $produto) {
            echo $produto->name.'<br>';
            echo $produto->valor.'<hr>';
        }
    }
}

$produto1 = new Produtos("Notebook", "1500");
$produto2 = new Produtos("Mouse", "50");

$carrinho = new Carrinho();
$carrinho->adiciona($produto1);
$carrinho->adiciona($produto2);

$carrinho->exibe();