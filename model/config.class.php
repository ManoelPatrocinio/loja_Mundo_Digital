<?php


	class Config{

		//informações basicas do site
		const SITE_URL = "http://localhost";
		const SITE_PASTA = "loja";
		const SITE_NOME = "MUNDO DIGITAL";
		const SITE_EMAIL = "manoelpatrocinio99@gmail.com";

		//infromações do banco
		const BD_HOST = "localhost",
		 	BD_USER = "root",
		 	BD_SENHA = "",
		 	BD_BANCO = "mundo_digital",
		 	BD_PREFIXO = "mw_";


		//informações do php mailler

		const EMAIL_HOST = "smtp.gmail.com"; // servidor do email.
		const EMAIL_USER = "manoelpatrocinio99@gmail.com";
		const EMAIL_NOME = "Contato Loja";
		const EMAIL_SENHA = "";
		const EMAIL_PORTA = 587;
		const EMAIL_SMTPAUTH = true; //autentificação
		const EMAIL_SMTPSECURE = "tls" ;
		const EMAIL_COPIA = "manoelpatrocinio99@gmail.com";

	}

?>
