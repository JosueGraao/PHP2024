<?php
$nome = "Miguel";
$peso = 95.5;
$altura = 1.83;

function calcular($peso,$altura){
	return ($peso/($altura*$altura));
}

$imc =  calcular($peso,$altura);

printf("Olá, $nome. O seu IMC é %.2f", $imc);
?>