<?php
/* Smarty version 3.1.34-dev-7, created on 2020-01-12 18:07:14
  from '/home/werioliveira/IFBA/WEB/loja/view/contato.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5e1b7c72c55322_36259343',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9eda9b134b08dd9d4046de0ce7090c1fb3f3cf08' => 
    array (
      0 => '/home/werioliveira/IFBA/WEB/loja/view/contato.tpl',
      1 => 1578859286,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e1b7c72c55322_36259343 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!-- 
   formatação original da pagina.
   bug: está sobrecarregando o tema da pagina inicial
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">

-->    

<?php echo '<script'; ?>
 src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"><?php echo '</script'; ?>
>
<!------ Include the above in your HEAD tag ---------->

<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">


<div class="container">
    <div class="row">
        <div class="col">
            <div class="card">
                <div class="card-header bg-primary text-white"><i class="fa fa-envelope"></i> Contact us.
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
                    <p>Bahia</p>
                    <p>Email : M_Develope@gmail.com</p>
                    <p>Tel. 6662-2317</p>

                </div>

            </div>
        </div>
    </div>
</div>

<?php }
}
