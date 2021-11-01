<div class="titulo">Variaveis</div>

<?php
$numeroA = 13;
echo $numeroA, '<br>';
var_dump($numeroA);

echo '<br>';
$a= 3;
$b= 16;
$soma= $a + $b;
echo $soma;

echo '<br>';
echo isset ($soma);

unset($soma); // formar nao setar a variavel 
echo isset ($soma);
echo '<br>';
var_dump($soma);

$variavel =10;
echo '<br>' . $variavel;

// Nomes de variavel

$var = 'valida';
$var2 = 'valida';
$VARR3 = 'valida';
$_var_4 = 'valida';
$Vâr5 = 'valida';// eivtar !
// $6var = 'invalida';
// $%var7 = 'invalida';
// $var8% = 'invalida';

// exitem variaveis pre definidas (encontra se na documentacao php)