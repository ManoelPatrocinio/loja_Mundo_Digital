<?php 

	$formaPagamento =  filter_input(INPUT_POST, 'paymentMethod',FILTER_SANITIZE_STRING);
	$cli_id = $_SESSION['CLI']['cli_id'];
	$NomeCliente =  filter_input(INPUT_POST, 'fCliente',FILTER_SANITIZE_STRING);
	$valorCompra =  filter_input(INPUT_POST, 'fValor',FILTER_SANITIZE_STRING);
	$NomeCartao =  filter_input(INPUT_POST, 'fNomeCartao',FILTER_SANITIZE_STRING);
	$NumeroCartao =  filter_input(INPUT_POST, 'fNumeroCartao',FILTER_SANITIZE_STRING);
	$expiracao =  filter_input(INPUT_POST, 'fexpiracao',FILTER_SANITIZE_STRING);
	$cvv =  filter_input(INPUT_POST, 'fcvv',FILTER_SANITIZE_STRING);

	$NumeroCartao = md5($NumeroCartao);
	$cvv = md5($cvv);


	$con = new Conexao();
	$query = "INSERT INTO `venda` (`cod_venda`,`Cli_id`,`Cli_nome`, `CompraValor`, `NomeCartao`, `NumeroCartao`, `expiracao`, `cvv`, `FormaPagamento`) VALUES (DEFAULT,'$cli_id','$NomeCliente', '$valorCompra', '$NomeCartao',
	  '$NumeroCartao', '$expiracao', '$cvv', '$formaPagamento')";

	if($con->ExecuteSQL($query)){
	
		echo '<script>alert("Sua venda foi realizada com Sucesso!")</script>';
		echo '<meta http-equiv="refresh" content="0; url=http://localhost/loja">';

		$query = "select max(cod_venda) from venda";
		$con->ExecuteSQL($query);
		
		$lastVenda = $con->ListarDados();
	    $codVenda= $lastVenda["max(cod_venda)"];
		foreach ($_SESSION['produto'] as $id => $quantidade) {
	                            
	        $id = (int) $id;
	        $qtd = $quantidade;
	        $query = "UPDATE mw_produtos SET pro_estoque = pro_estoque - {$quantidade} WHERE pro_id = {$id} ";
	        $query2 = "INSERT INTO produto_venda VALUES(DEFAULT,'$codVenda','$id','$qtd')";
			
			if($con->ExecuteSQL($query)){
				$con->ExecuteSQL($query2);
			}
		
    	}   
	}else{

		echo '<script>alert("Erro ao finalisar venda, verifique seus dados")</script>';
		//echo '<meta http-equiv="refresh" content="0; url=http://localhost/loja/comprar">';
	}

	 
                         

?>