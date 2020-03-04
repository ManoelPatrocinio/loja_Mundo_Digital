<?php
/* Smarty version 3.1.34-dev-7, created on 2020-01-18 20:51:55
  from '/opt/lampp/htdocs/loja/view/produtos_main.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5e2361dbb62403_29594859',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a29a573ede2b72ad58afe9da4dc113b3a891bf7c' => 
    array (
      0 => '/opt/lampp/htdocs/loja/view/produtos_main.tpl',
      1 => 1579377111,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e2361dbb62403_29594859 (Smarty_Internal_Template $_smarty_tpl) {
?>

<body>

  <div class="container">

    <div class="row" id="corpo">
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['PRO_MAIN']->value, 'P');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['P']->value) {
?>
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
             <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>


    </div>
    <!-- /.row -->

  </div>
  <!-- /.container -->

  <!-- Bootstrap core JavaScript -->
  <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['GET_TEMA']->value;?>
/tema/vendor/jquery/jquery.min.js"><?php echo '</script'; ?>
>
  <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['GET_TEMA']->value;?>
/tema/vendor/bootstrap/js/bootstrap.bundle.min.js"><?php echo '</script'; ?>
>

</body>

</html>
<?php }
}
