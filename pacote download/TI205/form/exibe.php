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
		$nome = $_POST['nome'];
		
		/*
			Exibe na resposta os valores enviados 
		*/
		echo "<h2>Nome: " . $nome . "</h2>";
	?>
</body>
</html>