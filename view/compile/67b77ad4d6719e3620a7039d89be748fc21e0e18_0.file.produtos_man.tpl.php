<?php
/* Smarty version 3.1.34-dev-7, created on 2020-01-18 20:36:17
  from '/opt/lampp/htdocs/loja/view/produtos_man.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5e235e3192be68_01894056',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '67b77ad4d6719e3620a7039d89be748fc21e0e18' => 
    array (
      0 => '/opt/lampp/htdocs/loja/view/produtos_man.tpl',
      1 => 1579376163,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e235e3192be68_01894056 (Smarty_Internal_Template $_smarty_tpl) {
?>

<body>

  <div class="container">

    <div class="row" id="corpo">

          <div class="col-lg-4 col-md-6 mb-4">
            <div class="card h-100 ">
              <div class="topo-item">
              <a href=""></a>
              </div>
                <a href=""><img class="card-img-top" src= "" alt="" width="350px" height="300px"></a>
              <div class="card-body">
                <h4 class="card-title">

                </h4>
                <h5 class="card-price"></h5>
                <p class="card-text"></p>
              </div>
              <div class="card-footer rodape-item"  style="cursor: pointer;">
              <p>Mais Detalhes</p>
              </div>
            </div>
          </div>



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
