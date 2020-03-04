<?php
  //session_start();

  $smarty = new Template();

  $login = new Login();

    $user = filter_input(INPUT_POST, 'email',FILTER_SANITIZE_STRING);
    $senha = filter_input(INPUT_POST, 'senha',FILTER_SANITIZE_STRING);

    $login->GetLogin($user,$senha);


    $smarty->display('login.tpl');




 ?>
