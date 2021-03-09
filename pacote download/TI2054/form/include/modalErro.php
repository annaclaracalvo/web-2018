<?php
	echo '<!-- ====================================================== 
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
	</div>   <!-- Fim da div id=janelaModalErro -->';
?>