<?php
/* Smarty version 3.1.34-dev-7, created on 2020-01-12 20:29:17
  from 'C:\xampp\htdocs\loja_original\view\produtos.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5e1b738da5be99_87960746',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'fc54032673cf910e62b806d62d5ade78c4da7c21' => 
    array (
      0 => 'C:\\xampp\\htdocs\\loja_original\\view\\produtos.tpl',
      1 => 1578857353,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e1b738da5be99_87960746 (Smarty_Internal_Template $_smarty_tpl) {
?>

<body>

  <div class="container">
    
    <div class="row" id="corpo">
       
        <!-- copo da pagina -->
        <div class="row">
           <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['PRO']->value, 'P');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['P']->value) {
?>
          <div class="col-lg-4 col-md-6 mb-4">
            
            <div class="card h-100">
              
              <a href="#"><img class="card-img-top" src= "midias/foto1.jpg" alt=""></a>
              <div class="card-body">
                <h4 class="card-title">
                  <a href="#"><?php echo $_smarty_tpl->tpl_vars['P']->value['pro_nome'];?>
</a>
                </h4>
                <h5>$<?php echo $_smarty_tpl->tpl_vars['P']->value['pro_valor'];?>
</h5>
                <p class="card-text"><?php echo $_smarty_tpl->tpl_vars['P']->value['pro_descricao'];?>
</p>
              </div>
              <div class="card-footer">
                <small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
              </div>
              
            </div>
           
          </div>

          <div class="col-lg-4 col-md-6 mb-4">
            <div class="card h-100">
              <a href="#"><img class="card-img-top" src= "midias/foto2.jpg" alt=""></a>
              <div class="card-body">
                <h4 class="card-title">
                  <a href="#"><?php echo $_smarty_tpl->tpl_vars['P']->value['pro_nome'];?>
</a>
                </h4>
                <h5>$<?php echo $_smarty_tpl->tpl_vars['P']->value['pro_valor'];?>
</h5>
                <p class="card-text"><?php echo $_smarty_tpl->tpl_vars['P']->value['pro_descricao'];?>
</p>
              </div>
              <div class="card-footer">
                <small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 mb-4">
            <div class="card h-100">
              <a href="#"><img class="card-img-top" src= "midias/foto3.jpg" alt=""></a>
              <div class="card-body">
                <h4 class="card-title">
                  <a href="#"><?php echo $_smarty_tpl->tpl_vars['P']->value['pro_nome'];?>
</a>
                </h4>
                <h5>$<?php echo $_smarty_tpl->tpl_vars['P']->value['pro_valor'];?>
</h5>
                <p class="card-text"><?php echo $_smarty_tpl->tpl_vars['P']->value['pro_descricao'];?>
</p>
              </div>
              <div class="card-footer">
                <small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 mb-4">
            <div class="card h-100">
              <a href="#"><img class="card-img-top" src="http://placehold.it/700x400" alt=""></a>
              <div class="card-body">
                <h4 class="card-title">
                  <a href="#">Item Four</a>
                </h4>
                <h5>$24.99</h5>
                <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet numquam aspernatur!</p>
              </div>
              <div class="card-footer">
                <small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 mb-4">
            <div class="card h-100">
              <a href="#"><img class="card-img-top" src="http://placehold.it/700x400" alt=""></a>
              <div class="card-body">
                <h4 class="card-title">
                  <a href="#">Item Five</a>
                </h4>
                <h5>$24.99</h5>
                <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet numquam aspernatur! Lorem ipsum dolor sit amet.</p>
              </div>
              <div class="card-footer">
                <small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 mb-4">
            <div class="card h-100">
              <a href="#"><img class="card-img-top" src="http://placehold.it/700x400" alt=""></a>
              <div class="card-body">
                <h4 class="card-title">
                  <a href="#">Item Six</a>
                </h4>
                <h5>$24.99</h5>
                <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet numquam aspernatur!</p>
              </div>
              <div class="card-footer">
                <small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
              </div>
            </div>
          </div>
          <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </div>
        <!-- /.row -->

      
      <!-- /.col-lg-9 -->
      
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
