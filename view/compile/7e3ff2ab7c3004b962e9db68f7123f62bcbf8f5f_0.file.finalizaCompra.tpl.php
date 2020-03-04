<?php
/* Smarty version 3.1.34-dev-7, created on 2020-01-31 18:01:29
  from '/opt/lampp/htdocs/loja/view/finalizaCompra.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5e345d69b27940_16582840',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7e3ff2ab7c3004b962e9db68f7123f62bcbf8f5f' => 
    array (
      0 => '/opt/lampp/htdocs/loja/view/finalizaCompra.tpl',
      1 => 1580489474,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e345d69b27940_16582840 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html>

<link rel="stylesheet" type="text/css" href="css/main.min.css">
<body>
  <form class="card-body" method="POST" action="http://localhost/loja/finalizaCompra">

         <h4 class="mb-3">PAGAMENTO</h4>

          <div class="d-block my-3">
            <div class="custom-control custom-radio">
              <input id="credit" name="paymentMethod" type="radio" class="custom-control-input" value="CartaoCredito" checked required>
              <label class="custom-control-label" for="credit">Catão de Crédito</label>
            </div>
            <div class="custom-control custom-radio">
              <input id="debit" name="paymentMethod" type="radio" class="custom-control-input" value="CartaoDebito"required>
              <label class="custom-control-label" for="debit">Catão de Débito</label>
            </div>
            <div class="custom-control custom-radio">
              <input id="paypal" name="paymentMethod" type="radio" class="custom-control-input" value="paypal" required>
              <label class="custom-control-label" for="paypal">Paypal</label>
            </div>
          </div>
          <div class="row">
            <div class="col-md-6 mb-3">
              <label for="cc-name">Cliente</label>
                <input type="text" class="form-control" id="fCliente"  name="fCliente" value="<?php  echo $_SESSION['CLI']['cli_nome']; ?>">
            </div>  
            <div class="col-md-6 mb-3">
              <label for="cc-name">Valor Da Compra</label>
                <input type="text" class="form-control" name="fValor" value="R$ <?php echo $_smarty_tpl->tpl_vars['TOTAL']->value;?>
">
            </div>
          </div>
          <div class="row">
            <div class="col-md-6 mb-3">
              <label for="cc-name">Nome no Cartão</label>
              <input type="text" class="form-control" id="cc-name" name="fNomeCartao" placeholder="" required>
              <small class="text-muted">Nome Exibido No Cartão</small>
              <div class="invalid-feedback">
                O nome no cartão é obrigatório
              </div>
            </div>
            <div class="col-md-6 mb-3">
              <label for="cc-number">Número do Cartão</label>
              <input type="text" class="form-control" id="cc-number" name="fNumeroCartao" placeholder="" required>
              <div class="invalid-feedback">
                É necessário o número do cartão de crédito
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-3 mb-3">
              <label for="cc-expiration">Expiração</label>
              <input type="text" class="form-control" id="cc-expiration" name="fexpiracao" placeholder="" required>
              <div class="invalid-feedback">
                Expiration date required
              </div>
            </div>
            <div class="col-md-3 mb-3">
              <label for="cc-expiration">CVV</label>
              <input type="text" class="form-control" id="cc-cvv" name="fcvv" placeholder="" required>
              <div class="invalid-feedback">
                Data de vencimento necessária

              </div>
            </div>
          </div>
          <hr class="mb-4">
          <button class="btn btn-primary btn-lg btn-block" type="submit">Comprar</button>
        </form>
      </div>
  
</form>
    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <?php echo '<script'; ?>
 src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
>window.jQuery || document.write('<?php echo '<script'; ?>
 src="../../assets/js/vendor/jquery-slim.min.js"><\/script>')<?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="../../assets/js/vendor/popper.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="../../dist/js/bootstrap.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="../../assets/js/vendor/holder.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
>
      // Example starter JavaScript for disabling form submissions if there are invalid fields
      (function() {
        'use strict';

        window.addEventListener('load', function() {
          // Fetch all the forms we want to apply custom Bootstrap validation styles to
          var forms = document.getElementsByClassName('needs-validation');

          // Loop over them and prevent submission
          var validation = Array.prototype.filter.call(forms, function(form) {
            form.addEventListener('submit', function(event) {
              if (form.checkValidity() === false) {
                event.preventDefault();
                event.stopPropagation();
              }
              form.classList.add('was-validated');
            }, false);
          });
        }, false);
      })();
    <?php echo '</script'; ?>
>
  </body>
</html>
<?php }
}
