<?php


class Login extends Conexao
{
  private $user, $senha;

  function __construct()
  {
    parent::__construct();
  }
  function GetLogin($user, $senha){
    $this->setUser($user);
    $cript = crypt($senha,'$1$');
    $this->setSenha($cript);



    $query = "SELECT * FROM mw_clientes WHERE cli_email = :email";

    $params = array(
      ':email' => $this->getUser(),
      //':senha' => $this->getSenha(),
    );

    $this->ExecuteSQL($query, $params);

    if($this->TotalDados() > 0){
      $lista = $this->ListarDados();
      unset($_SESSION['CLI']['cli_id']);
      unset($_SESSION['CLI']['cli_nome']);
      unset($_SESSION['logado']);
      unset($_SESSION['login']);
      unset($_SESSION['adm']);
      if(crypt($senha,$lista['cli_pass']) == $lista['cli_pass']){
        $_SESSION['CLI']['cli_id'] = $lista['cli_id'];
        $_SESSION['CLI']['cli_nome'] = $lista['cli_nome'];
        $_SESSION['CLI']['cli_cidade'] = $lista['cli_cidade'];
        $_SESSION['CLI']['cli_rua'] = $lista['cli_endereco'];
        $_SESSION['CLI']['cli_numero'] = $lista['cli_numero'];
        $_SESSION['CLI']['cli_email'] = $lista['cli_email'];
        $_SESSION['CLI']['cli_uf'] = $lista['cli_uf'];

        $_SESSION['logado'] = '1';
        $_SESSION['adm'] = $lista['cli_cargo'];
        header('Location: http://localhost/loja/');
      }else{
        $_SESSION['login'] = '1';
      }

    }else{
      $_SESSION['login'] = '1';
    }


  }

  private function setUser($user){
    $this->user = $user;
  }
  private function setSenha($senha){
    $this->senha = $senha;
  }
  function getUser(){
    return $this->user;
  }
  function getSenha(){
    return $this->senha;
  }
  function getSection(){
    return $_SESSION['CLI']['cli_nome'];
  }
  function getLogado(){
    unset($_SESSION['CLI']['cli_id']);
    unset($_SESSION['CLI']['cli_nome']);
    unset($_SESSION['logado']);
  }
}


















  ?>
