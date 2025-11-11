<?php
//Primeiro commit 
/*Mostrar textos na tela 
echo e print auxilia ao mostrar texto na tela 
echo 'canal ti';  
print 'Canal ti2'
var_dump alem de exibir o texto ele exibe o valor da variavel e a quantidade de palavras 
var_dump('Canal ti2');*/

//Segundo commit 
/*Variaveis
$nome = 'Canal TI '; //string
$idade = 25;//int
$valor = 25.9;//float
$booleana = false;//boolean

Concatenação (Basicamente e usar vairas variaveis)
echo $nome . 'idade:' . $idade;*/

//Terceiro commit 
/*Operadores
$a = 10;
$b = 5;

// +, -, *, /, %

/*echo $a + $b;
echo $a - $b;
echo $a * $b;
echo $a / $b;
echo $a % $b;

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
var_dump(!$d);*/

//Quarto commit 
/*Funções
function saudacao($nome, $idade){
    return "Olá, $nome, você tem $idade anos";
}

echo saudacao("Canal TI", 20);*/

//Quinto commit 
/*Condições

// if, else, elseif

$nome = 'Canal TI';

if ($nome == 'Canal TI'){
    echo 'O seu nome é Canal TI';
} else if($nome == 'canal TI2'){
    echo 'O seu nome é Canal TI 2';
}else{
    echo 'O seu nome não é Canal TI é nem Canal TI 2';
}

//Case e como se fosse o caso e dafalt o else e usar o break
switch ($nome){
    case 'Canal TI' : echo 'O seu nome é Canal TI'; break;
    case 'canal TI2' : echo 'O seu nome é Canal TI 2'; break;
    default: echo 'O seu nome não é Canal TI é nem Canal TI 2'; break;
}*/


//Sexto commit 
/*Loops
// for, while
for ($i = 0; $i <= 10; $i++){
    echo "$i <br>";


$i = 0;
while ($i <= 10){
    echo "$i <br>";
    $i++;
} */

//Setimo commit 
/*Arrays*/
$frutas = ['maça' => 'M', 'laranja' => 'L', 'banana' => 'B'];

//print_r($frutas);
foreach($frutas as $frutas => $categoria){
    echo $frutas . ' da categoria ' . $categoria . '<br>';
}

?>