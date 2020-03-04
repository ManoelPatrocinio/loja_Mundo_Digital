<?php

$nome =  filter_input(INPUT_POST, 'nome',FILTER_SANITIZE_STRING);

$email =  filter_input(INPUT_POST, 'email',FILTER_SANITIZE_EMAIL);
$cpf =  filter_input(INPUT_POST, 'cpf',FILTER_SANITIZE_STRING);
$telefone =  filter_input(INPUT_POST, 'telefone',FILTER_SANITIZE_STRING);
$endereco =  filter_input(INPUT_POST, 'endereco',FILTER_SANITIZE_STRING);
$servico =  filter_input(INPUT_POST, 'servico',FILTER_SANITIZE_STRING);
$data =  filter_input(INPUT_POST, 'data',FILTER_SANITIZE_STRING);
$horario = filter_input(INPUT_POST, 'horario',FILTER_SANITIZE_STRING);




$con = new Conexao();
$query = "INSERT INTO mw_servicos(Cli_id,Cli_nome,Cli_cpf,Cli_email,Cli_telefone,Cli_endereco,Cli_servico,Cli_horario,cli_data)
                     values(DEFAULT,'$nome','$cpf','$email','$telefone','$endereco','$servico','$horario','$data')";
if($con->ExecuteSQL($query)){
	echo '<script>alert("Solicitação enviada com Sucesso!")</script>';
	echo '<meta http-equiv="refresh" content="0; url=servico">';
}else{
	echo '<script>alert("Erro ao enviar Solicitação !")</script>';
}


 ?>
 
