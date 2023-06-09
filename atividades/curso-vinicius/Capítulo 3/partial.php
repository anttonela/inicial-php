<!--
    SubPasta 3 - Aula 1 - Aplicações de funções parciais

<?php

function dividir($a, $b)
{
    return $a / $b;
}

function dividirPor(int $divisor)
{
    return function ($numero) use ($divisor) {
        return dividir($numero, $divisor);
    };
}

$dividirPor2 = dividirPor(2);
//dividirPor2 feito para a divisão ocorrer sempre
//por dois para não ter que preencher ex
// echo $dividirPor2(4, 2) . PHP_EOL;
echo $dividirPor2(4) . PHP_EOL;
echo $dividirPor2(5) . PHP_EOL;
echo $dividirPor2(10) . PHP_EOL;
