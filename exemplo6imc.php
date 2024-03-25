<?php
$nome = "Miguel";
$peso = 95.5;
$altura = 1.83;

function calcular($peso,$altura){
	return ($peso/($altura*$altura));
}

$imc =  calcular($peso,$altura);

echo "Olá, $nome, o seu imc é $imc";

?>