<?php
	
	if(isset($_POST(['email']) && !empty($_POST(['email'])){

	$nome = addcslashes($_POST(['name']))
	$email = addcslashes($_POST(['email']))
	$mensagem = addcslashes($_POST(['message']))

	$to = "matheus.v.lobo@gmail.com";
	$subject = "FORMULARIO - ENTREVISTA";

	$body = "nome:  ".$nome.  "\n"
			"Email: ".$email. "\n"
			"Mensagem: ".$mensagem;

	$header = "From:contato@proflobo.com.br"."\r\n"."Reply-To:".$email."\r\n"."X=Mailer:PHP/".phpversion();

if(mail($to,$subject,$body,$header)){

	echo("Email enviado com sucesso")

}
else{
	echo("Emial não pode ser enviado, tente novamente.")
}


}
?>
