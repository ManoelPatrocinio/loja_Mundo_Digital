<?php
/* Smarty version 3.1.34-dev-7, created on 2020-02-07 19:20:16
  from '/opt/lampp/htdocs/loja/view/editProd.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5e3daa601d9758_68177259',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '84dedd879560138a5c3999d3f0a3b67a02c83894' => 
    array (
      0 => '/opt/lampp/htdocs/loja/view/editProd.tpl',
      1 => 1581099575,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e3daa601d9758_68177259 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="container">
	<div class="card">
	<div class="card-header text-white bg-dark mb-3"> <i class="fas fa-edit"></i>Editar Produto

    </div>

     <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['PRO']->value, 'P');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['P']->value) {
?>
     	<div class="card divisao-item" id="editProd">
				<div class="itens-editar">


		<form  method="POST" action="editarProd">

			<div class="form-row">
				<div class="form-group col-md-1 mt-5 mb-5 ml-5">
	        		<label for="id">ID</label>
	            	<input name ="id" type="text" class="form-control"  value="<?php echo $_smarty_tpl->tpl_vars['P']->value['pro_id'];?>
" readonly="">
	      		</div>

	      		<div class="form-group col-md-4  mt-5 mb-5">
	        		<label for="nome">Nome</label>
	            	<input name ="nome" type="text" class="form-control"  value="<?php echo $_smarty_tpl->tpl_vars['P']->value['pro_nome'];?>
" readonly="">
	      		</div>

		        <div class="form-group col-md-2 mt-5 mb-5">
		           	<label for="estoque">Nº em Estoque</label>
		            <input name ="estoque" type="number" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['P']->value['pro_estoque'];?>
" maxlength="4" size="8">
		      	</div>

		      	<div class="form-group col-md-2 mt-5">
	        		<label for="valor">Valor</label>
	            	<input name ="valor" type="number" class="form-control"  value="<?php echo $_smarty_tpl->tpl_vars['P']->value['pro_valor'];?>
" >
	      		</div>

						<div class="form-group col-md-2 mt-5">
	        		<label for="valor">Produto</label>
	            	  <img name="valor"class="img-fluid" src="<?php echo $_smarty_tpl->tpl_vars['P']->value['pro_img'];?>
" alt="Imagem de exemplo genérica" width="100" height="100" style="border-radius: 5px;">
	      		</div>
			</div>
			<input type="submit" class="btn btn-light hblue  mb-5  ml-5" name="enviar" value="Confirmar Alteração">
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
