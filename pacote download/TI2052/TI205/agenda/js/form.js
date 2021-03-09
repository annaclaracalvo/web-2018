/*
   biblioteca de usuário usada para validar os campos do formulário quando ele for enviado (evento submit)
*/

function validarDados(){
/* Esta função recebe como parâmetro TODO o formulário. Ela é acionada pelo método submit
   da tag <form>
*/

   if ( $("#nome").val().trim().length == 0 ){

      //  mensagem de erro 
      $("#modalErroTitulo").text("Erro de Digitação");
      $("#modalErro").text("O campo nome não pode ficar em branco!");
      $("#janelaModalErro").modal();
      
      // guardar na variável global inputAtivo o id do campo
      // que está ativo (onde o cursor está)
      inputAtivo = "#nome";

      // cancela o envio do formulario
      return false;
   }

   if ( $("#endereco").val().trim().length == 0 ){
      //  mensagem de erro 
      $("#modalErroTitulo").text("Erro de Digitação");
      $("#modalErro").text("O campo endereço não pode ficar em branco!");
      $("#janelaModalErro").modal();
      
      // guardar na variável global inputAtivo o id do campo
      // que está ativo (onde o cursor está)
      inputAtivo = "#endereco";

      // cancela o envio do formulario
      return false;
   }

   if ( $("#complemento").val().trim().length == 0 ){
      $("#modalErroTitulo").text("Erro de Digitação");
      $("#modalErro").text("O campo complemento não pode ficar em branco!");
      $("#janelaModalErro").modal();
      
      // guardar na variável global inputAtivo o id do campo que está ativo (onde o cursor está)
      inputAtivo = "#complemento";

      // cancela o envio do formulario
      return false;
   }

   if ( $("#bairro").val().trim().length == 0 ){
      $("#modalErroTitulo").text("Erro de Digitação");
      $("#modalErro").text("O campo bairro não pode ficar em branco!");
      $("#janelaModalErro").modal();
      
      // guardar na variável global inputAtivo o id do campo que está ativo (onde o cursor está)
      inputAtivo = "#bairro";

      // cancela o envio do formulario
      return false;
   }
 
   if ( $("#cidade").val().trim().length == 0 ){
      $("#modalErroTitulo").text("Erro de Digitação");
      $("#modalErro").text("O campo cidade não pode ficar em branco!");
      $("#janelaModalErro").modal();
      
      // guardar na variável global inputAtivo o id do campo que está ativo (onde o cursor está)
      inputAtivo = "#cidade";

      // cancela o envio do formulario
      return false;
   }

   if ( $("#cep").val().trim().length == 0 ){
      $("#modalErroTitulo").text("Erro de Digitação");
      $("#modalErro").text("O campo CEP não pode ficar em branco!");
      $("#janelaModalErro").modal();
      
      // guardar na variável global inputAtivo o id do campo que está ativo (onde o cursor está)
      inputAtivo = "#cep";

      // cancela o envio do formulario
      return false;
   }

   /* Se nenhum erro ocorreu, retorna verdadeiro */
   return true;
}

