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
		$cpf      = $_POST['data'];
		$telefone = $_POST['telefone'];
		$celular  = $_POST['celular'];
		$salario  = $_POST['salario'];
	/*
	Retira os caracteres desnecessarios atraves de expressoes regulares
	*/
   $cpf      = preg_replace('/[\.-]/', '', $cpf);
   $telefone = preg_replace('/[\(\)-]/', '', $telefone);
   $celula   = preg_replace('/[\(\)-]/', '', $celular);
   $salario  = preg_replace('/[R$\s\.]/','', $salario);
   $salario  = preg_replace('/[\,]/','.', $salario);
   $valor    = floatval($salario);
   /*
   Coloca o nome em maiuscula

   */
   $nome = strtoupper($nome);
		/*
		colocando data no padrao MySQL
		*/
		$data = preg_replace('/[\/]/', '-', $data);
		$novaData= strtotime($data);
		$dataMySQL = date('Y-m-d', $novaData);
		/*
		poderia ser
		dataMySQL = date('Y-M-D', strtotime($data))
		*/
		/*
			Exibe na resposta os valores enviados 
		*/
		echo "<h2>Nome: " . $nome . "</h2>";
		echo "<h2>Data (string): " . $data . "</h2>";
		echo "<h2>Data (MySQL): " . $dataMySQL . "</h2>";
		echo "<h2>CPF: " . $cpf . "</h2>";
		echo "<h2>Telefone: " . $telefone . "</h2>";
		echo "<h2>Celular: " . $celular . "</h2>";
		echo "<h2>Salário: " . $salario . "</h2>";
		echo "<h2>Valor: " . $valor . "</h2>";

	?>
</body>
</html>