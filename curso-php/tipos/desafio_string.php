<div class="titulo">Desafio string</div>

<?php

/* enunciado:
Avaliando os metodos da documentacao da string,
qual o metodo que a posicao do texto 'abc' na 
string '!AbcaBcabc' retorne 1?*/

echo strpos('!AbcaBcabc', 'abc'). '<br>';
echo stripos('!AbcaBcabc', 'abc'). '<br>';

echo strpos(strtolower ('!AbcaBcabc'), strtolower('ABC'));