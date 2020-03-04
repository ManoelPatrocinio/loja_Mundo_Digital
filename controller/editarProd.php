<?php
	$smarty = new Template();
	$produtos = new Produtos();


	if(isset($_POST['id']) && isset($_POST['estoque']) && isset($_POST['valor'])){

		$id = filter_input(INPUT_POST,'id',FILTER_SANITIZE_NUMBER_INT);
		$estoque = filter_input(INPUT_POST,'estoque',FILTER_SANITIZE_NUMBER_INT);
		$valor = filter_input(INPUT_POST,'valor',FILTER_SANITIZE_NUMBER_INT);

	 	$con = new Conexao();
		$query = "UPDATE mw_produtos SET pro_estoque = '$estoque', pro_valor = '$valor' WHERE pro_id = $id";

		if($con->ExecuteSQL($query)){
			echo '<script>alert("Produto Atualizado com Sucesso!")</script>';
			
		}

    }

	$produtos->GetProdutos();
	
	$smarty->assign('PRO',$produtos->GetItens());
	
	$smarty->display('editProd.tpl');

?>