<?php

	$smarty = new Template();

	if(isset($_POST['cpf']) && isset($_POST['nome']) && isset($_POST['email']) && isset($_POST['senha']) && isset($_POST['estado'])&& isset($_POST['cidade'])&& isset($_POST['rua'])){
	  $nome = filter_input(INPUT_POST, 'nome',FILTER_SANITIZE_STRING);
		$cpf = filter_input(INPUT_POST, 'cpf',FILTER_SANITIZE_STRING);
	  $email = filter_input(INPUT_POST, 'email',FILTER_SANITIZE_EMAIL);
	  $senha = filter_input(INPUT_POST, 'senha',FILTER_SANITIZE_STRING);
		$estado = filter_input(INPUT_POST, 'estado',FILTER_SANITIZE_STRING);
		$cidade = filter_input(INPUT_POST, 'cidade',FILTER_SANITIZE_STRING);
		$rua = filter_input(INPUT_POST, 'rua',FILTER_SANITIZE_STRING);
		$numero = filter_input(INPUT_POST, 'numero',FILTER_SANITIZE_NUMBER_INT);

		$senha = crypt($senha,'$1$');


	  $con = new Conexao();

		$check = "SELECT cli_cpf FROM mw_clientes where cli_cpf = :cpf";

		$params = array(
      ':cpf' => $cpf,

    );

		$con->ExecuteSQL($check, $params);

			if($con->TotalDados() > 0){
				$_SESSION['registred'] = '0';
				$_SESSION['exist'] = '1';
			}else{
				$_SESSION['exist'] = '0';
			}

		$check2 = "SELECT cli_email FROM mw_clientes where cli_email = :email";

		$params = array(
      ':email' => $email,

    );

		$con->ExecuteSQL($check2, $params);

			if($con->TotalDados() > 0){
				$_SESSION['registred'] = '0';
				$_SESSION['exist'] = '1';
			}else{
				$_SESSION['exist'] = '0';
			}


		if(isset($_SESSION['exist']) && $_SESSION['exist'] == 0){
			$query = "INSERT INTO  mw_clientes(cli_id, cli_cpf, cli_nome, cli_email, cli_pass, cli_uf, cli_cidade, cli_endereco, cli_numero)
		   VALUES (DEFAULT,'$cpf','$nome','$email','$senha','$estado','$cidade','$rua','$numero')";

			if($con->ExecuteSQL($query)){
		    $_SESSION['registred'] = '1';
		  }else{
		    $_SESSION['registred'] = '0';
		  }
		}

}

$smarty->display('cadastro.tpl');

 ?>
