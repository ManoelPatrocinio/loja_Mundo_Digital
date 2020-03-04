<?php
/* Smarty version 3.1.34-dev-7, created on 2020-02-10 16:53:59
  from 'C:\xampp\htdocs\loja\view\perfil.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5e417c97186799_40078272',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3a3faf55c7805cbb894e88089ad4d9dbfdef02f8' => 
    array (
      0 => 'C:\\xampp\\htdocs\\loja\\view\\perfil.tpl',
      1 => 1581350032,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e417c97186799_40078272 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="container">
	<div class="card">
	<div class="card-header text-white bg-dark mb-3"><i class="far fa-address-card fa-1x" ></i> Perfil

    </div>
 	
     <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['CLI']->value, 'C');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['C']->value) {
?>
     	<div class="card divisao-item" id="editProd">
     		<div class="itens-editar">
		<form  method="POST" action="perfil">

			<div class="col-md-8 order-md-1">
          


            <div class="mb-3">
              <label for="username">Nome Do Usuário</label>
              <div class="input-group">

                <input type="text" class="form-control text-center" name="nome" id="username"
                        value="<?php echo $_smarty_tpl->tpl_vars['C']->value['cli_nome'];?>
" autocomplete="off" required>
              </div>
            </div>

            <div class="mb-3">
              <label for="email">Email</label>
              <input type="email" class="form-control text-center" name="email" value="<?php echo $_smarty_tpl->tpl_vars['C']->value['cli_email'];?>
" autocomplete="off">

            </div>
              <div class="form-row">
	             <div class="mb-3">
	              <label for="cpf">CPF</label>
	              <input type="text" class="form-control text-center" name="cpf" value="<?php echo $_smarty_tpl->tpl_vars['C']->value['cli_cpf'];?>
" maxlength="14" size="14" autocomplete="off">

	            </div>
	            <div class="mb-3">
	              <label for="pass">Altera Senha de Acesso</label>
	              <input type="text" class="form-control text-center" name="pass" value="" autocomplete="off">

	            </div>
        	</div>

        	<div class="form-row">
        		<input type="number" name="id" value="<?php echo $_smarty_tpl->tpl_vars['C']->value['cli_id'];?>
" style="visibility: hidden;" readonly="">
        	</div>	
            <div class="form-row">
	             <div class="form-group col-md-2">
	              <label for="ddd">DDD</label>
	              <input type="text" class="form-control text-center" name="ddd" value="<?php echo $_smarty_tpl->tpl_vars['C']->value['cli_ddd'];?>
" maxlength="2" size="2" autocomplete="off" required="">

	            </div>
	            <div class="mb-3">
	              <label for="celular">Celular</label>
	              <input type="text" class="form-control text-center" name="celular" maxlength="9" size="9"value="<?php echo $_smarty_tpl->tpl_vars['C']->value['cli_celular'];?>
" autocomplete="off" required="">

	            </div>
        	</div>
            <div class="form-row">
            	<div class="form-group col-md-2">
	        		<label for="uf">UF</label>
	            	<input name ="uf" type="text" class="form-control"  maxlength="2" size="2"value="<?php echo $_smarty_tpl->tpl_vars['C']->value['cli_uf'];?>
" >
	      		</div>
             	 <div class="form-group col-md-2">
	        		<label for="cidade">Cidade</label>
	            	<input name ="cidade" type="text" class="form-control" maxlength="20" size="20" value="<?php echo $_smarty_tpl->tpl_vars['C']->value['cli_cidade'];?>
" >
	      		</div>

	      		<div class="form-group col-md-2">
	        		<label for="bairro">Bairro</label>
	            	<input name ="bairro" type="text" class="form-control" maxlength="14" size="14" value="<?php echo $_smarty_tpl->tpl_vars['C']->value['cli_bairro'];?>
" required="" >
	      		</div>
	      		<div class="form-group col-md-2">
	        		<label for="rua">Rua</label>
	            	<input name ="rua" type="text" class="form-control" maxlength="25" size="25" value="<?php echo $_smarty_tpl->tpl_vars['C']->value['cli_endereco'];?>
" >
	      		</div>
	      		<div class="form-group col-md-2">
	        		<label for="numero">Número</label>
	            	<input name ="numero" type="text" class="form-control" maxlength="5" size="5"  value="<?php echo $_smarty_tpl->tpl_vars['C']->value['cli_numero'];?>
" >
	      		</div>
            </div>



            </div>

			<input type="submit" class="btn btn-light hblue" name="Atualizar" value="Confirmar Alteração">
		</form>
		</div>
		</div>
	<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
	</div>
</div>
<?php }
}
