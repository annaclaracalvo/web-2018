/*
	Biblioteca jquery para validar inputs de formulário. A function validarDados() é executada pelo método
	submit() da tag <form>.
*/

$(document).ready(function(){
	/*
		Cria as máscaras de edição dos campos do formulário, usando o método .mask() do plugin
		jquery.masjedinput.min.js
	*/
	$("#data").mask("99/99/9999",{placeholder:"dd/mm/aaaa"});
	$("#cpf").mask("999.999.999-99");
	$("#telefone").mask("(99)9999-9999");
	$("#celular").mask("(99)99999-9999");
	$("#salario").mask("R$ 9.999,99");
	/*
		Coloca o cursor no primeiro campo do formulário quando a tela for carregada
	*/
	$("#nome").focus();
})

function validarDados(){
	if ( $("#nome").val().trim().length == 0){
		/*
			Exibe mensagem de erro
		*/
		alert("O campo nome não pode ficar em branco!");
		/*
			Coloca o cursor no input onde ocorreu o erro
		*/
		$("#nome").focus();
		/*
			O comando abaixo cancela o envio do formulário
		*/
		return false;
	}

	var dataOK = validaData( $("#data").val());
	if ( !dataOK) {
		/*
			Exibe mensagem de erro
		*/
		alert("Data de Nascimento inválida!");

	   /*
			Coloca o cursor no input onde ocorreu o erro
		*/
		$("#data").focus();

	   	/*
			O comando abaixo cancela o envio do formulário
		*/
		return false;
	}

	var cpfOK = validaCPF( $("#cpf").val());
	if(!cpfOK){
	   /*
			Exibe mensagem de erro
		*/
		alert("CPF inválido!");

	   /*
			Coloca o cursor no input onde ocorreu o erro
		*/
		$("#cpf").focus();

	   	/*
			O comando abaixo cancela o envio do formulário
		*/
		return false;
	}


	if ( $("#telefone").val().trim().length == 0){
		/*
			Exibe mensagem de erro
		*/
		alert("Telefone inválido!");
		/*
			Coloca o cursor no input onde ocorreu o erro
		*/
		$("#telefone").focus();
		/*
			O comando abaixo cancela o envio do formulário
		*/
		return false;
	}

	if ( $("#celular").val().trim().length == 0){
		/*
			Exibe mensagem de erro
		*/
		alert("Celular inválido!");
		/*
			Coloca o cursor no input onde ocorreu o erro
		*/
		$("#celular").focus();
		/*
			O comando abaixo cancela o envio do formulário
		*/
		return false;
	}
	
	if ( $("#salario").val().trim().length == 0){
		/*
			Exibe mensagem de erro
		*/
		alert("Salario inválido!");
		/*
			Coloca o cursor no input onde ocorreu o erro
		*/
		$("#salario").focus();
		/*
			O comando abaixo cancela o envio do formulário
		*/
		return false;
	}
	/*
		Se não ocorreu nehum erro, retorna true e envia o formulário
	*/
	return true;
}

/*===============================================================*/

function validaData(valor){
   /*  quebra a data em pedaços (dia, mês e ano) */
   var dia    = valor.substr(0,2);
   var mes    = valor.substr(3,2);
   var ano    = valor.substr(6,4);

   /* se data estiver em branco, erro */
   if ( dia=="" || mes=="" || ano=="") return false;
            
   /* verifica se dia é maior que 31 ou se mês é maior que 12 */
   if (dia>31||mes>12) return false;

   /* Se mês for 4,6,9 ou 11 e dia =31, erro */
   if ((mes==4||mes==6||mes==9||mes==11) && dia==31) return false;

   /* Se mês for fevereiro e dia for maior que 29 ou for dia 29
      em ano que não é bissexto 

      ano % 4 - devolve o resto da divisão do ano por 4
   */
   if (mes==2  &&  (dia>29 || (dia==29 && ano%4!=0))) return false;

   /* Se nenhum erro ocorreu, retorna verdadeiro */
   return true;
}

/*===============================================================*/

function validaCPF(strCPF) {
      /*
         Código retirado do site DEVMEDIA
         disponível em https://www.devmedia.com.br/validar-cpf-com-javascript/23916
      */
       var Soma;
       var Resto;
       /*
         Uma expressão regular permite validar/localiar/substituir caracteres em uma variável
         string através do uso de caracteres de controle, chamados de metacarcateres.

         Significado dos metacaracteres da expressão regular abaixo:

         barras / /- informam o início e o fim da expressão regular.

         colchetes [] - cria uma lista de caracteres que devem ser localizados dentro da 
            string. No caso abaixo, devem ser localizados todos os pontos e traços.
            Essa lista não tem limite de tamanho.
            
         barra invertida - caractere "escape". Como o ponto é um metacaracter, para 
            localizar um ponto dentro de uma string usamos \., e não apenas "."

        letra "g" - procura os caracteres em toda a string, não para quando encontrar
        	o primeiro (padrão).

         O método replace() abaixo procura todos os pontos e traços da string e os
         substitui por uma string nula.
       */
       strCPF = strCPF.replace(/[\.-]/g, "");

       /*
         Não permite CPF somente com zeros
       */
      if (strCPF == "00000000000") return false;
       
      /*
         Validando o primeiro dígito verificador:

         1) multiplicar cada dígito antes do traço conforme tabela abaixo:
         +--------------------------+---+---+---+---+---+---+---+---+---+
         | 9 dígitos antes do traço | 1 | 2 | 3 | 4 | 5 | 6 | 7 | 8 | 9 |
         +--------------------------+---+---+---+---+---+---+---+---+---+
         | valor p/multiplicar      | 10| 9 | 8 | 7 | 6 | 5 | 4 | 3 | 2 |
         +--------------------------+---+---+---+---+---+---+---+---+---+
         
         2) Realizar as multiplicações e somar os nove resultados

         3) Multiplicar a soma por 10 e dividir por 11. O resto dessa divisão deve
         ser igual ao primeiro dígito verificador. Obs: se o resto for maior qu 9, deve
         ser usado o valor zero

         parseInt() - transforma um valor string em inteiro
         substring(início,fim)- retira caracteres de uma string começando pelo caracter 
            na posição "inicio" até a posição "fim". O caracter da posição "fim" não é
            retirado por esse método
      */
      return true;
   }

   /*===============================================================*/