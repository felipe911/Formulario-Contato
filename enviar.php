<?php 

$email_from='contato@seudominio.com.br';	// Substitua essa linha pelo seu e-mail@seudominio
 
//pego os dados enviados pelo formulário 
$nome_para = $_POST["nome_para"]; 
$email = $email_from;
$mensagem = $_POST["mensagem"]; 
$assunto = $_POST["assunto"];
$seuemail = $_POST["seuemail"];


/* Montando a mensagem a ser enviada no corpo do e-mail. */
$mensagemHTML = 'FORMULARIO PREENCHIDO NO SITE WWW.SEUSITE.COM.BR/CONTATO
Nome: '.$nome_para.'
E-Mail: '.$seuemail.'
Assunto: '.$assunto.'
Mensagem: '.$mensagem.'';

$headers = "MIME-Version: 1.0" . $quebra_linha . ""; 
$headers .= "From: $email_from " . $quebra_linha . ""; 
$headers .= "Return-Path: $email_from " . $quebra_linha . ""; 
$headers .= "Content-type: multipart/mixed; boundary=\"$boundary\"" . $quebra_linha . ""; 
$headers .= "$boundary" . $quebra_linha . ""; 
 
$headers = "MIME-Version: 1.0" . $quebra_linha . ""; 
$headers .= "Content-type: text/html; charset=iso-8859-1" . $quebra_linha . ""; 
$headers .= "From: $email_from " . $quebra_linha . ""; 
$headers .= "Return-Path: $email_from " . $quebra_linha . ""; 
 
//envia o email sem anexo 
mail($email,$assunto,$mensagemHTML, $headers, "-r".$email_from); 
 
echo"Email enviado com Sucesso!"; 
 
?>