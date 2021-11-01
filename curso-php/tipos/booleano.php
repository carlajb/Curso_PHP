<div class="titulo">Tipo Boleano</div>

<?php
echo TRUE;
echo '<br>';
echo FALSE;

echo '<br>' . var_dump(true);
echo '<br>' . var_dump(false);
echo '<br>' . var_dump('false');
echo '<br>' . is_bool(false);
echo '<br>' . is_bool('false');

// fazer as regras de conversoes

echo '<p>Regras:</p>';
echo '<br>' . var_dump((boll)0); // apenas zero e falso
echo '<br>' . var_dump((boll)20);
echo '<br>' . var_dump((boll)-1);
echo '<br>' . var_dump((boll)0.0);
echo '<br>' . var_dump((boll)0.00000001);
echo '<br>' . var_dump((boll)""); //excessao falso
echo '<br>' . var_dump((boll)"0"); //excessao falso
echo '<br>' . var_dump((boll)" "); // restante verdadeito
echo '<br>' . var_dump((boll)"00");
echo '<br>' . var_dump((boll)"false");


echo '<br>' . var_dump(!"false");
echo '<br>' . var_dump(!!"false");