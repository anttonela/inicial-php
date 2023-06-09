<!--
      SubPasta 4 - Atividadde um - Composição de funções
<?php
$dados = require 'dados.php';
$contador = count($dados);
echo "Número de países: $contador\n";

function somaMedalhas(int $medalhasAcumuladas, int $medalhas) 
{
    return $medalhasAcumuladas + $medalhas;
}
function convertePaisParaLetraMaiuscula(array $pais): array
{
    $pais['pais'] = mb_convert_case($pais['pais'], MB_CASE_UPPER);
    return $pais;
}
function verificaSePaisTemEspacoNoNome(array $pais): bool
{
    return strpos($pais['pais'],' ') !== false;
}
function comparaMedalhas(array $medalhasPais1, array $medalhaPais2, string $modalidade): int
{
    return $medalhaPais2[$modalidade] <=> $medalhasPais1[$modalidade];
}
function medalhasAcumuladas(int $medalhasAcumuladas, array $pais): int 
{
    return $medalhasAcumuladas + array_reduce($pais['medalhas'], 'somaMedalhas', 0);
}

$dados = array_filter(array_map( 'convertePaisParaLetraMaiuscula', $dados), 'verificaSePaisTemEspacoNoNome');
// antes era assim:
//      $dados = array_map( 'convertePaisParaLetraMaiuscula', $dados);
//      $dados = array_filter($dados, 'verificaSePaisTemEspacoNoNome');
// foi mudado com o objetivo de reduzir e tornar mais simples. 

$medalhas = array_reduce(
    array_map(function (array $medalhas) 
    {
        return array_reduce($medalhas, 'somaMedalhas', 0);
    }, array_column($dados, 'medalhas')),
    'somaMedalhas',
    0
);

usort($dados, function (array $pais1, array $pais2) use ($comparaMedalhas)
{
    $medalhasPais1 = $pais1['medalhas'];
    $medalhasPais2 = $pais2['medalhas'];
    $comparador = $comparaMedalhas($medalhasPais1, $medalhasPais2);

    return $comparador('ouro') !== 0 ? $comparador('ouro')
        : ($comparador('prata') !== 0 ? $comparador('prata')
        : $comparador('bronze'));
});

var_dump($dados);
echo array_reduce($dados, 'medalhasAcumuladas', 0);