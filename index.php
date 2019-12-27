<?php

/* requisição das bibliotecas do composer */
require './lib/autoload.php';

/* carregamento dos templates*/
$smarty = new Template();


// valores para o template
$smarty->assign('GET_TEMA', Rotas::get_siteTema());
$smarty->assign('GET_HOME', Rotas::get_siteHome());
$smarty->assign('SITE_NOME', config::SITE_NOME);
$smarty->assign('GET_CARRINHO', Rotas::pag_carrinho());
$smarty->assign('GET_CONTATO', Rotas::pag_contato());
$smarty->assign('GET_PERFIL', Rotas::pag_perfil());
$smarty->assign('GET_PRODUTOS', Rotas::pag_produtos());


$smarty->display('index.tpl'); // sempre deve ser a ultima linha

?>

