<?php


  if(isset($_SESSION['logado'])){
    unset($_SESSION['CLI']['cli_id']);
    unset($_SESSION['CLI']['cli_nome']);
    unset($_SESSION['logado']);
    unset($_SESSION['produto']);
    unset($_SESSION['adm']);
    header('Location: http://localhost/loja/');
  }
?>
