<?php
	$smarty = new Template();
	
	$produtos = new Produtos();
	$produtos->GetProdutosID(Rotas::$pag[1]);

	$smarty->assign('PRO',$produtos->GetItens());
  	$smarty->assign('PASTA', Rotas::get_ImagensURL());
	$smarty->assign('GET_CARRINHO',Rotas::pag_carrinho());
	$smarty->display('produtos_infor.tpl');


/*echo '<pre>';
	var_dump($produtos->GetItens());
	echo '</pre>';

*/
?>
