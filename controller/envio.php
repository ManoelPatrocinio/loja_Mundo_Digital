
<?php
$to      = "manoelpatrocinio99@gmail.com";
$subject = 'Contato - Loja Mundo Digital';
$message = 'Email de'.$_GET['email']. "\r \n". $_GET['mensagem'];
$destinatario = $_GET['email'];
$headers = "From: ".$destinatario;
mail($to, $subject, $message, $headers);
/*
<script>alert('Email enviado com Sucesso!')</script>
<meta http-equiv="refresh" content="0; url=contato">
*/
?>

