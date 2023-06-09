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
function medalhasAcumuladas(int $medalhasAcumuladas, array $pais): int 
{
    return $medalhasAcumuladas + array_reduce($pais['medalhas'], 'somaMedalhas', 0);
}

$dados = array_map( 'convertePaisParaLetraMaiuscula', $dados);
$dados = array_filter($dados, 'verificaSePaisTemEspacoNoNome');

$medalhas = array_reduce(
    array_map(function (array $medalhas) 
    {
        return array_reduce($medalhas, 'somaMedalhas', 0);
    }, array_column($dados, 'medalhas')),
    'somaMedalhas',
    0
);

usort($dados, function (array $pais1, array $pais2)
{
    $medalhasPais1 = $pais1['medalhas'];
    $medalhasPais2 = $pais2['medalhas'];

    $comparacaoOuro = $medalhasPais2['ouro'] <=> $medalhasPais1['ouro'];
    $comparacaoPrata = $medalhasPais2['prata'] <=> $medalhasPais1['prata'];
    return $comparacaoOuro !== 0 ? $comparacaoOuro
        : ($comparacaoPrata !== 0 ? $comparacaoPrata
        : $medalhasPais1['bronze'] <=> $medalhasPais1['bronze']);
});

var_dump($dados);
echo array_reduce($dados, 'medalhasAcumuladas', 0);