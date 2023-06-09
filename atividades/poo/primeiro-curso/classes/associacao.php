<?php
// associação
// acontece quando um objeto "utiliza" outro, porém, sem que eles dependam um do outro

class Pedido {
    public $numero;
    public $cliente;
}

class Cliente {
    public $nome;
    public $endereco;
}

$cliente = new Cliente();
$cliente->nome = "Rodrigo OLiveira";
$cliente->endereco = "Rua 2, Número: 177";

$pedido = new Pedido();
$pedido->numero = "123";
$pedido->cliente = $cliente;