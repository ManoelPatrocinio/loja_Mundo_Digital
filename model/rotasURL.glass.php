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
		static function pag_Compra(){

			return self:: get_siteHome(). '/comprar';
		}


		static function pag_contato(){

			return self:: get_siteHome(). '/contato';
		}

		static function pag_perfil(){

			return self:: get_siteHome(). '/perfil';
		}

		static function pag_formulario(){

			return self:: get_siteHome(). '/servico';
		}
		static function pag_produtos(){
			return self:: get_siteHome(). '/produtos';
		}

		static function pag_cad(){
		  return self:: get_siteHome(). '/registro';
		}

		static function pag_produtos_main(){
			return self:: get_siteHome(). '/produtos_main';
		}

		static function pag_produtosInfor(){
			return self:: get_siteHome(). '/produtos_info';
		}
		static function pag_MinhaConta(){
			return self:: get_siteHome(). '/minhaconta';
		}
		static function pag_CadProduto(){
			return self:: get_siteHome(). '/cadproduto';
		}
		static function pag_Login(){
		  return self:: get_siteHome(). '/login';
		}
		static function pag_Logoff(){
		  return self:: get_siteHome(). '/logoff';
		}
		static function pag_adm(){

			return self:: get_siteHome(). '/gerencia';
		}
		static function pag_EditarCliente(){

			return self:: get_siteHome(). '/EditarCliente';
		}

		static function pag_editProd(){

			return self:: get_siteHome(). '/editarProd';
		}

		static function pag_pedidos(){

			return self:: get_siteHome(). '/pedidos';
		}

		static function get_ImagensPasta(){
			return 'midias/imagens/';
		}
		static function get_ImagensURL(){
			return self::get_siteHome() .'/'.self::get_ImagensPasta();
		}
                //redimenciona da imagens
		static function ImagemLink($img,$largura,$altura){
			$imagem = self:: get_ImagensURL()."thumb.php?src={$img}&W={$largura}&W={$altura}&opac=1";
      		return $imagem;
		}

		// static permite a chamada sem instanciar a class
		static function get_Pagina(){
			 $start = 1;
			 $main = "controller/produtos.php";

			if(isset($_GET['pag'])){ // se foi chamada url

				$pagina = $_GET['pag'];
				self::$pag = explode('/',$pagina);
				$pagina = 'controller/' . self::$pag[0] .'.php';

				if (file_exists($pagina)) { // vereifica se o arquiva chamado existi
					include $pagina;
					$start = 1;
		 		}else{
					 $start = 0;
				}

			}else{ // caso nenhma tela tenha sido chamada, chame produtos
				include $main;
			}
			return $start;
		}
	}
?>
