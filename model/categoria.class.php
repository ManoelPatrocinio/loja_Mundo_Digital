<?php

  class Categoria extends Conexao{

    private $cat_id, $cat_nome, $cat_slug;
    function __construct(){
      // inicia a classe pai( Conexao);
      parent::__construct();
    }


  function GetCategorias(){

    $query = "SELECT * FROM {$this->prefixo}categorias";

    $this->ExecuteSQL($query);
    $this->GetLista();
  }

   function GetLista(){
    $i = 1;

    while($lista = $this->ListarDados()):
        $this->itens[$i] = array(
            'cat_id' => $lista['cat_id'],
            'cat_nome' => $lista['cat_nome'],
            'cat_slug' => $lista['cat_slug'],
            'cat_link' => Rotas::pag_Produtos().'/'.$lista['cat_id'].'/'.$lista['cat_slug']
        );

        $i++;
    endwhile;

  }
}

 ?>
