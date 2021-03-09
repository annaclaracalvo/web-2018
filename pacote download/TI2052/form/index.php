<!DOCTYPE html>
<html lang="pt-br">
<head>
<title>Formulário com jQuery e PHP</title>

<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

<link href="../bootstrap/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="css/estilo.css">
<link rel="stylesheet" type="text/css" href="css/modal.css">

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
			<form class="form-horizontal" id="formAjax">
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

	<!-- =========================================================== 
		Janela Modal para exibir mensagens de envio Ok do formulário
	================================================================ -->
	<div class="modal fade" id="janelaModal" role="dialog">
	    <div class="modal-dialog">
	        <div class="modal-content">
	            <!-- Título -->
	            <div class="modal-header modal-header-success">
	                  <button type="button" class="close" data-dismiss="modal">&times;</button>
	                  <!-- a tag <span> abaixo coloca o glyphicon antes do texto -->
	                  <h4 class="modal-title"><span class="glyphicon glyphicon-thumbs-up"></span>&nbsp;&nbsp; Formulário enviado com sucesso</h4>
	            </div>
	            <!-- Corpo da mensagem. A resposta enviada pelo programa PHP será colocada na tag com id="modalTexto" -->
	            <div class="modal-body">
	                  <h4 id="modalTexto"></h4>
	            </div>
	            <!-- Rodapé -->
	            <div class="modal-footer">
	                  <button type="button" class="btn btn-success center-block" data-dismiss="modal">Fechar</button>
	            </div>
	        </div>
	      
	    </div>
	</div>   <!-- Fim da div id=janelaModal -->

	<!-- ====================================================== 
		Janela Modal para exibir mensagens de erro de digitação
	=========================================================== -->
	<div class="modal fade" id="janelaModalErro" role="dialog">
	    <div class="modal-dialog">
	        <div class="modal-content">
	            <!-- Título -->
	            <div class="modal-header modal-header-danger">
	                  <button type="button" class="close" data-dismiss="modal">&times;</button>
	                  <!-- a tag <span> abaixo coloca o glyphicon antes do texto -->
	                  <h4 class="modal-title"><span class="glyphicon glyphicon-thumbs-down"></span>&nbsp;&nbsp; Erro de Digitação</h4>
	            </div>
	            <!-- Corpo da mensagem. A resposta enviada pelo função validarDados() será colocada na tag com id="modalErro" -->
	            <div class="modal-body">
	                  <h4 id="modalErro"></h4>
	            </div>
	            <!-- Rodapé -->
	            <div class="modal-footer">
	                  <button type="button" class="btn btn-danger center-block" data-dismiss="modal">Fechar</button>
	            </div>
	        </div>
	      
	    </div>
	</div>   <!-- Fim da div id=janelaModalErro -->
</body>
</html>