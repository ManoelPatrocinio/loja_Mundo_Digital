<?php
	class Rotas{

		public static $pag;
		private static $pasta_controller = 'controller';
		private static $pasta_view = 'view';

		// pega o pasta home do site
		static function get_siteHome(){
			return Config:: SITE_URL . '/'.Config::SITE_PASTA;
		}

		// pega a raiz do site
		static function get_siteRaiz(){
			// $_SERVER['DOCUMENT_ROOT'] identifica o servidor em que o site esta instalado
			return $_SERVER['DOCUMENT_ROOT'] . '/'.Config::SITE_PASTA;
		}

		//acessa a pasta dos templates
		static function get_siteTema(){
			
			return self:: get_siteHome(). '/' .self::$pasta_view;
		}

		//acessa a pagina do carrinho
		static function pag_carrinho(){
			
			return self:: get_siteHome(). '/carrinho';
		}

		
		static function pag_contato(){
			
			return self:: get_siteHome(). '/contato';
		}

		static function pag_perfil(){
			
			return self:: get_siteHome(). '/perfil';
		}


		static function pag_produtos(){
			return self:: get_siteHome(). '/produtos';
		}

		// static permite a chamada sem instanciar a class
		static function get_Pagina(){
			if(isset($_GET['pag'])){ // se foi chamada url
				
				$pagina = $_GET['pag'];
				self::$pag = explode('/',$pagina);
				$pagina = 'controller/' . self::$pag[0] .'.php';

				if (file_exists($pagina)) { // vereifica se o arquiva chamado existi
					include $pagina;
		 		}else{
					include 'erro.php';
				}

			}
		}
	}
?>