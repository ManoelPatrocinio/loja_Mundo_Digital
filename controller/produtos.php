<?php
	$smarty = new Template();

	$produtos = new Produtos();

	if(isset(Rotas::$pag[1])){ // se tiver passando alguma categoria no url
		$produtos->GetProdutosCatID(Rotas::$pag[1]);
		
	}else {
		$produtos->GetProdutos();
	}


	$smarty->assign('PRO',$produtos->GetItens());
	$smarty->assign('PRO_INFOR',Rotas:: pag_produtosInfor());
	$smarty->display('produtos.tpl');

?>
