<?php



/**
*
*/
class Clientes extends Conexao
{
  private $cli_nome,
  $cli_cargo,
  $cli_sobrenome,
  $cli_data_nasc,
  $cli_rg,
  $cli_cpf,
  $cli_fone,
  $cli_celular,
  $cli_endereco,
  $cli_numero,
  $cli_bairro,
  $cli_cidade,
  $cli_uf,
  $cli_cep,
  $cli_email,
  $cli_data_cad,
  $cli_hora_cad,
  $cli_senha;

  function __construct()
  {
    parent::__construct();
  }

  function Preparar($cli_nome, $cli_cargo, $cli_sobrenome, $cli_data_nasc, $cli_rg, $cli_cpf, $cli_fone, $cli_celular,
  $cli_endereco, $cli_numero, $cli_bairro, $cli_cidade, $cli_uf, $cli_cep, $cli_email, $cli_data_cad, $cli_hora_cad, $cli_senha){
    $this->setCli_nome($cli_nome);
    $this->setCli_cargo($cli_cargo);
    $this->setCli_sobrenome($cli_sobrenome);
    $this->setCli_data_nasc($cli_data_nasc);
    $this->setCli_rg($cli_rg);
    $this->setCli_cpf($cli_cpf);
    $this->setCli_fone($cli_fone);
    $this->setCli_celular($cli_celular);
    $this->setCli_endereco($cli_endereco);
    $this->setCli_numero($cli_numero);
    $this->setCli_bairro($cli_bairro);
    $this->setCli_cidade($cli_cidade);
    $this->setCli_uf($cli_uf);
    $this->setCli_cep($cli_cep);
    $this->setCli_email($cli_email);
    $this->setCli_data_cad($cli_data_cad);
    $this->setCli_hora_cad($cli_hora_cad);
    $this->setCli_senha($cli_senha);
  }

  function  Inserir(){
    if($this->GetClienteCPF($this->getCli_cpf()) > 0){
      echo '<div class="alert alert-danger"> Este cpf ja existe</div>';
    }
    if($this->GetClienteEmail($this->getCli_email()) > 0){
      echo '<div class="alert alert-danger"> Este email ja existe</div>';
    }
  }



  function GetUsers(){
    //query para buscar os produtos de uma categoria especifica
    $query = "SELECT * FROM mw_clientes";

    $this-> ExecuteSQL($query);
    $this->GetLista();
  }

  function GetUsersID($id){
    //query para buscar os produtos de uma categoria especifica
    $query = "SELECT * FROM mw_clientes WHERE cli_id = $id";

    $this-> ExecuteSQL($query);
    $this->GetLista();
  }

  private function GetLista(){
    $i = 1;

    while($lista = $this->ListarDados()):
        $this->itens[$i] = array(

            'cli_id' => $lista['cli_id'],
            'cli_nome' => $lista['cli_nome'],
            'cli_cpf' => $lista['cli_cpf'],
            'cli_email' => $lista['cli_email'],
            'cli_cidade' =>$lista['cli_cidade'],
            'cli_bairro' =>$lista['cli_bairro'],
            'cli_endereco' => $lista['cli_endereco'],
            'cli_numero' => $lista['cli_numero'],
            'cli_uf' => $lista['cli_uf'],
            'cli_pass' => $lista['cli_pass'],
            'cli_ddd' => $lista['cli_ddd'],
            'cli_celular' => $lista['cli_celular']

        );

        $i++;
    endwhile;

  }


  function getCli_nome(){
    return $this->cli_nome;
  }
  function getCli_cargo(){
    return $this->cli_cargo;
  }
  function getCli_sobrenome(){
    return $this->cli_sobrenome;
  }
  function getCli_data_nasc(){
    return $this->cli_data_nasc;
  }
  function getCli_rg(){
    return $this->cli_rg;
  }
  function getCli_cpf(){
    return $this->cli_cpf;
  }
  function getCli_fone(){
    return $this->cli_fone;
  }
  function getCli_celular(){
    return $this->cli_celular;
  }
  function getCli_endereco(){
    return $this->cli_endereco;
  }
  function getCli_numero(){
    return $this->cli_numero;
  }
  function getCli_bairro(){
    return $this->cli_bairro;
  }
  function getCli_cidade(){
    return $this->cli_cidade;
  }
  function getCli_uf(){
    return $this->cli_uf;
  }
  function getCli_cep(){
    return $this->cli_cep;
  }
  function getCli_email(){
    return $this->cli_email;
  }
  function getCli_data_cad(){
    return $this->cli_data_cad;
  }
  function getCli_hora_cad(){
    return $this->cli_hora_cad;
  }
  function getCli_senha(){
    return $this->cli_senha;
  }
  //setter
  function setCli_nome($cli_nome){
    $this->cli_nome = $cli_nome;
  }
  function setCli_cargo($cli_cargo){
    $this->cli_cargo = $cli_cargo;
  }
  function setCli_sobrenome($cli_sobrenome){
    $this->cli_sobrenome = $cli_sobrenome;
  }
  function setCli_data_nasc($cli_data_nasc){
    $this->cli_data_nasc = $cli_data_nasc;
  }
  function setCli_rg($cli_rg){
    $this->cli_rg = $cli_rg;
  }
  function setCli_cpf($cli_cpf){
    $this->cli_cpf = $cli_cpf;
  }
  function setCli_fone($cli_fone){
    $this->cli_fone = $cli_fone;
  }
  function setCli_celular($cli_celular){
    $this->cli_celular = $cli_celular;
  }
  function setCli_endereco($cli_endereco){
    $this->cli_endereco = $cli_endereco;
  }
  function setCli_numero($cli_numero){
    $this->cli_numero = $cli_numero;
  }
  function setCli_bairro($cli_bairro){
    $this->cli_bairro = $cli_bairro;
  }
  function setCli_cidade($cli_cidade){
    $this->cli_cidade = $cli_cidade;
  }
  function setCli_uf($cli_uf){
    $this->cli_uf = $cli_uf;
  }
  function setCli_cep($cli_cep){
    $this->cli_cep = $cli_cep;
  }
  function setCli_email($cli_email){
    $this->cli_email = $cli_email;
  }
  function setCli_data_cad($cli_data_cad){
    $this->cli_data_cad = $cli_data_cad;
  }
  function setCli_hora_cad($cli_hora_cad){
    $this->cli_hora_cad = $cli_hora_cad;
  }
  function setCli_senha($cli_senha){
    $this->cli_senha = $cli_senha;
  }

  function GetClientes(){
    $query = "SELECT * FROM mw_clientes WHERE cli_id = 6";

    $this-> ExecuteSQL($query);
    $lista = $this->ListarDados();
  }
}

?>
