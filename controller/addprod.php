
<?php
if ($_SESSION['logado'] && $_SESSION['adm']) {

$nome = filter_input(INPUT_POST, 'nome',FILTER_SANITIZE_STRING);
$apelido = filter_input(INPUT_POST, 'apelido',FILTER_SANITIZE_STRING);
$categoria = filter_input(INPUT_POST, 'categoria',FILTER_SANITIZE_STRING);
$peso = filter_input(INPUT_POST, 'peso',FILTER_SANITIZE_STRING);
$altura = filter_input(INPUT_POST, 'altura',FILTER_SANITIZE_STRING);
$largura = filter_input(INPUT_POST, 'largura',FILTER_SANITIZE_STRING);
$comprimento = filter_input(INPUT_POST, 'comprimento',FILTER_SANITIZE_STRING);
$referencia = filter_input(INPUT_POST, 'referencia',FILTER_SANITIZE_STRING);
$fabricante = filter_input(INPUT_POST, 'fabricante',FILTER_SANITIZE_STRING);
$modelo = filter_input(INPUT_POST, 'modelo',FILTER_SANITIZE_STRING);
$valor = filter_input(INPUT_POST, 'valor',FILTER_SANITIZE_STRING);
$estoque = filter_input(INPUT_POST, 'estoque',FILTER_SANITIZE_STRING);
$imagem = filter_input(INPUT_POST, 'url',FILTER_SANITIZE_STRING);
$desc = filter_input(INPUT_POST, 'descricao',FILTER_SANITIZE_STRING);

if(isset($_POST['status'])){
  $ativo = 's';
}
else{
  $ativo ='n';
}
if(isset($_POST['frete'])){
  $fretegratis  = 's';
}
else{
  $fretegratis  ='n';
}

  $con = new Conexao();

$query = "INSERT INTO  mw_produtos(pro_id, pro_nome, pro_categoria, pro_descricao, pro_peso, pro_valor, pro_altura, pro_largura, pro_comprimento, pro_img, pro_slug, pro_estoque, pro_modelo, pro_referencia, pro_fabricante, pro_ativo, pro_frete_free)
 VALUES (DEFAULT,'$nome','$categoria','$desc','$peso','$valor','$altura','$largura','$comprimento','$imagem','$apelido','$estoque','$modelo','$referencia','$fabricante','$ativo','$fretegratis')";

if($con->ExecuteSQL($query)){
	echo '<script>alert("Produto Cadastrado com Sucesso!")</script>';
	echo '<meta http-equiv="refresh" content="0; url=http://localhost/loja">';
}else{
	echo '<script>alert("Erro no Cadastrado do Produto!")</script>';
	echo '<meta http-equiv="refresh" content="0; url=http://localhost/loja">';
}

}else {
    header('Location: http://localhost/loja/');
}
/*

<script>alert('Solicitação enviada com Sucesso!')</script>
<meta http-equiv="refresh" content="0; url=cadproduto">
*/
?>
