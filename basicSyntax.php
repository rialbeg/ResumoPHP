<!-- php funciona dentro das tags de php(<?php ?>). 
Se o arquivo só tiver código php então não se deve colocar a tag de fechamento (?>) -->

<?php

echo 'Hello'; //Deve-se usar ponto e vírgula. Strings podem ter aspas simples ou duplas

//variaveis são decalradas com $
$name = 'Gabriel';

// variaveis são declaradas por valor

$x = 1; // x = 1
$y = $x; // y = 1

$x = 2; // x = 2 y = 1

// se quiser passar a referencia usa &

$x = 1; // x = 1
$y = &$x; // y = 1

$x = 2; // x = 2 y = 2


// interpolação de strings

echo '$x'; // mostra $x na tela

echo "{$x}"; // mostra 2 na tela
