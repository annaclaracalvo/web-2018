<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Primeiro Programa</title>
</head>
<body>
	<?php
		echo("<p>Alô mundo!</p>");
		echo("<h1>Mais uma linha</h1>");
		
		$cpf = "123.456.789-09";
		$novoCpf = preg_replace('/[\.-]/', '', $cpf);
		echo "<h2>CPF original:" . $cpf . "</h2>";
		echo "<h2>CPF modificado:" . $novoCpf . "</h2>";
	?>
	<p>Parágrafo HTML</p>
	<?php
		echo("<h2>título escrito pelo PHP</h2>");
	?>
</body>
</html>