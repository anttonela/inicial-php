<?php
// clone
// construct
// invoke
// tostring
// get
// set

class Pessoa {
    private $nome;

    public function __set($nome, $valor) {
        $this->dados[$nome] = $valor;
    }

    public function __get($nome) {
        return $this->dados[$nome];
    }

    public function __toString() {
        return "tentei imprimir o objeto";
    }

    public function __invoke() {
        return "Objeto como função";
    }
}


$pessoa = new Pessoa();
echo $pessoa;