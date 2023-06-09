
<!--     SubPasta 2 - Atividade um - array_map       - - -
<?php
$dados = require 'dados.php';
$contador = count($dados);
echo "Número de países: $contador\n";


//                   Mapeando
// a função dessa atividade é deixar todos os nomes dos países
// que estão no arquivo "dados.php" em letra maiuscula.
//   !!   foco em entender na prática "array_map"    !!


// cada um dos itens nesse array a função vai ser executada
function convertePaisParaLetraMaiuscula(array $pais) 
// função recebendo por parâmetro um país (array)

{

// antes aqui tinha sido colocado "mode:strtoupper" mas foi alterado 
// pois ele não deixa caracteres com acento em letra maiuscula, já
// o "mb_convert_case" deixa, e o "MB_CASE_UPPER" é para acompanhar 
// nesse convert
//                                            mode:
    $pais['pais'] = mb_convert_case($pais['pais'], MB_CASE_UPPER);

// retornar o país com ele já alterado com os itens corretos
    return $pais;
}


//          callback:
$dados = array_map( 'convertePaisParaLetraMaiuscula', $dados);
// array_map: mapeamento de dados, recebe uma função que vai ser 
// executada para cada um dos itens e recebe o array que contém 
// os itens que quer mapear

var_dump($dados);