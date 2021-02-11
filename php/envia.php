<?php

// Aqui ficam os dados do seu e-mail e da autoresposta!!!

$assunto = "Formulário"; //Assunto do e-mail q vai chegar na sua caixa de mensagem
$mail = "contato@proflobo.com.br"; //E-mail que você gostaria de receber os resultados dos formmail's
$assunto_auto = "$nome, Sua Mensagem Foi Recebida Com Sucesso!";//Assunto da Auto Resposta
$website =  "ProfLobo";//Nome do Website
$url_website = "www.proflobo.com.br";//Url do Website
$nome_webmaster = "Matheus Lobo";//Nome do Webmaster do site
$mensagem_auto = "Obrigado por entrar em contato conosco $nome!\nO mais breve possivel estaremos respondendo sua mensagem!!!\n\n ProfLobo - $nome_webmaster";
$assunto_auto = "Recebemos sua mensagem";

// Aqui ficam os dados do formulário que serão enviados!!!

$nome = $_POST["nome"];//Campo Nome do Formulário
$email = $_POST["email"];//Campo E-mail do Formulário
$assunto_msg = $_POST["assunto_msg"];//Campo Mensagem do Formulário
$contato = $_POST["contato"];//Campo Contato do Formulário
$mensagem = "Formulário enviado por $nome no Website $website:\n\n";//Inicio da Mensagem enviada! 
$mensagem .= "Nome: $nome\n";//Nome do Contato
$mensagem .= "E-mail: $email\n";//Nome do Contato
$mensagem .= "Assunto: $assunto_msg\n";//Assunto do Contato
$mensagem .= "Mensagem: $contato";//Mensagem Enviada do Contato

//não modifique esta linha, pois é ela que envia a mensagem!!!
@mail($mail, $assunto, $mensagem, "From: $email");

//não modifique esta linha, pois é ela que envia a auto_resposta!!!
@mail($email, $assunto_auto, $mensagem_auto, "From: $mail");

header("Location:ok.php");

?>


