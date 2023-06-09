<?php

$frase = "Gosto de estudar Matematica";
$novaFrase = str_replace("Matematica", "PHP", $frase);
echo "{$novaFrase}";

//          str_replace
// vai aparecer: "Gosto de estudar PHP" mesmo não sendo
// a frase original pq foi pedido para PHP substituir Matematica
// se colocar para chamar matematica com letra minuscula (na frase está maiuscula)
// ele não vai reconhecer
