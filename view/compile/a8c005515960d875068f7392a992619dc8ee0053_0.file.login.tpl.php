<?php
/* Smarty version 3.1.34-dev-7, created on 2020-02-10 15:36:38
  from 'C:\xampp\htdocs\loja\view\login.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5e416a76ee0be5_85907518',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a8c005515960d875068f7392a992619dc8ee0053' => 
    array (
      0 => 'C:\\xampp\\htdocs\\loja\\view\\login.tpl',
      1 => 1581345330,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e416a76ee0be5_85907518 (Smarty_Internal_Template $_smarty_tpl) {
?>
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
                  <?php 
                    if(isset($_REQUEST['valor']) and ($_REQUEST['valor'] == 'enviado')){
                        if(isset($_SESSION['login'])){
                         echo "<p style=\"color: red; text-align:center; font-weight: 800; margin-top: 10px;\";>Login ou senha incorreto!</p>";
                       }
                    }
                    ?>


            </div>

         </form>
        </div>
      </div>
    </div>
<?php }
}
