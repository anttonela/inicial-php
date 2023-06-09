<?php

// para ligar com o arquivo txt
$arquivo = "dados.txt";

// abrindo e liberando para ler e escrever
$abrir = fopen($arquivo, 'r+');

//praq ter no maximo 512
$quantidade = fread($abrir, 512);

// adicionar sempre + 1
$contador = $quantidade + 1;

// aparecer na tela
print "<br/>A quantidade de visitas é: {$contador}<br/>";
print "<br/>Você é o visitante número {$contador}";

// pra mover posicao zero
fseek($abrir, 0);

// escrever
fwrite($abrir, $contador);

// fechando
fclose($abrir);