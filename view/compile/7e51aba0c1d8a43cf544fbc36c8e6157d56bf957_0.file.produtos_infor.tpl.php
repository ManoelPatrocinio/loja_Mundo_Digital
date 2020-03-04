<?php
/* Smarty version 3.1.34-dev-7, created on 2020-01-23 04:47:29
  from 'C:\xampp\htdocs\loja\view\produtos_infor.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5e29175193e784_86654880',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7e51aba0c1d8a43cf544fbc36c8e6157d56bf957' => 
    array (
      0 => 'C:\\xampp\\htdocs\\loja\\view\\produtos_infor.tpl',
      1 => 1579751207,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e29175193e784_86654880 (Smarty_Internal_Template $_smarty_tpl) {
?><head>


  </head>
  <body>
    <div class="container">
        <div class="row">
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['PRO']->value, 'P');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['P']->value) {
?>
        <div class="col">
          <div class="container corpo-item">
            <div class="media">
              <div class="topo-itemsale">
              </div>

              <img class="img-fluid" src="<?php echo $_smarty_tpl->tpl_vars['P']->value['pro_img'];?>
" alt="Imagem de exemplo genérica">
              <div class="price-sell">
                <h2>R$<?php echo $_smarty_tpl->tpl_vars['P']->value['pro_valor'];?>
</h2>
              </div>

            <div class="rodape-itemsale" onclick="location.href='<?php echo $_smarty_tpl->tpl_vars['GET_CARRINHO']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['P']->value['pro_id'];?>
/<?php echo $_smarty_tpl->tpl_vars['P']->value['pro_slug'];?>
'" style="cursor: pointer;">
              <h3>Adicionar ao Carrinho</h3>
            </div>

            </div>

            <div class="media-body">
              <h5 class="mt-5 text-center topo-item-desc"><?php echo $_smarty_tpl->tpl_vars['P']->value['pro_nome'];?>
</h5>
              <p><?php echo $_smarty_tpl->tpl_vars['P']->value['pro_descricao'];?>
</p>

            </div>

        </div>

      </div>
        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </div>
</body>
<?php }
}
