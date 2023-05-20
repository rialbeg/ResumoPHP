<!-- BOOLEANS -->

<?php

$condition1 = true;
$condition2 = false;

/*valores falsy
 o próprio booleano false
 o inteiro 0 (zero)
 os pontos flutuantes 0.0 e -0.0 (zero)
 uma string vazia "", e a string "0"
 um array sem elementos
 o tipo especial NULL (incluindo variáveis não definidas)
 Objetos internos que sobrecarregam seu comportamento de conversão para bool. 
 Por exemplo: Objetos SimpleXML criados a partir de elementos vazios sem atributos.
*/

var_dump((bool) "");        // bool(false)
var_dump((bool) "0");       // bool(false)
var_dump((bool) 1);         // bool(true)
var_dump((bool) -2);        // bool(true)
var_dump((bool) "foo");     // bool(true)
var_dump((bool) 2.3e5);     // bool(true)
var_dump((bool) array(12)); // bool(true)
var_dump((bool) array());   // bool(false)
var_dump((bool) "false");   // bool(true)
