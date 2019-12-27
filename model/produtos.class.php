
<?php
	
	Class Produtos extends Conexao{
		
		function __construct(){
			parent::__construct();
		}

		function GetProdutos(){
			//query para buscar os produtos de uma categoria especifica
			$query = "select * from {$this->prefixo}produtos p inner join {$this->prefixo}categoria c on p.pro_categoria = c.cat_id";

			// .= CONCATENAÇÃO DAS QUERY
			//$query .= "ORDER BY pro_id DESC";
			$this-> ExecuteSQL($query);
			$this->GetLista();
		}

		// exibição dos produtos vindos em um array s
		private function GetLista(){
			$i = 1;			
		
			while($lista = $this->ListarDados()):
				
				$i++;	
			endwhile;
			
		}
	}

?>