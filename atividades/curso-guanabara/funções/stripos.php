<?php

$frase = "Estou aprendendo PHP";
$pos = stripos($frase, "PHP");
echo "\nA string foi encontrada na posição {$pos}";

//      stripos
// encontra "PHP" na frase e mostra a posição que está (17)
// msm se colocar "php" em vez de "PHP" (a forma que está no texto)
// ele irá encontrar, quem não encontra é o strpos