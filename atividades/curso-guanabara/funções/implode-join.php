<?php

print "\n";

$vetor[0] = "Curso";
$vetor[1] = "em";
$vetor[2] = "vídeo";

$texto = implode("#", $vetor);
print $texto;

//          implode
// vai colocar # no lugar no espaço, deixando assim:
// Curso#em#vídeo | para tirar é só colocar " "

//          join
// funciona da mesma maneira, só trocar implode por join()