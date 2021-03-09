
<!DOCTYPE html>
<html lang="pt-br">
<head>
<title>Sistema de Agenda Telefônica</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="../bootstrap/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="css/estilo.css">
<link rel="stylesheet" type="text/css" href="css/modal.css">
<link rel="stylesheet" type="text/css" href="css/navbar.css">
<link rel="stylesheet" type="text/css" href="css/collapse.css">
<script src="../bootstrap/js/jquery-2.2.4.min.js"></script>
<script src="../bootstrap/js/bootstrap.min.js"></script>
<script type="text/javascript">
	$(document).ready(function(){

	})
</script>
</head>
<body>
<div class="container">
   <?php
   		include "include/imagem.php";
   		include "include/navbar.php";
   ?>
   <div class="row">
   		<div class="col-xs-offset-2 col-xs-8">
			<h2 class="centraliza">Exclusão de Endereços</h2>
			<div class="table-responsive">
				<?php
					/*
						Inclui os comandos necessários para montar a tabela com codigos e nomes
					*/
					include "include/montaTabelaEnd.php";
				?>	
			</div>   <!-- fim da Div class="table-responsive" -->
		</div>    <!-- fim da Div class="col-xs-12" -->
	</div>    <!-- fim da Div class="row" -->

	<br />
	<?php
		/*
			Inclui barra de navegação inferior com texto de cppyright
		*/
   		include "include/rodape.php";
   	?>
</div>   <!-- fim da Div class="container" -->

<?php
	/*
		Inclui a janela modal usadas nesse programa
	*/
	include "include/modalInfo.php";
?>

</body>
</html>