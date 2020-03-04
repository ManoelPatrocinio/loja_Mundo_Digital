<?php


$smarty = new Template();
$cliente = new Clientes();


if(isset($_POST['id']) && isset($_POST['nome']) && isset($_POST['email']) && isset($_POST['cpf'])){

	$id = filter_input(INPUT_POST,'id',FILTER_SANITIZE_NUMBER_INT);
	$nome= filter_input(INPUT_POST,'nome',FILTER_SANITIZE_STRING);
	$email = filter_input(INPUT_POST,'email',FILTER_SANITIZE_STRING);
	$pass = filter_input(INPUT_POST,'pass',FILTER_SANITIZE_STRING);
	$cpf = filter_input(INPUT_POST,'cpf',FILTER_SANITIZE_STRING);
	$ddd = filter_input(INPUT_POST,'ddd',FILTER_SANITIZE_STRING);
	$celular = filter_input(INPUT_POST,'celular',FILTER_SANITIZE_STRING);
	$uf = filter_input(INPUT_POST,'uf',FILTER_SANITIZE_STRING);
	$cidade = filter_input(INPUT_POST,'cidade',FILTER_SANITIZE_STRING);
	$rua = filter_input(INPUT_POST,'rua',FILTER_SANITIZE_STRING);
	$numero = filter_input(INPUT_POST,'numero',FILTER_SANITIZE_NUMBER_INT);
	$bairro = filter_input(INPUT_POST,'bairro',FILTER_SANITIZE_STRING);

	$pass = crypt($pass,'$1$');
 	$con = new Conexao();
 	
	$query = "UPDATE mw_clientes SET cli_nome = '$nome',cli_endereco = '$rua', cli_numero = $numero,
			 cli_bairro = '$bairro', cli_cidade = '$cidade', cli_uf = '$uf',cli_cpf = '$cpf', 
			 cli_ddd = $ddd,cli_celular = $celular,cli_email = '$email', cli_pass = '$pass' WHERE `cli_id` = $id";

	if($con->ExecuteSQL($query)){
		echo '<script>alert("Dados Atualizados com Sucesso!")</script>';
		
	}

}

if(isset($_SESSION['logado']) && isset($_SESSION['CLI']) ){
	$cliente->GetUsersID($_SESSION['CLI']['cli_id']);
	$smarty->assign('CLI',$cliente->GetItens());
	$smarty->display('perfil.tpl');
}else{
	echo '<script>alert("Faça login Para acessar seu Perfil")</script>';
	echo '<meta http-equiv="refresh" content="0; url=http://localhost/loja">';

}

 ?>
