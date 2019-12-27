<?php
	$smarty = new Template();
	$smarty->assign('PRODUTOS','Página de produtos');
	$smarty->display('produtos.tpl');
	$produtos = new Produtos();
	$produtos->GetProdutos();

	
?>