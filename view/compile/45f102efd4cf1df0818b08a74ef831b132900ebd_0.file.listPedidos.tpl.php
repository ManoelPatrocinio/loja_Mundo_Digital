<?php
/* Smarty version 3.1.34-dev-7, created on 2020-02-10 15:17:48
  from 'C:\xampp\htdocs\loja\view\listPedidos.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5e41660c042251_80738219',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '45f102efd4cf1df0818b08a74ef831b132900ebd' => 
    array (
      0 => 'C:\\xampp\\htdocs\\loja\\view\\listPedidos.tpl',
      1 => 1581343214,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e41660c042251_80738219 (Smarty_Internal_Template $_smarty_tpl) {
?>
<body>
    
    <div class="col">
        <div class="card">
            <div class="card-header text-white bg-dark mb-3"><i class="fa fa-calendar-plus-o" aria-hidden="true"></i> Serviços Solicitados

            </div>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['PRE']->value, 'P');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['P']->value) {
?>
            <div class="card-body">
                
                    <div class="form-group">
                        <label for="name">Nome</label>
                        <input type="text" class="form-nome form-control" id="name" name="nome" aria-describedby="emailHelp" value="<?php echo $_smarty_tpl->tpl_vars['P']->value['cli_nome'];?>
">
                    </div>
                    <div class="form-group">
                        <label for="email">Email </label>
                        <input type="text" class="form-email form-control" id="email" name="email"aria-describedby="emailHelp" value="<?php echo $_smarty_tpl->tpl_vars['P']->value['cli_email'];?>
" required>
                    </div>
                    <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="form-telefone">Telefone</label>
                        <input type="text" class="form-telefone form-control" maxlength="14" size="14" name="telefone" value="<?php echo $_smarty_tpl->tpl_vars['P']->value['cli_telefone'];?>
" onkeydown="javascript: fMasc( this, mTel );">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="form-telefone">CPF</label>
                        <input type="text" class="form-cpf form-control" maxlength="14" size="14" id="cpf" name="cpf" value="<?php echo $_smarty_tpl->tpl_vars['P']->value['cli_cpf'];?>
" onkeydown="javascript: fMasc( this, mCPF );">
                    </div>
                  </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="form-endereco">Endereço</label>
                            <input type="text" class="form-endereco form-control" name="endereco" value="<?php echo $_smarty_tpl->tpl_vars['P']->value['cli_endereco'];?>
">
                        </div>

                        <div class="form-group  col-md-6">
                        <label for="form-endereco">Serviço(s)</label>
                        <input type="text" class="form-endereco form-control" name="servico" value="<?php echo $_smarty_tpl->tpl_vars['P']->value['cli_servico'];?>
">    
  
                    </div>
                    </div>
                    <div class="form-row">
                    <div class="form-group  col-md-6">
                        <label for="form-endereco">Data Solicitada</label>
                        <input type="text" class="form-endereco form-control" name="servico" value="<?php echo $_smarty_tpl->tpl_vars['P']->value['cli_data'];?>
">    
  
                    </div>
                    <div class="form-group form-horario col-md-6">
                        <label for="form-horario">Horário</label>
                        <input type="text" class=" form-control" name="horaio" value="<?php echo $_smarty_tpl->tpl_vars['P']->value['cli_horario'];?>
">  
                    </div>
                  </div>
               
            </div>
             <div class="card-header text-white bg-dark mb-3"> 

            </div>
            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </div>
    </div>
    
</body>
<?php }
}
