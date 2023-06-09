<?php
// Composição
// Na composição, uma classr cria a instância de outra classe dentro de si própia, sendo assim,
// quando ela for destruída, a outra classe também será.

use Pessoa as GlobalPessoa;

class Pessoa {
   public function atribuiNome($nome) {
    return "O nome da pessoa é $nome";
   }
}

class Exibe {
    public $pessoa;
    public $nome;

    function __construct($nome)
    {
        $this->pessoa = new Pessoa();
        $this->nome = $nome;
    }

    public function exibeNome() {
        echo $this->pessoa ->atribuiNome($this->nome);
    }
}

$exibe = new Exibe("Antonela");
$exibe->exibeNome();