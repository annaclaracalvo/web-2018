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
		*/
		$cpf = preg_replace('/[\.-]/','',$cpf);
		$telefone = preg_replace('/[\(\)-]/','',$telefone);
		$celular = preg_replace('/[\(\)-]/','',$celular);
		$salario = preg_replace('/[R$\s\.]/','',$salario);
		$salario = preg_replace('/[\,]/','.',$salario);
		$valor = floatval($salario);
		/*
			Coloca nome em maiúsculas
		*/
		$nome = strtoupper($nome);
		/*
			Colocando data no padrão MySQL
		*/
		$data = preg_replace('/[\/]/','-',$data);
		$novaData = strtotime($data);
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