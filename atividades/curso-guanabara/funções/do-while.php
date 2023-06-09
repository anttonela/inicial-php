<?php

$contador = 1;

echo "\n\n";
while ($contador <=10) {
	echo "\tEm while -> O contador é {$contador}\n";
	$contador++;
}

echo "\n\n";
$contador = 1;

do {
	echo "\tEm forma Do e While -> O contador é {$contador}\n" . " ";
	$contador++;
} while ($contador <= 10);