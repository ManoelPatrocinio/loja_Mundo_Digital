
<div class="col">
    <div class="card">
        <div class="card-header text-white bg-dark mb-3">
          <form action="login?valor=enviado" method="POST">
            <div class="clogin">
                <h2 class="loginh2">Sign In</h2>
                <div class="alinput">
                  <input type="email" class="input-email" placeholder="Email" name="email" autocomplete="off">
                  <input type="password" class="input-password" placeholder="Senha" name="senha">
                </div>
                <div class="login-btn">
                    <input type="submit" class="btn-login" value="Entrar">
                </div>
                <div class="login-link">
                    <a class="sign" id="signin" href="registro"> Não tem conta? Registre-se </a>
                </div>
                  {php}
                    if(isset($_REQUEST['valor']) and ($_REQUEST['valor'] == 'enviado')){
                        if(isset($_SESSION['login'])){
                         echo "<p style=\"color: red; text-align:center; font-weight: 800; margin-top: 10px;\";>Login ou senha incorreto!</p>";
                       }
                    }
                    {/php}


            </div>

         </form>
        </div>
      </div>
    </div>
