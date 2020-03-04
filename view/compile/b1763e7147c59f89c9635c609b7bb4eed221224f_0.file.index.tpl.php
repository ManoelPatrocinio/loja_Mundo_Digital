<?php
/* Smarty version 3.1.34-dev-7, created on 2020-02-07 18:16:45
  from '/opt/lampp/htdocs/loja/view/index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5e3d9b7dbfe522_37455716',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b1763e7147c59f89c9635c609b7bb4eed221224f' => 
    array (
      0 => '/opt/lampp/htdocs/loja/view/index.tpl',
      1 => 1581095761,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e3d9b7dbfe522_37455716 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="Manoel P. & Weri O." content="">
  


  <title><?php echo $_smarty_tpl->tpl_vars['SITE_NOME']->value;?>
</title>

  <!-- Bootstrap core CSS  -->
  <link href="<?php echo $_smarty_tpl->tpl_vars['GET_TEMA']->value;?>
/tema/vendor/bootstrap/css/bootstrap.css" rel="stylesheet">
  <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['GET_TEMA']->value;?>
/tema/vendor/fontawesome/css/fontawesome.min.css">
  <link href="<?php echo $_smarty_tpl->tpl_vars['GET_TEMA']->value;?>
/tema/vendor/gfonts/fonts.css" rel="stylesheet">


  <!-- Custom styles for this template -->
  <link href="<?php echo $_smarty_tpl->tpl_vars['GET_TEMA']->value;?>
/tema/css/shop-homepage.css" rel="stylesheet">
  <link href="<?php echo $_smarty_tpl->tpl_vars['GET_TEMA']->value;?>
/tema/css/animate.css" rel="stylesheet">
  <link href="<?php echo $_smarty_tpl->tpl_vars['GET_TEMA']->value;?>
/css/contato.css" rel="stylesheet">
  <link href="<?php echo $_smarty_tpl->tpl_vars['GET_TEMA']->value;?>
/css/carrinho.css" rel="stylesheet">

</head>

<body>

  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div class="container">
        <a class="navbar-brand" href="<?php echo $_smarty_tpl->tpl_vars['GET_HOME']->value;?>
">
          <img src="<?php echo $_smarty_tpl->tpl_vars['GET_IMAGEM']->value;?>
logo1.png" width="30" height="30" class="d-inline-block align-top" alt="">
          Mundo Digital
        </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item active">
            <a class="nav-link" href="<?php echo $_smarty_tpl->tpl_vars['GET_HOME']->value;?>
">Home
              <span class="sr-only">(current)</span>
            </a>
          </li>
          <li class="nav-item dropdown">

            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <?php 
               if(isset($_SESSION['logado'])){
                echo $_SESSION['CLI']['cli_nome'];
              }else{
                echo 'Entrar';
              }
              ?>
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                <?php 
                   if(empty($_SESSION['logado'])){
                    echo '<a class="dropdown-item" href="http://localhost/loja/login">Login</a>';
                  }
                  ?>

                <?php  if(isset($_SESSION['logado']) && isset($_SESSION['adm']) == '9'){
                  echo '<a class="dropdown-item" href="http://localhost/loja/gerencia">Gerencia</a>';
                }
                ?>

          <?php  if(isset($_SESSION['logado'])){
              echo '<a class="dropdown-item" href="http://localhost/loja/logoff">Sair</a>';
          }?>

            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?php echo $_smarty_tpl->tpl_vars['GET_SERVICOS']->value;?>
">Serviços</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?php echo $_smarty_tpl->tpl_vars['GET_CONTATO']->value;?>
">Contact</a>
          </li>
          <li class="nav-item" id="prod">
            <a class="nav-link" href="#">Produtos</a>
            <ul class="submenu-nav">
              <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['CATEGORIAS']->value, 'C');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['C']->value) {
?>
                <li class="item-submenu" id="capasi"><a href="<?php echo $_smarty_tpl->tpl_vars['C']->value['cat_link'];?>
"><?php echo $_smarty_tpl->tpl_vars['C']->value['cat_nome'];?>
</a>

                </li>
              <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
              <li class="item-submenu" id="capasi"><a href="<?php echo $_smarty_tpl->tpl_vars['GET_PRODUTOS']->value;?>
">Todos</a></li>
            </ul>

          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?php echo $_smarty_tpl->tpl_vars['GET_CARRINHO']->value;?>
">Carrinho</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?php echo $_smarty_tpl->tpl_vars['GET_PERFIL']->value;?>
">Perfil</a>
          </li>
        </ul>


      </div>
    </div>
  </nav>

  <!-- Page Content -->
  <div class="container">

    <div class="row">


      <!-- /.col-lg-3 -->

      <div class="col-lg-9">

        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
          <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
          </ol>
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img class="d-block w-100" src="<?php echo $_smarty_tpl->tpl_vars['GET_IMAGEM']->value;?>
slide.jpg" alt="Primeiro Slide">
            </div>
            <div class="carousel-item">
              <img class="d-block w-100" src="<?php echo $_smarty_tpl->tpl_vars['GET_IMAGEM']->value;?>
slide.jpg" alt="Segundo Slide">
            </div>
            <div class="carousel-item">
              <img class="d-block w-100" src="<?php echo $_smarty_tpl->tpl_vars['GET_IMAGEM']->value;?>
slide.jpg" alt="Terceiro Slide">
            </div>
          </div>
          <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Anterior</span>
          </a>
          <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Próximo</span>
          </a>
        </div>


      </div>
      <!-- /.col-lg-9 -->

    </div>
    <!-- /.row -->

  </div>

  <!-- corpo de conteúdo -->
  <div class="container">

    <div class="row" id="corpo">


        <?php 

            if(Rotas:: get_Pagina() == 1){

            }else{
              header('Location:404.php');
            }


        ?>
    </div>

  </div>

  <footer class="py-5 bg-dark">
    <div class="container">
      <p class="m-0 text-center text-white">Copyright &copy; Os Criminosos 2019</p>
    </div>

  </footer>

  <!-- Bootstrap core JavaScript -->
  <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['GET_TEMA']->value;?>
/tema/vendor/jquery/jquery.js"><?php echo '</script'; ?>
>
  <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['GET_TEMA']->value;?>
/tema/vendor/bootstrap/js/bootstrap.bundle.min.js"><?php echo '</script'; ?>
>
  <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['GET_TEMA']->value;?>
/tema/vendor/fontawesome/js/all.js"><?php echo '</script'; ?>
>
  <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['GET_TEMA']->value;?>
/js/funcoes.js"><?php echo '</script'; ?>
>
</body>

</html>
<?php }
}
