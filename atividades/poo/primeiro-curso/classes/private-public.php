<?php
// variáveis e funções private e public

class Login {
    private $email;
    private $senha;

    public function getEmail() {
        return $this->email;

    }

    public function setEmail($e) {
        $email = filter_var($e, FILTER_SANITIZE_EMAIL);
        $this->email = $email;
    }

    public function getSenha() {
        return $this->senha;

    }

    public function setSenha($s) {
        $this->senha = $s;
    }

    public function Logar() {
        if($this->email == "teste@teste.com" and $this->senha == "123456") :
            echo "Logado com sucesso!";
        else: 
            echo "Dados Inválidos!";
        endif; 
    } 
}

$logar = new Login();
$logar->setEmail("teste@teste.com");
$logar->setSenha("123456");
$logar->Logar();
echo "<br>";
echo $logar->getEmail();