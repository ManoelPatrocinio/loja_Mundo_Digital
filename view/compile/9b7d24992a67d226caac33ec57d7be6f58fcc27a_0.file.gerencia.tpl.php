<?php
/* Smarty version 3.1.34-dev-7, created on 2020-02-10 15:17:17
  from 'C:\xampp\htdocs\loja\view\gerencia.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5e4165ed56cc37_29337705',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9b7d24992a67d226caac33ec57d7be6f58fcc27a' => 
    array (
      0 => 'C:\\xampp\\htdocs\\loja\\view\\gerencia.tpl',
      1 => 1581343238,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e4165ed56cc37_29337705 (Smarty_Internal_Template $_smarty_tpl) {
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
