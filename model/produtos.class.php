
<?php

	Class Produtos extends Conexao{

	  function __construct(){
			parent::__construct();
		}

		function GetProdutos(){
			//query para buscar os produtos de uma categoria especifica
			$query = "SELECT * FROM {$this->prefixo}produtos p INNER JOIN
			{$this->prefixo}categorias c ON  p.pro_categoria = c.cat_id";

			// .= CONCATENAÇÃO DAS QUERY
			$query .= " ORDER BY pro_id DESC";
			$this-> ExecuteSQL($query);
			$this->GetLista();
		}

    	function GetProdutosID($id){
			//query para buscar os produtos de uma categoria especifica
			$query = "SELECT * FROM {$this->prefixo}produtos p INNER JOIN
			{$this->prefixo}categorias c ON  p.pro_categoria = c.cat_id";

				// .= CONCATENAÇÃO DAS QUERY
	    	 $query .= " AND pro_id = :id";
				$params = array(':id'=>(int)$id);
				$this-> ExecuteSQL($query, $params);
				$this->GetLista();
		}

		function GetProdutosCatID($id){
			//query para buscar os produtos de uma categoria especifica
			$query = "SELECT * FROM {$this->prefixo}produtos p INNER JOIN
			{$this->prefixo}categorias c ON  p.pro_categoria = c.cat_id";

			// .= CONCATENAÇÃO DAS QUERY
			$query .= " AND pro_categoria = :id";

			$params = array(':id'=>(int)$id);
			$this-> ExecuteSQL($query,$params);
			$this->GetLista();
		}

		function updateqtd($id,$qtd){
			//query para buscar os produtos de uma categoria especifica
			$query = "UPDATE mw_produtos SET pro_estoque = pro_estoque - {$qtd} WHERE pro_id = {$id} ";

			$this-> ExecuteSQL($query);
			
		}

		// exibição dos produtos vindos em um array s
		function GetLista(){
			$i = 1;

			while($lista = $this->ListarDados()):
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
