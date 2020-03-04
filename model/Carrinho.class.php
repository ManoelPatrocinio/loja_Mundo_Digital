<?php

/*


    

*/
  class Carrinho extends Conexao{

    function __construct(){
      parent::__construct();

    }

    public function existe($id){ // veirfica a existencia de sessão

        if(!isset($_SESSION['produto'])){
          $_SESSION['produto'] = array();
        }

        if(!isset($_SESSION['produtos'][$id]) ){ //veirfica a existencia do prod pelo id
            return false;
        }else {
          return true;
        }

      }

      public function verificaAdiciona($id){
        if(!$this->existe($id)){ // caso não exista o produto no carrinho, adiciona
          $_SESSION['produto'][$id] = 1;
          
        }else{
          $_SESSION['produto'][$id] += 1;

        }
      }

      public function prodExiste($id){ // se o produto exite
        if(isset($_SESSION['produto'][$id])){ // caso não exista o produto no carrinho, adiciona
          return true;
        }else{
          return false;
        }
      }

      public function deleteProduto($id){
        if(!$this->prodExiste($id)){ 
          return false;
        }else{
          unset($_SESSION['produto'][$id]);
          return true;
        }
      }

      public function isArray($POST){
        if(is_array($POST)){
            return true;
        }else{
          return false;
        } 

      }

      public function atualizarqtd($post){
        $produtos = new Produtos();
        if($this->isArray($post)){
          foreach ($post as $id => $qtd){
            $id = (int)$id;
            $qtd = (int)$qtd;

            if($qtd !=''){
              
              $_SESSION['produto'][$id] = $qtd;
            }else {
              unset($_SESSION['produto'][$id]);
            }

          }
           return true;  
        }else{
          return false;
        }
      }

      public function qtdProdutos(){
        return count($_SESSION['produto']); 
      }

      function GetCarrinho( array $array = NULL){
      $i = 1;

      while($lista = $array):
            $this->itens[$i] = array(

              'pro_id' => $lista['pro_id'],
              'pro_nome' => $lista['pro_nome'],
              'pro_categoria' => $lista['pro_categoria'],
              'pro_descricao' => $lista['pro_descricao'],
              'pro_peso' => $lista['pro_peso'],
              'pro_valor' => $lista['pro_valor'],
              'pro_altura' => $lista['pro_altura'],
              'pro_largura' => $lista['pro_largura'],
              'pro_comprimento' => $lista['pro_comprimento'],
              'pro_img' => $lista['pro_img'],
              'pro_slug' => $lista['pro_slug'],
              'pro_estoque' => $lista['pro_estoque'],
              'pro_modelo' => $lista['pro_modelo'],
              'pro_referencia' => $lista['pro_referencia'],
              'pro_fabricante' => $lista['pro_fabricante'],
              'pro_ativo' => $lista['pro_ativo'],
              'pro_frete_free' => $lista['pro_frete_free'],
              'cat_id' => $lista['cat_id'],
              'cat_nome' => $lista['cat_nome'],
              'cat_slug' => $lista['cat_slug']
          );

          $i++;
      endwhile;

    }

  }

 ?>
