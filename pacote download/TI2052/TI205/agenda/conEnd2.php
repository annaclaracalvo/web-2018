<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
</head>
<body>
<?php
	// recebe a chave primária enviada pelo conEnd1
	$codigo = $_POST['codigo'];
	// abre conexão com o banco de dados
	include "include/conexao.php"; 
	// seleciona o registro com codigo igual ao enviado
	$sql = "select * from agenda where codigo=" . $codigo;
	// executa o comando de consulta
	$resultado = mysqli_query($conexao,$sql);
	// coloca os campos do registro consultado em variáveis pHP
	if ($linha=mysqli_fetch_array($resultado,MYSQLI_ASSOC)){
		$codigo = $linha['codigo'];
		$nome = $linha['nome'];
		$endereco = $linha['endereco'];
		$complemento = $linha['complemento'];
		$bairro = $linha['bairro'];
		$cidade = $linha['cidade'];
		$cep = $linha['cep'];
		// Coloca ponto e traço no CEP
		$cep = $cep[0] . $cep[1] . "." . $cep[2] .
			$cep[3] . $cep[4] . "-" . $cep[5] .
			$cep[6] . $cep[7];
		// exibe os dados na resposta HTML
		echo "<p>Código: " . $codigo . "</p>
			  <p>Nome: " . $nome . "</p>
			  <p>Endereço: " . $endereco . "</p>
			  <p>Complemento: " . $complemento . "</p>
			  <p>Bairro: " . $bairro . "</p>
			  <p>Cidade: " . $cidade . "</p>
			  <p>CEP: " . $cep ."</p>";
	}
	else
		echo "<h2>Erro de Consulta</h2>";
?>
</body>
</html>

