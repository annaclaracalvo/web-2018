/*
   biblioteca de usu�rio usada para validar os campos do formul�rio quando ele for enviado (evento submit)
*/

function validarDados(){
/* Esta fun��o recebe como par�metro TODO o formul�rio. Ela � acionada pelo m�todo submit
   da tag <form>
*/

   if ( $("#nome").val().trim().length == 0 ){

      //  mensagem de erro 
      $("#modalErroTitulo").text("Erro de Digita��o");
      $("#modalErro").text("O campo nome n�o pode ficar em branco!");
      $("#janelaModalErro").modal();
      
      // guardar na vari�vel global inputAtivo o id do campo
      // que est� ativo (onde o cursor est�)
      inputAtivo = "#nome";

      // cancela o envio do formulario
      return false;
   }

   if ( $("#endereco").val().trim().length == 0 ){
      //  mensagem de erro 
      $("#modalErroTitulo").text("Erro de Digita��o");
      $("#modalErro").text("O campo endere�o n�o pode ficar em branco!");
      $("#janelaModalErro").modal();
      
      // guardar na vari�vel global inputAtivo o id do campo
      // que est� ativo (onde o cursor est�)
      inputAtivo = "#endereco";

      // cancela o envio do formulario
      return false;
   }

   if ( $("#complemento").val().trim().length == 0 ){
      $("#modalErroTitulo").text("Erro de Digita��o");
      $("#modalErro").text("O campo complemento n�o pode ficar em branco!");
      $("#janelaModalErro").modal();
      
      // guardar na vari�vel global inputAtivo o id do campo que est� ativo (onde o cursor est�)
      inputAtivo = "#complemento";

      // cancela o envio do formulario
      return false;
   }

   if ( $("#bairro").val().trim().length == 0 ){
      $("#modalErroTitulo").text("Erro de Digita��o");
      $("#modalErro").text("O campo bairro n�o pode ficar em branco!");
      $("#janelaModalErro").modal();
      
      // guardar na vari�vel global inputAtivo o id do campo que est� ativo (onde o cursor est�)
      inputAtivo = "#bairro";

      // cancela o envio do formulario
      return false;
   }
 
   if ( $("#cidade").val().trim().length == 0 ){
      $("#modalErroTitulo").text("Erro de Digita��o");
      $("#modalErro").text("O campo cidade n�o pode ficar em branco!");
      $("#janelaModalErro").modal();
      
      // guardar na vari�vel global inputAtivo o id do campo que est� ativo (onde o cursor est�)
      inputAtivo = "#cidade";

      // cancela o envio do formulario
      return false;
   }

   if ( $("#cep").val().trim().length == 0 ){
      $("#modalErroTitulo").text("Erro de Digita��o");
      $("#modalErro").text("O campo CEP n�o pode ficar em branco!");
      $("#janelaModalErro").modal();
      
      // guardar na vari�vel global inputAtivo o id do campo que est� ativo (onde o cursor est�)
      inputAtivo = "#cep";

      // cancela o envio do formulario
      return false;
   }

   /* Se nenhum erro ocorreu, retorna verdadeiro */
   return true;
}

