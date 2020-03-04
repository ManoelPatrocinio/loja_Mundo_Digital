<?php 
	
	$smarty = new Template();
	$carrinho = new Carrinho();
	$total = filter_input(INPUT_POST, 'total',FILTER_SANITIZE_NUMBER_INT); // vido de carrinho

	if (isset($_SESSION['logado']) && $carrinho->qtdProdutos() != 0) {
		$smarty->assign('TOTAL',$total);
		$smarty->display('Comprar.tpl');
	}else{
		echo '<script>alert("É preciso estar logado")</script>';
        echo '<meta http-equiv="refresh" content="0; url=http://localhost/loja/produtos">';
	}
	
 ?>