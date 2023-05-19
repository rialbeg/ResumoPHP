<?php
//definição
$name = 'Gabriel';

//constantes

define('PI', 3.1415);

echo PI;

//ou

const PI = 3.1415;

// checar se uma constante foi definida

echo defined('PI');


//php é de tipagem fraca e dinâmica

$name = 'john';
$name = 5;

/* 4 tipos escalares
    bool
    int
    float
    string

  4 tipos compostos
    object
    array
    callable
    iterable

  2 special types
    resource
    null
*/

//var_dump() retorna o valor e o tipo da variavel

var_dump($name);


// php tenta converter os tipos para realizar operações

function sum($x, $y)
{
    return $x + $y;
}

sum(3, '5'); // retorna 8

// existe o modo restrito para garantir o tipo 

declare(strict_types=1);

function sum2(int $x, int $y)
{
    return $x + $y;
}

sum2(3, '5');
