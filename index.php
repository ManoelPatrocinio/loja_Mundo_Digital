<?php
session_start();
/* requisição das bibliotecas do composer */
require './lib/autoload.php';

/* carregamento dos templates*/
$smarty = new Template();
$categoria = new Categoria();
$categoria->GetCategorias();

// valores para o template
$smarty->assign('GET_TEMA', Rotas::get_siteTema());
$smarty->assign('GET_HOME', Rotas::get_siteHome());
$smarty->assign('SITE_NOME', config::SITE_NOME);
$smarty->assign('GET_CARRINHO', Rotas::pag_carrinho());
$smarty->assign('GET_CONTATO', Rotas::pag_contato());
$smarty->assign('GET_PERFIL', Rotas::pag_perfil());
$smarty->assign('GET_PRODUTOS', Rotas::pag_produtos());
$smarty->assign('GET_IMAGEM', Rotas::get_ImagensURL());
$smarty->assign('GET_SERVICOS', Rotas::pag_formulario());
$smarty->assign('GET_STARTUS', Rotas::pag_formulario());
$smarty->assign('GET_CARRINHO', Rotas::pag_carrinho());
$smarty->assign('CATEGORIAS', $categoria->GetItens());
$smarty->assign('LOGIN', Rotas::pag_Login());
$smarty->assign('LOGOFF', Rotas::pag_Logoff());
$smarty->assign('CADUSER', Rotas::pag_cad());
$smarty->assign('GERENCIA', Rotas::pag_adm());
$smarty->assign('EDIT', Rotas::pag_EditarCliente());
$smarty->assign('EDIT_PROD', Rotas::pag_editProd());
$smarty->display('index.tpl'); // sempre deve ser a ultima linha

?>
