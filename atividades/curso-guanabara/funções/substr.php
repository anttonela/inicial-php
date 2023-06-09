<?php

$site = "Curso em vídeo";
$sub = substr($site,0,5);
echo "$sub ";

//          substr
// vai mostrar o texto até a posição que vc pediu, no
// caso 0-5 então vai mostrar somente a palavra "Curso",
// lembrando que começa a contar do 0;
// se colocar por exemplo ($site, 6) vai pegar só da posição 6 para
// frente, no caso só "em vídeo";
// se colocar valor negativo vai pegar as ultimas letras (-5 = "Vídeo")
