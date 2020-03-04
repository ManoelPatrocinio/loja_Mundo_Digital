<?php
    $carrinho = new Carrinho();
    $produtos = new Produtos();
    $total= 0;
    $array;
    $idProd =0;

    if(isset(Rotas::$pag[0]) == 'carrinho' && isset(Rotas::$pag[1]) && Rotas::$pag[1] != 0 && Rotas::$pag[1] != 'del'){

            $idProd = (int) Rotas::$pag[1];
            $carrinho->verificaAdiciona($idProd);

    }


    if (isset($_SESSION['produtos'][0])) {
        $carrinho->deleteProduto(0);

    }

    if(isset(Rotas::$pag[1]) && Rotas::$pag[1] == 'del' && isset(Rotas::$pag[2]) && Rotas::$pag[2] != 0){
        $idDel = Rotas::$pag[2];
        $carrinho->deleteProduto($idDel);
    }
    if(isset($_POST['add'])){
        $prodAdd = $_POST['qtd'];

        if ($carrinho->atualizarqtd($prodAdd)) {
        }else{
            echo "<script>alert('Erro ao atualizar a quantidade')</script>";
        }
    }


 ?>
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

<!------
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">

---------->

<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">

<div class="container mb-4">
    <div class="row">
    <div class="col-12">
        <div class="table-responsive">
        <form method="POST" action="http://localhost/loja/carrinho">
        <table class="table table-striped">
            <thead>

                <tr>
                    <th scope="col"> </th>
                    <th scope="col">Produto</th>
                    <th scope="col">Estado</th>
                    <th scope="col" class="text-center">Quantidade</th>
                    <th scope="col" class="text-right">Preço Uni.</th>
                    <th scope="col" class="text-right">   Preço Total</th>
                    <th> </th>
                </tr>
            </thead>
            <tbody>

               <?php



               	 $i=0;
                    if(!isset($_SESSION['produto'])){
                        echo '<script>alert("Você não tem itens no carrinho")</script>';
                        echo '<meta http-equiv="refresh" content="0; url=http://localhost/loja/produtos">';

                    }else if ($carrinho->qtdProdutos() == 0) {

                        echo '<tr><td colspan="5"> Você não possui itens no Carrinho !</td></tr>';


					}else{


						foreach ($_SESSION['produto'] as $id => $quantidade) {

                            $id = (int) $id;


							$produtos->GetProdutosID($id);
							$array=$produtos->getItens();
                        if ($array[1]['pro_estoque'] > 0) {
               ?>

                <tr>
                    <td><img src="<?php  echo $array[1]['pro_img']; ?>" width="60px" height="60px" /> </td>

                    <td> <?php  echo $array[1]['pro_nome']; ?> </td>

                    <td> <?php echo $array[1]['pro_estoque']; ?> Em estoque </td>

                    <td><input type="number" name="qtd[<?php echo$array[1]['pro_id'] ?>]" id="Catqtd"
                               min="0" max="<?php echo $array[1]['pro_estoque'];  ?>"
                               value="<?php echo $quantidade ?>"/> 
                               <button type="submit" name="add" value="" style="background-color: #28a745; border: none";><i class="fas fa-check" style="color:white;"></i></button>
                    </td>

                    <td class="text-right"> <?php echo number_format($array[1]['pro_valor'],2,'.','.');?> </td>

                    <td class="text-right"> <?php echo number_format($array[1]['pro_valor'] * $quantidade,2,'.','.');?> </td>

                    <td class="text-right"><a class="btn btn-sm btn-danger" href="<?php echo 'http://localhost/loja/carrinho/del'.'/'.$id ?>" ><i class="fa fa-trash"></i> </a> </td>
                </tr>

            	<?php $total += $array[1]['pro_valor'] * $quantidade; }else{
                    echo '<tr><td><img src="'.$array[1]['pro_img'].'" width="60px" height="60px"</td>
                         <td>'.$array[1]['pro_nome'].'</td><td> Sem estoque</td>
                         <td class="text-center">0,00</td><td class="text-center">0,00</td>
                         <td class="text-center">0,00</td></tr>';
                }


            }} ?>

                <tr>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td><strong>Total</strong></td>
                    <td class="text-right"><strong>R$<?php  echo number_format($total,2,',','.');?></strong></td>
                </tr>
                <tr><input type="text" name="id" value="<?php echo$array[1]['pro_id'] ?>" style="visibility: hidden;"></tr>

            </tbody>
        </table>
        </form>
        </div>
    </div>
    <div class="col mb-2">
        <div class="row">
            <div class="col-sm-12  col-md-6" >

                <a class="btn btn-block btn-light" href="http://localhost/loja">Continue Comprando</a>

            </div>
            <div class="col-sm-12 col-md-6 text-right">

                 <form method="POST" action="http://localhost/loja/comprar">
                    <input class="btn btn-lg btn-block btn-success text-uppercase" type="submit" value="Finalizar">
                    <input type="text" name="total" style="visibility: hidden;" value="<?php echo $total ;?>">
                </form>

            </div>
        </div>
    </div>
    </div>
</div>
