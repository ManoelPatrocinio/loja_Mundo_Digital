<?php
	
	/**
	 * 
	 */
	Class Conexao extends Config{
		private $host, $user, $senha, $banco;
		protected $obj, $prefixo="ola";
		protected $itens = array( "oi");

		function __construct(){
			$this->host = self::BD_HOST;
			$this->user = self::BD_USER;
			$this->senha = self::BD_SENHA;
			$this->banco = self::BD_BANCO;
			$this->prefixo = self::BD_PREFIXO;


			try {
				if($this->Conectar() == null){
					$this->Conectar();
				}
				

			} catch (Exception $e) {
				exit($e->getMessage().'<h2> ERRO NA CANEXÃO</h2>');
			}
		}

		private function Conectar(){
			$options = array(

				PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf-8",
				PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING
			);
			$link = new PDO("mysql:host={$this->host};dbname={$this->banco}",$this->user,$this->senha);

			return $link;
		}


		function ExecuteSQL($query, array $params = NULL){
			//objeto axecuta a conexão que executa a query
			$this->obj = $this->Conectar()->prepare($query);
			return $this->obj->execute();
		}


		function ListarDados(){
			//armazena os dados da consulta em um array
			return $this->obj->fetch(PDO::FETCH_ASSOC);
		}

		function TotalDados(){
			//retorna o total de dados no registro
			return $this->obj->rowCount();
		}

		function GetItens(){
			return $this->itens;
		}
	}


?>