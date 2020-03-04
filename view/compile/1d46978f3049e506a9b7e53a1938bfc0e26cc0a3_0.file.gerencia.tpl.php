<?php
/* Smarty version 3.1.34-dev-7, created on 2020-02-20 20:00:37
  from '/opt/lampp/htdocs/loja/view/gerencia.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5e4ed755e9e7b0_34785487',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1d46978f3049e506a9b7e53a1938bfc0e26cc0a3' => 
    array (
      0 => '/opt/lampp/htdocs/loja/view/gerencia.tpl',
      1 => 1582224825,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e4ed755e9e7b0_34785487 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="col">
    <div class="card">


      <button type="button" class="btn btn-primary" onclick="location.href='cadproduto'";>Adicionar Produto</button>
       <button type="button" class="btn btn-primary" onclick="location.href='editarProd'";>Editar Produto</button>
<!--
      <button type="button" class="btn btn-primary" onclick="location.href='altera'";>Alterar Cliente</button>

-->

      <button type="button" class="btn btn-primary" onclick="location.href='pedidos'";>Serviços Agendados</button>
      <button type="button" class="btn btn-primary" onclick="location.href='EditarCliente'";>Clientes Cadastrados</button>




    </div>
  </div>
<?php }
}
