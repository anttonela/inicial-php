
<!--    SubPasta 2 - Atividade dois - Filtrando países - array_filter

<?php
$dados = require 'dados.php';
$contador = count($dados);
echo "Número de países: $contador\n";
function convertePaisParaLetraMaiuscula(array $pais): array
{
    $pais['pais'] = mb_convert_case($pais['pais'], MB_CASE_UPPER);
    return $pais;
}

//              Filtrando !
// essa atividade tem como foco filtrar/verificar os países
// que possuem espaço no nome, com foco em entender a função
// do array_filter

function verificaSePaisTemEspacoNoNome(array $pais): bool
{

// aqui em pais a posição do espaço tem que ser diferente de
// falso, ou seja, ela precisa existir em algum lugar
// strpos   posição de uma string
//                       needle:
    return strpos($pais['pais'],' ') !== false;
}
$dados = array_map( 'convertePaisParaLetraMaiuscula', $dados);

//                   callback:
$dados = array_filter($dados, 'verificaSePaisTemEspacoNoNome');
// se a funçao retornar verdadeiro aquele país vai ser incluido 
// na lista final, se retornar falso vai ser excluido

// se tem um array por exemplo de valores pares e impares
// e quer deixar só os valores impares então cria umma função
// que retorna verdadeiro quando o número for impar, então 
// assim cria uma função que resolve o problema e deixa que
// a linguagem/ferramenta resolva o problema
var_dump($dados);