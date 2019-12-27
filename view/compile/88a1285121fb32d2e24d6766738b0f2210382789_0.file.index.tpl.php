<?php
/* Smarty version 3.1.34-dev-7, created on 2019-12-26 17:00:05
  from 'C:\xampp\htdocs\loja\view\index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5e04d90538cdf1_54323897',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '88a1285121fb32d2e24d6766738b0f2210382789' => 
    array (
      0 => 'C:\\xampp\\htdocs\\loja\\view\\index.tpl',
      1 => 1577376001,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e04d90538cdf1_54323897 (Smarty_Internal_Template $_smarty_tpl) {
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
  <nav class="navbar navbar-expand-lg font-white bg-dark fixed-top">
    <div class="container">
      <a id="logo" class="navbar-brand" href="<?php echo $_smarty_tpl->tpl_vars['GET_HOME']->value;?>
">MUNDO DIGITAL</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="true" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item active">
            <a class="nav-link" href="<?php echo $_smarty_tpl->tpl_vars['GET_HOME']->value;?>
">Início
              <span class="sr-only">(current)</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Serviços</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?php echo $_smarty_tpl->tpl_vars['GET_CONTATO']->value;?>
">Contatos</a>
          </li>
          
          <li class="nav-item">
            <a class="nav-link" href="#">Sobre</a>
          </li>
           <li class="nav-item">
            <a class="nav-link" href="#">Login</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- barra de categorias -->
    <div class="categoria">
      <div id="categoria">
        <ul class="MenuCategoria">
          <li id="catItem1" class="ItemCategoria">  <a href="#">Smartphones </a> </li>
          
          <li id="catItem2" class="ItemCategoria">  <a >Acessórios</a> 
            <ul class="sub_menu" id="Acessorios">
               <li class="sub_item"><a href="<?php echo $_smarty_tpl->tpl_vars['GET_PRODUTOS']->value;?>
">Capas <a/></li>
               <li class="sub_item">Películas</li>
               <li class="sub_item">Fones</li>
            </ul>
          </li>
          <li id="catItem3" class="ItemCategoria">  <a href="#">Manuteção</a> </li>
          <li id="catItem3" class="ItemCategoria">  <a href="#">Carrinho</a>  </li>
        </ul>
      </div>       
    </div>

     <div id="carouselExampleIndicators" class="carousel slide my-4" data-ride="carousel">
          <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators -slide-to="0" class="acive"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
          </ol>
          <div class="carousel-inner" role="listbox">
            <div class="carousel-item active">
              <img class="d-block img-fluid" src="midias/slide1.jpg" alt="First slide">
            </div>
            <div class="carousel-item">
              <img class="d-block img-fluid" src="midias/slide2.jpg" alt="Second slide">
            </div>
            <div class="carousel-item">
              <img class="d-block img-fluid" src="midias/slide1.jpg" alt="Third slide">
            </div>
          </div>
          <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
        </div>
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
