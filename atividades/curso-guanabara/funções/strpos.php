<?php

$frase = "Estou aprendendo PHP";
$pos = strpos($frase, "PHP");
echo "\nA string foi encontrada na posição {$pos}";

//      strpos
//  mostra a posciao da palavra (começando do 0 e o espaço conta)
// se colocar em letra diferente ele não entende, exemplo:
// pedir para mostrar "php" sendo que no texto esa "PHP"
// quem consegue encontrar msm sendo diferente é 'stripos'