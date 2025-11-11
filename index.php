<?php

/*Mostrar textos na tela 
echo e print auxilia ao mostrar texto na tela 
echo 'canal ti';  
print 'Canal ti2'
var_dump alem de exibir o texto ele exibe o valor da variavel e a quantidade de palavras 
var_dump('Canal ti2');*/

/*Variaveis
$nome = 'Canal TI '; //string
$idade = 25;//int
$valor = 25.9;//float
$booleana = false;//boolean

Concatenação (Basicamente e usar vairas variaveis)
echo $nome . 'idade:' . $idade;*/

/*Operadores*/
$a = 10;
$b = 5;

// +, -, *, /, %

/*echo $a + $b;
echo $a - $b;
echo $a * $b;
echo $a / $b;
echo $a % $b;*/

// ==, !=, ===, !==, <, >, <=, >=
var_dump($a == $b);
var_dump($a != $b);
var_dump($a === $b);
var_dump($a !== $b);
var_dump($a < $b);
var_dump($a > $b);
var_dump($a <= $b);
var_dump($a >= $b);

// && (E), || (OU) e ! (NÃO)
$c = true;
$d = true;

var_dump($c && $d);
var_dump($c || $d);
var_dump(!$d);
?>