<!DOCTYPE html>
<html lang="pt-br">
<head>
<title>Formulário com jQuery e PHP</title>

<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

<link href="../bootstrap/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="css/estilo.css">

<script src="../bootstrap/js/jquery-2.2.4.min.js"></script>
<script src="../bootstrap/js/bootstrap.min.js"></script>
<!-- o plugin masked input pode ser baixado da URL http://digitalbush.com/projects/masked-input-plugin -->
<script src="js/jquery.maskedinput.min.js" type="text/javascript"></script>
<script src="js/form.js" type="text/javascript"></script>

</head>
<body>
	<div class="container">
		<div class="col-sm-offset-1 col-sm-10">
			<h2>Formulário com Bootstrap, jQuery e PHP</h2>	
			<form class="form-horizontal" id="formAjax" action="exibe.php" method="post" 
				onsubmit="return validarDados();">
				<fieldset>
					<legend class="text-center">Dados Pessoais</legend>
				</fieldset>
				<div class="form-group">
					<label class="control-label col-sm-2" for="nome">Nome:</label>
					<div class="col-sm-10">
						<input type="text" name="nome" id="nome" maxlength="50" class="form-control">
					</div>
				</div>
				<div class="form-group">
					<label class="control-label col-sm-2" for="data">Nascimento:</label>
					<div class="col-sm-10">
						<input type="text" name="data" id="data" maxlength="10" class="form-control">
					</div>
				</div>
				<div class="form-group">
					<label class="control-label col-sm-2" for="cpf">CPF:</label>
					<div class="col-sm-10">
						<input type="text" name="cpf" id="cpf" maxlength="14" class="form-control">
					</div>
				</div>
				<div class="form-group">
					<label class="control-label col-sm-2" for="telefone">Telefone:</label>
					<div class="col-sm-10">
						<input type="text" name="telefone" id="telefone" maxlength="13" class="form-control">
					</div>
				</div>
				<div class="form-group">
					<label class="control-label col-sm-2" for="celular">Celular:</label>
					<div class="col-sm-10">
						<input type="text" name="celular" id="celular" maxlength="14" class="form-control">
					</div>
				</div>
				<div class="form-group">
					<label class="control-label col-sm-2" for="salario">Salário:</label>
					<div class="col-sm-10">
						<input type="text" name="salario" id="salario" maxlength="11" class="form-control">
					</div>
				</div>
				<div class="form-group text-center">
					<button type="submit" class="btn btn-primary">Enviar</button>
					<button type="reset" class="btn btn-primary">Limpar</button>
				</div>
			</form>
		</div>
	</div>
</body>
</html>