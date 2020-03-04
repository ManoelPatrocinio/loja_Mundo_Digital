<?php
	$smarty = new Template();
	$pedidos = new Pedidos();
	$pedidos->GetPedidos();

	$smarty->assign('PRE',$pedidos->GetItens());
	$smarty->display('listPedidos.tpl');


?>