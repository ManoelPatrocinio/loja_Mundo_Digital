
<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="Manoel P. & Weri O." content="">
  


  <title>{$SITE_NOME}</title>

  <!-- Bootstrap core CSS  -->
  <link href="{$GET_TEMA}/tema/vendor/bootstrap/css/bootstrap.css" rel="stylesheet">
  <link rel="stylesheet" href="{$GET_TEMA}/tema/vendor/fontawesome/css/fontawesome.min.css">
  <link href="{$GET_TEMA}/tema/vendor/gfonts/fonts.css" rel="stylesheet">


  <!-- Custom styles for this template -->
  <link href="{$GET_TEMA}/tema/css/shop-homepage.css" rel="stylesheet">
  <link href="{$GET_TEMA}/tema/css/animate.css" rel="stylesheet">
  <link href="{$GET_TEMA}/css/contato.css" rel="stylesheet">
  <link href="{$GET_TEMA}/css/carrinho.css" rel="stylesheet">

</head>

<body>

  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div class="container">
        <a class="navbar-brand" href="{$GET_HOME}">
          <img src="{$GET_IMAGEM}logo1.png" width="30" height="30" class="d-inline-block align-top" alt="">
          Mundo Digital
        </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item active">
            <a class="nav-link" href="{$GET_HOME}">Home
              <span class="sr-only">(current)</span>
            </a>
          </li>
          <li class="nav-item dropdown">

            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            {php}
               if(isset($_SESSION['logado'])){
                echo $_SESSION['CLI']['cli_nome'];
              }else{
                echo 'Entrar';
              }
              {/php}
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                {php}
                   if(empty($_SESSION['logado'])){
                    echo '<a class="dropdown-item" href="http://localhost/loja/login">Login</a>';
                  }
                  {/php}

                {php} if(isset($_SESSION['logado']) && isset($_SESSION['adm']) == '9'){
                  echo '<a class="dropdown-item" href="http://localhost/loja/gerencia">Gerencia</a>';
                }
                {/php}

          {php} if(isset($_SESSION['logado'])){
              echo '<a class="dropdown-item" href="http://localhost/loja/logoff">Sair</a>';
          }{/php}

            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{$GET_SERVICOS}">Serviços</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{$GET_CONTATO}">Contact</a>
          </li>
          <li class="nav-item" id="prod">
            <a class="nav-link" href="#">Produtos</a>
            <ul class="submenu-nav">
              {foreach from=$CATEGORIAS item= C}
                <li class="item-submenu" id="capasi"><a href="{$C.cat_link}">{$C.cat_nome}</a>

                </li>
              {/foreach}
              <li class="item-submenu" id="capasi"><a href="{$GET_PRODUTOS}">Todos</a></li>
            </ul>

          </li>
          <li class="nav-item">
            <a class="nav-link" href="{$GET_CARRINHO}">Carrinho</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{$GET_PERFIL}">Perfil</a>
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
              <img class="d-block w-100" src="{$GET_IMAGEM}slide.jpg" alt="Primeiro Slide">
            </div>
            <div class="carousel-item">
              <img class="d-block w-100" src="{$GET_IMAGEM}slide.jpg" alt="Segundo Slide">
            </div>
            <div class="carousel-item">
              <img class="d-block w-100" src="{$GET_IMAGEM}slide.jpg" alt="Terceiro Slide">
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


        {php}

            if(Rotas:: get_Pagina() == 1){

            }else{
              header('Location:404.php');
            }


        {/php}
    </div>

  </div>

  <footer class="py-5 bg-dark">
    <div class="container">
      <p class="m-0 text-center text-white">Copyright &copy; Os Criminosos 2019</p>
    </div>

  </footer>

  <!-- Bootstrap core JavaScript -->
  <script src="{$GET_TEMA}/tema/vendor/jquery/jquery.js"></script>
  <script src="{$GET_TEMA}/tema/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="{$GET_TEMA}/tema/vendor/fontawesome/js/all.js"></script>
  <script src="{$GET_TEMA}/js/funcoes.js"></script>
</body>

</html>
