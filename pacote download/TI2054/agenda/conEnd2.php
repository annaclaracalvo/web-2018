<!DOCTYPE html>
<html lang="pt-br">
<head>
<title>Consulta Completa</title>

<meta charset="utf-8">

</head>
<body>
<?php

	/* recebe o valor do campo codigo pelo método POST, e coloca na variável $codigo */
	$codigo = $_POST['codigo'];

	/*
	   Cria conexão com banco de dados
	*/

	include "include/conexao.php";

	/*
		Consulta o registro de Agenda com chave primária contida na	variável $codigo, e coloca os dados em variáveis PHP
	*/
	include "include/consRegAgenda.php";

	/*
		escreve na resposta HTML os campos do registro consultado
	*/
	echo "<p>Código: $codigo </p>
		  <p>Nome: $nome </p>
		  <p>Endereço: $endereco </p>
		  <p>Complemento: $complemento </p>
		  <p>Bairro: $bairro </p>
		  <p>Cidade: $cidade </p>
		  <p>CEP: $cep </p>";
?>
</body>
</html>