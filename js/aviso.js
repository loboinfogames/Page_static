   function validar_formcontato(){
   	var nome = formcontato.name.value;
   	var email = formcontato.email.value;
   	var mensagem = formcontato.message.value;
   	if(nome == ""){
   		alert("Favor preencher o nome");
   		formcontato.name.focus();
   		return false;

   	}
   	   	if(email == ""){
   		alert("Favor preencher o nome");
   		formcontato.email.focus();
   		return false;
   		
   	}
   	   	if(message == ""){
   		alert("Favor preencher o nome");
   		formcontato.message.focus();
   		return false;
   		
   	}
 	else	{
 		alert(name." Mensagem enviada com sucesso.")
 	}	
   	
   }