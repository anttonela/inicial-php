<?php

class Produto
{
    public $id;
    public $nome;
    public $preco;
    private $estoque = 1;

    public function setPreco($preco)
    {
        if (!is_numeric($preco)) {
            echo "Preço deve ser um número.\n";
            return;
        }

        $this->preco = $preco;
    }

    public function getPreco() 
    {
        return $this->preco;
    }

    public function getEstoque() 
    {
        return $this->estoque;
    }

    public function setEstoque($valor) 
    {
        if (!is_numeric($valor)) {
            echo "Valor do estoque deve ser um número. \n";
        }

        $this->estoque = $valor;
    }

    public function aumentaEstoque($qtd)  
    {
        $novo_estoque = $this->estoque + $qtd;
        $this->setEstoque($novo_estoque);
    }

    public function aumentaPreco($percentual) 
    {
        $novo_preco = $this->getPreco() + ($this->getPreco() * ($percentual / 100));
        $this->setPreco($novo_preco);
    }
}
