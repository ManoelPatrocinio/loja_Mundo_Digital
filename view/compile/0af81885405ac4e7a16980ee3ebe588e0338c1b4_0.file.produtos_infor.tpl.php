<?php
/* Smarty version 3.1.34-dev-7, created on 2020-03-04 19:18:01
  from '/opt/lampp/htdocs/loja/view/produtos_infor.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5e5ff0d91474c4_06524491',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0af81885405ac4e7a16980ee3ebe588e0338c1b4' => 
    array (
      0 => '/opt/lampp/htdocs/loja/view/produtos_infor.tpl',
      1 => 1583345876,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e5ff0d91474c4_06524491 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!-- 
       <div id="fromFrete">
                <form method="POST" action="calcularFrete" >
                  <input type="number" name="cep_destino">
                  <input type="text-center" name="peso" value="<?php echo $_smarty_tpl->tpl_vars['P']->value['pro_peso'];?>
" style="visibility: hidden;">
                  <input type="text-center" name="altura" value="<?php echo $_smarty_tpl->tpl_vars['P']->value['pro_altura'];?>
" style="visibility: hidden;">
                  <input type="text-center" name="largura" value="<?php echo $_smarty_tpl->tpl_vars['P']->value['pro_largura'];?>
" style="visibility: hidden;">
                  <input type="text-center" name="comprimento" value="<?php echo $_smarty_tpl->tpl_vars['P']->value['pro_comprimento'];?>
" style="visibility: hidden;">
                  <input type="text-center" name="valor" value="<?php echo $_smarty_tpl->tpl_vars['P']->value['pro_valor'];?>
" style="visibility: hidden;">

                  <input class="btn btn-light hblue" type="submit" name="Calcular">
                </form>
              </div>
-->              
<head>


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
              <h5 class="mt-5 text-center"><?php echo $_smarty_tpl->tpl_vars['P']->value['pro_nome'];?>
</h5>
              <p><?php echo $_smarty_tpl->tpl_vars['P']->value['pro_descricao'];?>
</p>
              
              <div class="botoes-prod">

                    <?php if (isset($_SESSION['logado']) && isset($_SESSION['adm']) == 9) {?>
                    <div class="bt">
                      <div class="botao-remove">
                            <a href="../../disableprod?pro_id=<?php echo $_smarty_tpl->tpl_vars['P']->value['pro_id'];?>
&pro_type=b" id="exclui" class="btn btn-sm btn-danger btn-remove"><i class="fas fa-trash fa-2x" id="icone1"></i></a>
                        </div>
                      <div class="botao-remove">
                            <a href="../../disableprod?pro_id=<?php echo $_smarty_tpl->tpl_vars['P']->value['pro_id'];?>
" class="btn btn-sm btn-danger btn-remove" data-confirm="ok?"><i class="fas fa-eye-slash fa-2x" id="icone1"></i></a>
                        </div>

                    <div class="botao-add">
                              <a href="../../disableprod?pro_id=<?php echo $_smarty_tpl->tpl_vars['P']->value['pro_id'];?>
&pro_type=a" id="add" class="btn btn-sm btn-success btn-remove" ><i class="fas fa-eye fa-2x" id="icone1"></i></a>
                          </div>
                    </div>

                <?php }?>
                          <div id="forma_pag" style="width: 160px;">
                            <p class="text-right">Pagamento a Vista</p>
                            <img src="https://cdn.shopify.com/s/files/1/1691/5741/files/z_large.png?v=1489005198" width="100%" height="100%">

                          </div>

</div>




  </div>

        </div>

      </div>
        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </div>
  </div>
</body>
<?php }
}
