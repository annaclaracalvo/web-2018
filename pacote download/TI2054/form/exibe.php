<html  lang="pt-br">
<head>
	<meta charset="utf-8">
	<title>Exibindo dados enviados por formulário</title>
</head>
<body>
	<?php
		/*
		  Recebe os campos enviados pelo formulário e os armazena em variáveis string do PHP
		*/
		$nome     = $_POST['nome'];
		$data     = $_POST['data'];
		$cpf      = $_POST['cpf'];
		$telefone = $_POST['telefone'];
		$celular  = $_POST['celular'];
		$salario  = $_POST['salario'];
		/*
			Retira os caracteres desnecessários através
			de expressões regulares

			Retira '.' e '-' do CPF. Para tirar '.', é necessáiro usar o caracter escape '\'
		*/
		$cpf = preg_replace('/[\.-]/','',$cpf);
		/*
			Retira '(', ')' e '-' do telefone. Para tirar '(' e ')', é necessáiro usar o caracter escape '\'. O mesmo vale para celular
		*/
		$telefone = preg_replace('/[\(\)-]/','',$telefone);
		$celular = preg_replace('/[\(\)-]/','',$celular);
		/*
			Retira de salario os carcateres 'R', '$', espaço em branco (\s) e '.'
		*/
		$salario = preg_replace('/[R$\s\.]/','',$salario);
		/*
			Substitui vírgula (\,) por ponto
		*/
		$salario = preg_replace('/[\,]/','.',$salario);
		/*
			converte string sálário para ponto flutuante, através do comando floatval()
		*/
		$valor = floatval($salario);
		/*
			Coloca nome em maiúsculas
		*/
		$nome = strtoupper($nome);
		/*
			Colocando data no padrão MySQL

			Comando que troca '/' por '-' na string enviada pelo formulário
		*/
		$data = preg_replace('/[\/]/','-',$data); 
		/*
			Converte variável string para tipo 'date'. 
		*/
		$novaData = strtotime($data);
		/*
			Formata data no padrão aaaa-mm-dd (formato MySQL)
		*/
		$dataMySQL = date('Y-m-d',$novaData);
		/*
			Exibe na resposta os valores enviados 
		*/
		echo "Nome: " . $nome . "<br />";
		echo "Data (string): " . $data . "<br />";
		echo "Data (MySQL): " . $dataMySQL . "<br />";
		echo "CPF: " . $cpf . "<br />";
		echo "Telefone: " . $telefone . "<br />";
		echo "Celular: " . $celular . "<br />";
		echo "Salário: " . $salario . "<br />";
		echo "Valor float: " . $valor . "<br />";

	?>
</body>
</html>