<?php
include 'inc/mixin.php';

echo 'Hello World';

echo '<hr>';

$nomeDaVariavel = "teste";

echo $nomeDaVariavel;

echo '<hr>';

$valorDaVariavel = 18;

echo 'O nome da variavel é: ' . $nomeDaVariavel . ' e o valor dela é ' . $valorDaVariavel;

echo '<hr>';

if (isset($nomeDaVariavel)) {
	echo 'Variavel existe!';
}

echo '<hr>';

$valorVazio = false;

if (isset($valorVazio)) {
	echo "Existe!";
}

echo '<hr>';

define('MINHA_CONSTANTE', 'teste');

echo MINHA_CONSTANTE;

echo '<hr>';

$valor = 10;
$valor++;

echo $valor;

echo '<hr>';

$texto = 'Carlos ';
$texto .= ' Gartner';

echo $texto;

echo '<hr>';

$soma = 15;
$soma += 5;

echo $soma;

echo '<hr>';

$valor1 = 0;
$valor2 = 2;

if ($valor1) {
	echo 'Igual';
}

// comentario ajsiasijsiajsiajsijaisjaijsiajsiajisjaisjaisjiajsia
# asokasokaoskaoskaoskoaksoaksokaksooak
/*
koajsia
asjiasjias
asjaijsia
*/
// if ($valor1 || $valor2) {

// }

$valor = 5;
if ($valor > 6) {

} else if ($valor == 8) {

} else {
	// teste
}

$brasil = 5;

switch ($brasil) {
	case 1:
		echo 'valor é 1';
		break;

	case 5:
		echo 'valor é 5';
		break;
	
	default:
		echo 'Valor default';
		break;
}

echo '<hr>';

// For

for ($i = 0; $i < 10; $i++) {
	echo $i . '<br>';
}

echo '<hr>';
// Foreach

$times = array('Brasil', 'Alemanha', 'México', 'Inglaterra');
foreach ($times as $time) {
	echo $time . '<br>'; 
}

echo '<hr>';
// While
$i = 0;
while ($i <= 10) {


	# code...
	echo $i . '<br>';

	if ($i == 5) {
		break;
	}

	$i++;
}

echo '<hr>';

$valor = 10;
$valor2 = 1500.5;

echo 'R$' . number_format($valor, 2, ',', '.') . '<br>';
echo 'R$' . number_format($valor2, 2, ',', '.');

echo '<hr>';


$time = time();
$time += (3600 * 24 * 7);

// echo time();
echo date('d/m/Y H:i:s', $time);

echo '<hr>';

echo soma(10, 20);


