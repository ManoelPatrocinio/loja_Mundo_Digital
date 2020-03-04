<?php
if(isset($_SESSION['logado']) && $_SESSION['adm'] == '9'){

	$smarty = new Template();

  $pro_id =  filter_input(INPUT_GET, 'pro_id',FILTER_SANITIZE_STRING);
	$pro_type = filter_input(INPUT_GET, 'pro_type',FILTER_SANITIZE_STRING);

  $con = new Conexao();


  $query = "UPDATE mw_produtos set pro_ativo = 'n' where pro_id = $pro_id";
	$query2 = "UPDATE mw_produtos set pro_ativo = 's' where pro_id = $pro_id";
	$query_remove = "DELETE FROM mw_produtos where pro_id = $pro_id";

	if($pro_type == 'a'){
		if($con->ExecuteSQL($query2)){
			echo '<script>alert("Produto Ativo com Sucesso!")</script>';
			echo '<script>javascript:history.go(-1)</script>';
		}
	}
	elseif($pro_type == 'b'){
		if($con->ExecuteSQL($query_remove)){
			echo '<script>alert("Produto Deletado com Sucesso!")</script>';

			echo '<script>window.location.href = "http://localhost/loja/";</script>';
		}
	}else{
		if($con->ExecuteSQL($query)){
			echo '<script>alert("Produto Desabilitado com Sucesso!")</script>';
			echo '<script>javascript:history.go(-1)</script>';
		}
	}

}else{
	echo '<script>javascript:history.go(-1)</script>';
}

?>
