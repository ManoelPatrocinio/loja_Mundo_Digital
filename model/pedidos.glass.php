<?php

Class Pedidos extends Conexao{

  	function __construct(){
		parent::__construct();
	}

	function GetPedidos(){
				//query para buscar os produtos de uma categoria especifica
				$query = "SELECT * FROM {$this->prefixo}servicos";

				$this-> ExecuteSQL($query);
				$this->GetLista();
	}

	function GetLista(){
			$i = 1;

			while($lista = $this->ListarDados()):
          	$this->itens[$i] = array(

              
            'cli_id' => $lista['Cli_id'],
            'cli_nome' => $lista['Cli_nome'],
            'cli_cpf' => $lista['Cli_cpf'],
            'cli_email' => $lista['Cli_email'],
            'cli_telefone' => $lista['Cli_telefone'],
            'cli_endereco' => $lista['Cli_endereco'],
            'cli_servico' => $lista['Cli_servico'],
            'cli_horario' => $lista['Cli_horario'],
            'cli_data' => $lista['cli_data']
          );

			    $i++;
			endwhile;

		}
}

?>