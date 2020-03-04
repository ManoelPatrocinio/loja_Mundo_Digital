<?php
/* Smarty version 3.1.34-dev-7, created on 2020-01-13 21:49:08
  from '/opt/lampp/htdocs/loja/404.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5e1cd7c4da1e53_05470739',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a42ed2690744170c8d7a036e3a545bc85421dc4c' => 
    array (
      0 => '/opt/lampp/htdocs/loja/404.tpl',
      1 => 1578948545,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e1cd7c4da1e53_05470739 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="css/reset.css">
  <style>
  body{
    background-color: #282828;
  }
    .sk-chase {
    width: 40px;
    height: 40px;
    position: absolute;
    top: 60%;
    left: 50%;
    animation: sk-chase 2.5s infinite linear both;
  }

  .sk-chase-dot {
    width: 100%;
    height: 100%;
    position: absolute;
    left: 0;
    top: 0;
    animation: sk-chase-dot 2.0s infinite ease-in-out both;
  }

  .sk-chase-dot:before {
    content: '';
    display: block;
    width: 25%;
    height: 25%;
    background-color: #fff;
    border-radius: 100%;
    animation: sk-chase-dot-before 2.0s infinite ease-in-out both;
  }

  .sk-chase-dot:nth-child(1) { animation-delay: -1.1s; }
  .sk-chase-dot:nth-child(2) { animation-delay: -1.0s; }
  .sk-chase-dot:nth-child(3) { animation-delay: -0.9s; }
  .sk-chase-dot:nth-child(4) { animation-delay: -0.8s; }
  .sk-chase-dot:nth-child(5) { animation-delay: -0.7s; }
  .sk-chase-dot:nth-child(6) { animation-delay: -0.6s; }
  .sk-chase-dot:nth-child(1):before { animation-delay: -1.1s; }
  .sk-chase-dot:nth-child(2):before { animation-delay: -1.0s; }
  .sk-chase-dot:nth-child(3):before { animation-delay: -0.9s; }
  .sk-chase-dot:nth-child(4):before { animation-delay: -0.8s; }
  .sk-chase-dot:nth-child(5):before { animation-delay: -0.7s; }
  .sk-chase-dot:nth-child(6):before { animation-delay: -0.6s; }

  @keyframes sk-chase {
    100% { transform: rotate(360deg); }
  }

  @keyframes sk-chase-dot {
    80%, 100% { transform: rotate(360deg); }
  }

  @keyframes sk-chase-dot-before {
    50% {
      transform: scale(0.4);
    } 100%, 0% {
      transform: scale(1.0);
    }
  }
  .p404{
    font-size: 30vh;
    position: absolute;
    left: 20%;
    font-family: 'Overpass', sans-serif;
    color: #fff;

  }
  .pagnf
  {
    font-size: 50px;
    font-family: 'Overpass', sans-serif;
    position: absolute;
    top: 70%;
    left: 50%;
    transform: translate(-50%,-50%);
    color: #fff;
  }
</style>
  <title>Error</title>
</head>
<body>
    <h2 class="p404"> 404 </h2>
    <div class="sk-chase">
      <div class="sk-chase-dot"></div>
      <div class="sk-chase-dot"></div>
      <div class="sk-chase-dot"></div>
      <div class="sk-chase-dot"></div>
      <div class="sk-chase-dot"></div>
      <div class="sk-chase-dot"></div>
    </div>
    <h2 class="pagnf"> Página não Encontrada</h2>

</body>
</html>
<?php }
}
