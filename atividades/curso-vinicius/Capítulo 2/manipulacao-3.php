
<!--    SubPasta 2 - Atividade três - Contando Medalhas
  atividade com foco em <array_reduce>, 
vai ser utilizado para reduzir a quantidade de medalhas, ou seja,somar todas as
 medalhas de cada país, (("Brasil""ouro" => 3,"prata" => 5,
 "bronze" => 3)) = reduzir para 11 medalhas

<?php
$dados = require 'dados.php';
$contador = count($dados);
echo "Número de países: $contador\n";

//  somaMedalhas  e  medalhasAcumuladas
// função acumuladora, recebe o número de medalhas que já 
// acumulou e o valor atual que está percorrenrdo (o numero
// de medalhas) ,retornar para ser acumulado e passado para
// a próxima interação, dessa função
// int = para indicar inteiro já que não existe 1,5 medalha
// initial para zerar, iniciar do 0

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

// acumular e retornar medalhas
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
var_dump($dados);

echo array_reduce($dados, 'medalhasAcumuladas', 0);