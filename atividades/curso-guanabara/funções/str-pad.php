<?php

$nome = "Antonela";
$novo = str_pad($nome, 30, " ", STR_PAD_RIGHT);
print("A $novo está aprendendo php");

//  str_pad e STR_PAD_RIGHT
// no exemplo está 30 caracteres, como a frase não tem 30
// a função iria complementar a\ partir de onde foi chamado
// exemplo: A Antonela            esta aprendendo php
// puxou para a direita até 30 e só foi depois de Antonela
// pq é onde a função começou a ser chamada
// tem como tambem centralizar e deixar para a esquerda, não
// só para a direita