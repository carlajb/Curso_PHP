<div class="titulo">Aritimeticas PHP</div>

<?php

echo 1+1, '<br>';
var_dump (1+1);
echo '<br>';
echo 1+2.5, '<br>';
echo 10-2, '<br>';
echo 2 * 5, '<br>';
echo 7 / 4, '<br>';
echo intdiv (7 , 4), '<br>';
echo round (7 / 4), '<br>';
echo 7 % 4, '<br>'; // resto do resultado
echo 7 % 2, '<br>'; // muito usado para saber se e impar ou par com o resto da divisao
echo 8 % 2, '<br>'; // muito usado para saber se e impar ou par com o resto da divisao
//echo 7 / 0, '<br>'; // qualquer numero dividido por zero dara infinito
//echo intdiv(7,0); //erro
echo 4 ** 2, '<br>'; // (**) representa exponenciacao

// precedencia de operadores:
// () => ** => / * % + -

echo '<p>precedencia</p>';

echo 2 + 3 * 4, '<br>';
echo (2 + 3) * 4, '<br>';
echo 2 + 3 * 4 ** 2, '<br>';
echo ((2 + 3) * 4) ** 3, '<br>';
