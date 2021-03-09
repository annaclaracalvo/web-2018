<?php
	/*
		Esse include é usado em todos os programas que exibem dados da tabela agenda através de tabela
		HTML: altEnd1.php, conEnd1.php, excEnd1.php cadFone1.php e conFone1.php
		-----------------------------------------------------------------------

		Cria a parte fixa da tabela.
	*/
	echo '<table class="table table-striped table-bordered table-hover">
		  <thead>
		  <tr>
		  <th>Código</th>
		  <th>Nome</th>
		  </tr>
		  </thead>
		  <tbody>';
					
	/*
		inclui os comandos PHP necessários para criar a conexão com o banco de dados agenda
	*/
	include "include/conexao.php";

	/*
		cria o comando SQL de consulta na tabela agenda
	*/
	$sql = "SELECT codigo,nome from agenda ORDER BY nome";
	/* 
		executa o comando SQL inserido na variável string $sql. Coloca o resultado na variável $resultado
	*/
	$resultado = mysqli_query($conexao,$sql);
	/*
		a consulta acima retorna toda a tabela, e o comando de repetição "while" a seguir lê este conjunto de dados linha a linha
	*/
	while ( $linha = mysqli_fetch_array($resultado,MYSQLI_ASSOC)) {
  		/*
			coloca em variáveis o conteúdo dos campos codigo e nome da 
			linha atual
  		*/
  		$codigo = $linha["codigo"];
  		$nome   = $linha["nome"];

  		/*
			Escreve na resposta HTML a linha de tabela referente ao registro que está sendo processada no momento. 
  		*/
  		echo "<tr>
  			  <td width='100'>" . $codigo . "</td>
  			  <td>" . $nome . "</td>
  			  </tr>";
	}

	/*
		Inclui na resposta HTML os comandos finais da tabela
	*/
	echo "</tbody></table>";
?>