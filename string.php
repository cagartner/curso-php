<?php

$name = 'Carlos Augusto Gartner';
$nameSize = strlen($name);

var_dump(strpos($name, 'C'));

var_dump(strchr($name, 'Augusto'));

$telefone = '4733383584';

var_dump(substr($name, 0, 6));

echo '(' . substr($telefone, 0, 2) . ') ' .  substr($telefone, 2, 8);

echo '<hr>';

$gosto = '             Eu, André, gosto        de mulher ';
$gosto = str_replace('mulher', 'homens suados', $gosto);
echo $gosto;

$data = '10/04/2018';
$parts = explode('/', $data);
// var_dump(implode('-', $parts));

var_dump(trim($gosto));

$valor = '190.10';
var_dump((string) $valor);




