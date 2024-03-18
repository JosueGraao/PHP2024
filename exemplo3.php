<?php  
	print "Usando print para exibir na tela<br/>";

	$data = '06 de março de 2024';
	$salario = 850.00;
	$cargo = "Estágiário";
	$idade = 21;
	$resultado = true;

	if ($resultado) {
		echo('<br/>Verdadeiro <br/>');
	}
	//Quando houver variável dentro da string, usar aspas duplas
	echo ("<br/>Arquivo criado em $data<br/>");

	printf("<br/>Salário mínimo: R$ %.2f<br/>", $salario);

	$texto = sprintf("<br/>%s recebe R$ %.2f por mês", $cargo, $salario * 2);

	echo $texto;
?>