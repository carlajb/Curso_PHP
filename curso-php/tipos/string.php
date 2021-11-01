<div class="titulo">Tipo string</div>

<?php
echo 'Eu sou uma string';
echo '<br>';
var_dump("eu tambem");
echo '<br>';

// concatenacao

echo "Nos tanbem" . ' somos';
echo '<br>', "tambem aceito", " virgulas", " para o contexto do echo";

echo '<br>';
echo "'teste para usar aspas simples'" . '"teste para usar aspas duplas"'. '  \'teste\'' . "  \"teste\"" . " \\";

print("<br> tambem existe a funcao print");
print "<br> tambem existe a funcao print";

echo '<br>' . strtoupper('maximizado');
echo '<br>' . strtolower('MINIMIZADO');
echo '<br>' . ucfirst('so a primeira letra em maiusculo');
echo '<br>' . ucwords('tods  primeira letra em maiusculo');
echo '<br>' . strlen('Qnatas letras possuem');
echo '<br>' . mb_strlen("eu também", "utf-8");
echo '<br>' . substr('Só uma parte mesme', 7,6);
echo '<br>' . str_replace('isso', 'aquilo', 'troca por isso isso');














