<?php
// extends

class Animal {
    public function andar() {
        echo "O animal andou";
    }
}

class Cavalo extends Animal {
    public function Andar() {
        echo "O cavalo andou";
    }
}

$animal = new Animal();
$animal->Andar();