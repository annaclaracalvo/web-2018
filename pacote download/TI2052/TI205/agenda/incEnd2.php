<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php
	/*
		Recebe os campos do formulário em variáveis tipo string
	*/
	$nome        = $_POST['nome'];
	$endereco    = $_POST['endereco'];
	$complemento = $_POST['complemento'];
	$bairro      = $_POST['bairro'];
	$cidade      = $_POST['cidade'];
	$cep         = $_POST['cep'];
	
	//retira ponto e traço do cep
	$cep=preg_replace('/[\.-]/','',$cep);
	
	// Conexão com banco de dados
	include "include/conexao.php";

	// cria comando de inclusão (query)
	$sql="insert into agenda (nome,endereco," .
	"complemento,bairro,cidade,cep)" . 
	"values ('" . $nome . "','" . $endereco .
	"','" . $complemento . "','" . $bairro .
	"','" . $cidade . "','" . $cep . "')";
	// envia comando para o banco de dados
	$resultado = mysqli_query($conexao, $sql);
	if (!$resultado)
		if (mysqli_errno($conexao)==1062)
			echo "Erro: o nome informado já foi cadastrado!";
		else
			echo "Erro:" . mysqli_error($conexao) . "-" . mysqli_errno($conexao);
	else
		echo "Inclusão de " .$nome. " realizada com sucesso";
?>
</body>
</html>