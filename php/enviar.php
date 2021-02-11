<?php
	$headers = "MIME-Version: 1.1\r\n";
	$headers .= "Content-type: text/plain; charset=utf-8\r\n";
	$headers .= "From: $email\r\n"; // remetente
	$headers .= "Return-Path: $email\r\n"; // return-path
	$envio = mail("matheus.v.lobo@gmail.com", $nome, $msg, $headers);
 
	if($envio){
		include 'sucesso.html';
	}else{
		include 'falha.html';
	}
?>
