<?php
/* Smarty version 3.1.34-dev-7, created on 2020-02-06 17:26:30
  from '/opt/lampp/htdocs/loja/view/produtos.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5e3c3e3646d2c7_74569219',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '03a7d00f4c525c1f141241ac855ad6d3e3a733ec' => 
    array (
      0 => '/opt/lampp/htdocs/loja/view/produtos.tpl',
      1 => 1581006386,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e3c3e3646d2c7_74569219 (Smarty_Internal_Template $_smarty_tpl) {
?>

<body>

  <div class="container">

    <div class="row" id="corpo">
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['PRO']->value, 'P');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['P']->value) {
?>

            <?php if (isset($_SESSION['adm']) != 9) {?>
            <?php if ($_smarty_tpl->tpl_vars['P']->value['pro_ativo'] == 's') {?>

          <div class="col-lg-4 col-md-6 mb-4">
            <div class="card h-100 ">

              <div class="topo-item">
              <a href="<?php echo $_smarty_tpl->tpl_vars['PRO_INFOR']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['P']->value['pro_id'];?>
/<?php echo $_smarty_tpl->tpl_vars['P']->value['pro_slug'];?>
"><?php echo $_smarty_tpl->tpl_vars['P']->value['pro_nome'];?>
</a>
              </div>

                <a href="<?php echo $_smarty_tpl->tpl_vars['PRO_INFOR']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['P']->value['pro_id'];?>
/<?php echo $_smarty_tpl->tpl_vars['P']->value['pro_slug'];?>
"><img class="card-img-top" src= "<?php echo $_smarty_tpl->tpl_vars['P']->value['pro_img'];?>
" alt="" width="350px" height="300px"></a>
              <div class="card-body">
                <h4 class="card-title">

                </h4>
                <h5 class="card-price">R$<?php echo $_smarty_tpl->tpl_vars['P']->value['pro_valor'];?>
</h5>
                <p class="card-text"><?php echo $_smarty_tpl->tpl_vars['P']->value['pro_descricao'];?>
</p>
              </div>

              <div class="card-footer rodape-item" onclick="location.href='<?php echo $_smarty_tpl->tpl_vars['PRO_INFOR']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['P']->value['pro_id'];?>
/<?php echo $_smarty_tpl->tpl_vars['P']->value['pro_slug'];?>
';" style="cursor: pointer;">
              <p>Mais Detalhes</p>
              </div>
            </div>
          </div>
          <?php }?>
          <?php } elseif ($_SESSION['adm'] == 9) {?>
          <?php if ($_smarty_tpl->tpl_vars['P']->value['pro_ativo'] == 's' || $_smarty_tpl->tpl_vars['P']->value['pro_ativo'] == 'n') {?>
          <div class="col-lg-4 col-md-6 mb-4">
            <div class="card h-100 ">
<?php if ($_smarty_tpl->tpl_vars['P']->value['pro_ativo'] == 'n') {?>
              <div class="topo-item topo-cinza">
              <a href="<?php echo $_smarty_tpl->tpl_vars['PRO_INFOR']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['P']->value['pro_id'];?>
/<?php echo $_smarty_tpl->tpl_vars['P']->value['pro_slug'];?>
"><?php echo $_smarty_tpl->tpl_vars['P']->value['pro_nome'];?>
</a>
              </div>
<?php } else { ?>
            <div class="topo-item">
            <a href="<?php echo $_smarty_tpl->tpl_vars['PRO_INFOR']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['P']->value['pro_id'];?>
/<?php echo $_smarty_tpl->tpl_vars['P']->value['pro_slug'];?>
"><?php echo $_smarty_tpl->tpl_vars['P']->value['pro_nome'];?>
</a>
            </div>
<?php }?>
                <a href="<?php echo $_smarty_tpl->tpl_vars['PRO_INFOR']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['P']->value['pro_id'];?>
/<?php echo $_smarty_tpl->tpl_vars['P']->value['pro_slug'];?>
"><img class="card-img-top" src= "<?php echo $_smarty_tpl->tpl_vars['P']->value['pro_img'];?>
" alt="" width="350px" height="300px"></a>
              <div class="card-body">
                <h4 class="card-title">

                </h4>
                <h5 class="card-price">R$<?php echo $_smarty_tpl->tpl_vars['P']->value['pro_valor'];?>
</h5>
                <p class="card-text"><?php echo $_smarty_tpl->tpl_vars['P']->value['pro_descricao'];?>
</p>
              </div>
<?php if ($_smarty_tpl->tpl_vars['P']->value['pro_ativo'] == 'n') {?>
              <div class="card-footer rodape-item topo-cinza" onclick="location.href='<?php echo $_smarty_tpl->tpl_vars['PRO_INFOR']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['P']->value['pro_id'];?>
/<?php echo $_smarty_tpl->tpl_vars['P']->value['pro_slug'];?>
';" style="cursor: pointer;">
              <p>Indisponível</p>
              </div>
<?php } else { ?>
            <div class="card-footer rodape-item" onclick="location.href='<?php echo $_smarty_tpl->tpl_vars['PRO_INFOR']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['P']->value['pro_id'];?>
/<?php echo $_smarty_tpl->tpl_vars['P']->value['pro_slug'];?>
';" style="cursor: pointer;">
            <p>Mais Detalhes</p>
            </div>
<?php }?>
            </div>
          </div>
          <?php }?>
          <?php }?>
             <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>


    </div>
    <!-- /.row -->

  </div>
  <!-- /.container -->

  <!-- Bootstrap core JavaScript -->


</body>

</html>
<?php }
}
