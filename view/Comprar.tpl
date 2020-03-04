<!DOCTYPE html>
<html>

<link rel="stylesheet" type="text/css" href="css/main.min.css">
<body>

  <form class="card-body" method="POST" action="http://localhost/loja/finalizarCompra">

     
        <div class="col-md-8 order-md-1">
          <h4 class="mb-3">Confirmação do Endereço</h4>
         

            <div class="mb-3">
              <label for="username">Nome Do Usuário</label>
              <div class="input-group">
                
                <input type="text" class="form-control" id="username" 
                        value="{php} echo $_SESSION['CLI']['cli_nome']{/php}" autocomplete="off" required>
                <div class="invalid-feedback" style="width: 100%;">
                  Your username is required.
                </div>
              </div>
            </div>

            <div class="mb-3">
              <label for="email">Email</label>
              <input type="email" class="form-control text-center" id="email" value="{php} echo $_SESSION['CLI']['cli_email']{/php}" autocomplete="off">
              <div class="invalid-feedback">
                Please enter a valid email address for shipping updates.
              </div>
            </div>

            <div class="mb-3">
              <label for="address">Endereço</label>
              <input type="text" class="form-control" id="address" 
              value="{php} echo $_SESSION['CLI']['cli_cidade'].', '. $_SESSION['CLI']['cli_rua'].', '. $_SESSION['CLI']['cli_numero']{/php}" 
              autocomplete="off" required>
              <div class="invalid-feedback">
                Please enter your shipping address.
              </div>
            </div>

            <div class="row">
              <div class="col-md-5 mb-3">
                <label for="country">País</label>
                <select class="custom-select d-block w-100" id="country" required>
                  
                  <option>Brasil</option>
                </select>
                <div class="invalid-feedback">
                  Please select a valid country.
                </div>
              </div>
              <div class="col-md-4 mb-3">
                <label for="state">Estado</label>
                <select class="custom-select d-block w-100" id="state" >
                  <option value="">{php}echo $_SESSION['CLI']['cli_uf']{/php}</option>
                  
                </select>
                <div class="invalid-feedback">
                  Please provide a valid state.
                </div>
              </div>
          
            </div>
        

         <h4 class="mb-3">PAGAMENTO</h4>

          <div class="d-block my-3">
            <div class="custom-control custom-radio">
              <input id="credit" name="paymentMethod" type="radio" class="custom-control-input" value="Cartao Credito" checked required>
              <label class="custom-control-label" for="credit">Catão de Crédito</label>
            </div>
            <div class="custom-control custom-radio">
              <input id="debit" name="paymentMethod" type="radio" class="custom-control-input" value="Cartao Debito"required>
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
                <input type="text" class="form-control backgound"  id="fCliente"  name="fCliente" value="{php} echo $_SESSION['CLI']['cli_nome']; {/php}" readonly="" autocomplete="off">
            </div>  
            <div class="col-md-6 mb-3">
              <label for="cc-name">Valor Da Compra</label>
                <input type="text" class="form-control backgound" name="fValor" value="R$ {$TOTAL} " readonly="">
            </div>
          </div>
          <div class="row">
            <div class="col-md-6 mb-3">
              <label for="cc-name">Nome no Cartão</label>
              <input type="text" class="form-control" id="cc-name" name="fNomeCartao" placeholder="" autocomplete="off" required>
              <small class="text-muted">Nome Exibido No Cartão</small>
              <div class="invalid-feedback">
                O nome no cartão é obrigatório
              </div>
            </div>
            <div class="col-md-6 mb-3">
              <label for="cc-number">Número do Cartão</label>
              <input type="text" class="form-control" id="cc-number" name="fNumeroCartao" placeholder="" autocomplete="off" required>
              <div class="invalid-feedback">
                É necessário o número do cartão de crédito
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-3 mb-3">
              <label for="cc-expiration">Expiração</label>
              <input type="text" class="form-control" id="cc-expiration" name="fexpiracao" placeholder="" autocomplete="off" required>
              <div class="invalid-feedback">
                Expiration date required
              </div>
            </div>
            <div class="col-md-3 mb-3">
              <label for="cc-expiration">CVV</label>
              <input type="text" class="form-control" id="cc-cvv" name="fcvv" placeholder="" autocomplete="off" required>
              <div class="invalid-feedback">
                Data de vencimento necessária

              </div>
            </div>
          </div>
          <hr class="mb-4">
          <button class="btn btn-primary btn-lg btn-block" type="submit">Comprar</button>
        
      </div>
  
  
</form>
    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
    <script src="../../assets/js/vendor/popper.min.js"></script>
    <script src="../../dist/js/bootstrap.min.js"></script>
    <script src="../../assets/js/vendor/holder.min.js"></script>
    <script>
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
    </script>
  </body>
</html>
