<?php
	echo '<!-- =========================================================== 
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
	</div>   <!-- Fim da div id=janelaModal -->';
?>