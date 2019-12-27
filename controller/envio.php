
<?php
$to      = Config::EMAIL_USER;
$subject = 'Contato - Loja Mundo Digital';
$message = 'Email de'.$_GET['email']. "\r \n". $_GET['mensagem'];
$destinatario = $_GET['email'];
$headers = "From: " .$destinatario;
mail($to, $subject, $message, $headers);
?>

<script> alert('Email enviado com sucesso !!')</script>

<!-- retona para a pagina de contato depois do envio -->
<meta http-equiv="refresh" content="0; url=contato">