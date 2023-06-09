<!--
    SubPasta 2 - Atividade 4 - Ordenando a lista
atividade para focar em entender "usort" que foi usado
para ordernar o "peso" de cada medalha e deixar os países 
em ordem de acordo com a quantidade

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

// recebe país 1 e 2, em cima desses países precisa ser realizado uma
// comparação, indicar qual país deve vim primeiro e depois 
usort($dados, function (array $pais1, array $pais2)
{
//se o país um tiver mais medalhas precisa retornar -1, senão precisa
//retornar 1, para isso pegar as medalhas do país um e dois
    $medalhasPais1 = $pais1['medalhas'];
    $medalhasPais2 = $pais2['medalhas'];

    $comparacaoOuro = $medalhasPais2['ouro'] <=> $medalhasPais1['ouro'];
    $comparacaoPrata = $medalhasPais2['prata'] <=> $medalhasPais1['prata'];

// operador "<=>" simplificador, se o primeiro item "$comparacaoOuro" já
// retorna -1 se foi maior retorna , formato decrescente invertendo operadores
// retornar se as medalhas do país um de ouro forem maiores do que do país 
// dois deve retornar -1, senão retornar 1, simplificação abaixo
// mesma lógica com medalha de ouro, prata e ouro
// para retornar zero precisa realizar comparação a mais para adicionar 0 medalhas para não dar erro
// "!== 0 ?" isso aqui é diferente de zero?, se for então retorna a própia comparação do ouro, se não for diferente de zero (ser zero), comparação com a prata
    return $comparacaoOuro !== 0 ? $comparacaoOuro
        : ($comparacaoPrata !== 0 ? $comparacaoPrata
        : $medalhasPais1['bronze'] <=> $medalhasPais1['bronze']);
});


var_dump($dados);
echo array_reduce($dados, 'medalhasAcumuladas', 0);