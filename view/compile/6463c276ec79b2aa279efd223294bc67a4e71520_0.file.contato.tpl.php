<?php
/* Smarty version 3.1.34-dev-7, created on 2020-02-06 17:13:36
  from '/opt/lampp/htdocs/loja/view/contato.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5e3c3b30df2e80_60756102',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6463c276ec79b2aa279efd223294bc67a4e71520' => 
    array (
      0 => '/opt/lampp/htdocs/loja/view/contato.tpl',
      1 => 1581005613,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e3c3b30df2e80_60756102 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!--
   formatação original da pagina.
   bug: está sobrecarregando o tema da pagina inicial
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">

-->


<!------ Include the above in your HEAD tag ---------->

<div class="container">
    <div class="row">
        <div class="col">
            <div class="card">
                <div class="card-header bg-primary text-white"><i class="fa fa-envelope"></i> Contato
                </div>
                <div class="card-body">
                    <form id="formContato" method="GET" action="envio">
                        <div class="form-group">
                            <label for="name">Nome</label>
                            <input type="text" class="form-control" id="name" name="nome" aria-describedby="emailHelp" placeholder="Nome completo" required>
                        </div>
                        <div class="form-group">
                            <label for="email">Email </label>
                            <input type="email" class="form-control" id="email" name="email"aria-describedby="emailHelp" placeholder="Seu email" required>
                            <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                        </div>
                        <div class="form-group">
                            <label for="message">Mensagem</label>
                            <textarea class="form-control" id="message" name="mensagem" rows="6" required></textarea>
                        </div>
                        <div class="mx-auto">
                        <button type="submit" class="btn btn-primary text-right">ENVIAR</button></div>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-12 col-sm-4">
            <div class="card bg-grey mb-3">
                <div class="card-header bg-success text-white text-uppercase"><i class="fa fa-home"></i> Endereço</div>
                <div class="card-body">
                    <p>AV. Adolfo Moitinho </p>
                    <p>44900-000</p>
                    <p>Irecê-Bahia</p>
                    <p>Email : M_Develope@gmail.com</p>
                    <p>Tel. 6662-2317</p>

                </div>

            </div>
        </div>
    </div>
</div>
<?php }
}
