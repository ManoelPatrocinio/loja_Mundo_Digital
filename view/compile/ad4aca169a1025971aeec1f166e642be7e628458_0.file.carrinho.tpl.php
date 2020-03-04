<?php
/* Smarty version 3.1.34-dev-7, created on 2020-01-23 21:43:53
  from 'C:\xampp\htdocs\loja\view\carrinho.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5e2a0589c41de3_16385221',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ad4aca169a1025971aeec1f166e642be7e628458' => 
    array (
      0 => 'C:\\xampp\\htdocs\\loja\\view\\carrinho.tpl',
      1 => 1579811979,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e2a0589c41de3_16385221 (Smarty_Internal_Template $_smarty_tpl) {
echo '<?php
    ';?>
session_start();
<?php echo '?>';?>

<?php echo '<script'; ?>
 src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"><?php echo '</script'; ?>
>
<!------
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">

---------->

<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">

<div class="container mb-4">
    <div class="row">
        <div class="col-12">
            <div class="table-responsive">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th scope="col"> </th>
                            <th scope="col">Produto</th>
                            <th scope="col">acessível</th>
                            <th scope="col" class="text-center">Quantidade</th>
                            <th scope="col" class="text-right">Preço</th>
                            <th> </th>
                        </tr>
                    </thead>
                    <tbody>
                       
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['PRO']->value, 'P');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['P']->value) {
?>
                        <tr>
                            <td><img src="<?php echo $_smarty_tpl->tpl_vars['P']->value['pro_img'];?>
" width="60px" height="60px" /> </td>
                            <td><?php echo $_smarty_tpl->tpl_vars['P']->value['pro_nome'];?>
</td>
                            <td>Em estoque</td>
                            <td><input type="number" name="Catqtd" id="Catqtd" min="0" max="30" value="1" oninput="calc_subtotal();"/></td>

                            <td class="text-right"> <input id="carpreco" type="text" name="qtd" size="5" value="<?php echo $_smarty_tpl->tpl_vars['P']->value['pro_valor'];?>
" readonly="" /></td>
                            <td class="text-right"><button class="btn btn-sm btn-danger"><i class="fa fa-trash"></i> </button> </td>
                        </tr>
                        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                        <!------
                        <tr>
                            <td><img src="https://dummyimage.com/50x50/55595c/fff" /> </td>
                            <td>Product Name Toto</td>
                            <td>In stock</td>
                            <td><input class="form-control" type="text" value="1" /></td>
                            <td class="text-right">R$33,90</td>
                            <td class="text-right"><button class="btn btn-sm btn-danger"><i class="fa fa-trash"></i> </button> </td>
                        </tr>
                        <tr>
                            <td><img src="https://dummyimage.com/50x50/55595c/fff" /> </td>
                            <td>Product Name Titi</td>
                            <td>In stock</td>
                            <td><input class="form-control" type="text" value="1" /></td>
                            <td class="text-right">R$70,00 </td>
                            <td class="text-right"><button class="btn btn-sm btn-danger"><i class="fa fa-trash"></i> </button> </td>
                        </tr>
                        ---------->
                        <tr>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td>Sub-Total</td>
                            <td class="text-right">R$255,90<?php  echo "sdcjsdjcjasbdcb"?></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td>Shipping</td>
                            <td class="text-right">R$6,90</td>
                        </tr>
                        <tr>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td><strong>Total</strong></td>
                            <td class="text-right"><strong>R$346,90</strong></td>
                        </tr> 
                        
                    </tbody>
                </table>
            </div>
        </div>
        <div class="col mb-2">
            <div class="row">
                <div class="col-sm-12  col-md-6" onclick="location.href='<?php echo $_smarty_tpl->tpl_vars['PRO_INFOR']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['P']->value['pro_id'];?>
/<?php echo $_smarty_tpl->tpl_vars['P']->value['pro_slug'];?>
'">
                    <button class="btn btn-block btn-light">Continue Comprando</button>
                </div>
                <div class="col-sm-12 col-md-6 text-right">
                    <button class="btn btn-lg btn-block btn-success text-uppercase">Finalizar</button>
                </div>
            </div>
        </div>
    </div>
</div>
<?php }
}
