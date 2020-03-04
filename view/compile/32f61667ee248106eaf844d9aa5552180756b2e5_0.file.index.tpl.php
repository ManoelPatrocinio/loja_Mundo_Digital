<?php
/* Smarty version 3.1.34-dev-7, created on 2020-01-12 18:02:06
  from '/home/werioliveira/IFBA/WEB/loja/loja/view/index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5e1b7b3ea9ce65_03853234',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '32f61667ee248106eaf844d9aa5552180756b2e5' => 
    array (
      0 => '/home/werioliveira/IFBA/WEB/loja/loja/view/index.tpl',
      1 => 1578859286,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e1b7b3ea9ce65_03853234 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title><?php echo $_smarty_tpl->tpl_vars['SITE_NOME']->value;?>
</title>

  <!-- Bootstrap core CSS -->
  <link href="<?php echo $_smarty_tpl->tpl_vars['GET_TEMA']->value;?>
/tema/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="<?php echo $_smarty_tpl->tpl_vars['GET_TEMA']->value;?>
/tema/css/shop-homepage.css" rel="stylesheet">
  <link href="<?php echo $_smarty_tpl->tpl_vars['GET_TEMA']->value;?>
/css/contato.css" rel="stylesheet">

</head>

<body>

  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div class="container">
        <a class="navbar-brand" href="<?php echo $_smarty_tpl->tpl_vars['GET_HOME']->value;?>
">
          <img src="midias/logo.png" width="30" height="30" class="d-inline-block align-top" alt="">
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
          <li class="nav-item">
            <a class="nav-link" href="#">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Services</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?php echo $_smarty_tpl->tpl_vars['GET_CONTATO']->value;?>
">Contact</a>
          </li>
          <li class="nav-item" id="prod">
            <a class="nav-link" href="#">Produtos</a>


            <ul class="submenu-nav">
              <li class="item-submenu" id="capasi"><a href="#">Capas</a>
                <div class="borda"></div>
                <ul class="capas-submenu">
                  <li class="submenu-capas"><a href="">Couro</a></li>
                  <li class="submenu-capas"><a href="<?php echo $_smarty_tpl->tpl_vars['GET_PRODUTOS']->value;?>
">Silicone</a></li>
                  <li class="submenu-capas"><a href="">Vidro</a></li>
                </ul>
              </li>
              <li class="item-submenu"><a href="#">Peliculas</a></li>
              <li class="item-submenu"><a href="#">Fones</a></li>
              <li class="item-submenu"><a href="#">Celulares</a></li>
            </ul>

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
              <img class="d-block w-100" src="midias/slide.jpg" alt="Primeiro Slide">
            </div>
            <div class="carousel-item">
              <img class="d-block w-100" src="midias/slide.jpg" alt="Segundo Slide">
            </div>
            <div class="carousel-item">
              <img class="d-block w-100" src="midias/slide.jpg" alt="Terceiro Slide">
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

             Rotas:: get_Pagina(); 

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
/tema/vendor/jquery/jquery.min.js"><?php echo '</script'; ?>
>
  <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['GET_TEMA']->value;?>
/tema/vendor/bootstrap/js/bootstrap.bundle.min.js"><?php echo '</script'; ?>
>

</body>

</html>
<?php }
}
