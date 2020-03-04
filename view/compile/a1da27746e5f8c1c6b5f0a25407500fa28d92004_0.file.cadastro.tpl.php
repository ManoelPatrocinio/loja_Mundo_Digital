<?php
/* Smarty version 3.1.34-dev-7, created on 2020-02-10 15:36:44
  from 'C:\xampp\htdocs\loja\view\cadastro.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5e416a7ceed9f8_12729909',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a1da27746e5f8c1c6b5f0a25407500fa28d92004' => 
    array (
      0 => 'C:\\xampp\\htdocs\\loja\\view\\cadastro.tpl',
      1 => 1581345385,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e416a7ceed9f8_12729909 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="col">
    <div class="card">
        <div class="card-header text-white bg-dark mb-3">
          <form action="registro?valor=enviado" method="POST">
            <div class="clogin">
              <h2 class="loginh2">Sign Up</h2>
              <div class="alinput">
              <input type="text" class="input-fullname" placeholder="Full Name" name="nome" autocomplete="off">
              <input type="email" class="input-email" placeholder="Email" name="email" autocomplete="off">
              <input type="password" class="input-password" placeholder="Password" name="senha">
              <input type="text" class="form-control cpf-mask input-cpf" placeholder="CPF Ex.: 000.000.000-00" name="cpf" maxlength="11" autocomplete="off">
            </div>
            <div class="inputs50">
              <select name="estado" class="input-estado">
                <option value="AC">ACRE-AC</option>
                <option value="AL">ALAGOAS-AL</option>
                <option value="AP">AMAPÁ-AP</option>
                <option value="AM">AMAZONAS-AM</option>
                <option value="BA">BAHIA-BA</option>
                <option value="CE">CEARÁ-CE</option>
                <option value="DF">DISTRITO-DF</option>
                <option value="ES">ESP.SANTO-ES</option>
                <option value="GO">GOIÁS-GO</option>
                <option value="MA">MARANHÃO-MA</option>
                <option value="MT">MATO GROSSO-MT</option>
                <option value="MS">M.GROSSO DO SUL-MS</option>
                <option value="MG">MINAS GERAIS-MG</option>
                <option value="PA">PARÁ-PA</option>
                <option value="PB">PARAÍBA-PB</option>
                <option value="PR">PARANÁ-PR</option>
                <option value="PE">PERNAMBUCO-PE</option>
                <option value="PI">PIAUÍ-PI</option>
                <option value="RJ">RIO D.JANEIRO-RJ</option>
                <option value="RN">RIO G.NORTE-RN</option>
                <option value="RS">RIO G.SUL-RS</option>
                <option value="RO">RONDÔNIA-RO</option>
                <option value="RR">RORAIMA-RR</option>
                <option value="SC">SANTA CATARINA-SC</option>
                <option value="SP">SÃO PAULO-SP</option>
                <option value="SE">SERGIPE-SE</option>
                <option value="TO">TOCANTINS-TO</option>
              </select>
              <input type="text" class="input-cidade" placeholder="Cidade" name="cidade">
              <input type="text" class="input-rua" placeholder="Rua" name="rua">
              <input type="number" class="input-numero" placeholder="Numero" name="numero">
            </div>
            <div class="login-btn">
              <input type="submit" class="btn-login" value="Sign up"></br>
            </div>
            <div class="login-link">
              <a class="sign" id="signup" href="login"> Tem conta? Entre </a>
            </div>
            <?php 
              if(isset($_REQUEST['valor']) and ($_REQUEST['valor'] == 'enviado')){
                  if($_SESSION['registred'] == 0){
                   echo "<p style=\"color: red; text-align:center; font-weight: 800; margin-top: 10px;\";>Erro ao Cadastrar!</p>";
                 }else if($_SESSION['registred'] == 1){
                   echo "<p style=\"color: green; text-align:center; font-weight: 800; margin-top: 10px;\";>Cadastro realizado com sucesso!</p>";
                 }
              }
              ?>
            </div>
            </form>
         </form>
        </div>
      </div>
    </div>
<?php }
}
