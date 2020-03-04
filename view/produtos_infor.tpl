
<!-- 
       <div id="fromFrete">
                <form method="POST" action="calcularFrete" >
                  <input type="number" name="cep_destino">
                  <input type="text-center" name="peso" value="{$P.pro_peso}" style="visibility: hidden;">
                  <input type="text-center" name="altura" value="{$P.pro_altura}" style="visibility: hidden;">
                  <input type="text-center" name="largura" value="{$P.pro_largura}" style="visibility: hidden;">
                  <input type="text-center" name="comprimento" value="{$P.pro_comprimento}" style="visibility: hidden;">
                  <input type="text-center" name="valor" value="{$P.pro_valor}" style="visibility: hidden;">

                  <input class="btn btn-light hblue" type="submit" name="Calcular">
                </form>
              </div>
-->              
<head>


  </head>
  <body>
    <div class="container">
        <div class="row">
            {foreach from=$PRO item=P}
        <div class="col">
          <div class="container corpo-item">
            <div class="media">
              <div class="topo-itemsale">

              </div>




              <img class="img-fluid" src="{$P.pro_img}" alt="Imagem de exemplo genérica">
              <div class="price-sell">
                <h2>R${$P.pro_valor}</h2>
              </div>

            <div class="rodape-itemsale" onclick="location.href='{$GET_CARRINHO}/{$P.pro_id}/{$P.pro_slug}'" style="cursor: pointer;">
              <h3>Adicionar ao Carrinho</h3>
            </div>

            </div>

            <div class="media-body">
              <h5 class="mt-5 text-center">{$P.pro_nome}</h5>
              <p>{$P.pro_descricao}</p>
              
              <div class="botoes-prod">

                    {if isset($smarty.session.logado) and isset($smarty.session.adm) == 9}
                    <div class="bt">
                      <div class="botao-remove">
                            <a href="../../disableprod?pro_id={$P.pro_id}&pro_type=b" id="exclui" class="btn btn-sm btn-danger btn-remove"><i class="fas fa-trash fa-2x" id="icone1"></i></a>
                        </div>
                      <div class="botao-remove">
                            <a href="../../disableprod?pro_id={$P.pro_id}" class="btn btn-sm btn-danger btn-remove" data-confirm="ok?"><i class="fas fa-eye-slash fa-2x" id="icone1"></i></a>
                        </div>

                    <div class="botao-add">
                              <a href="../../disableprod?pro_id={$P.pro_id}&pro_type=a" id="add" class="btn btn-sm btn-success btn-remove" ><i class="fas fa-eye fa-2x" id="icone1"></i></a>
                          </div>
                    </div>

                {/if}
                          <div id="forma_pag" style="width: 160px;">
                            <p class="text-right">Pagamento a Vista</p>
                            <img src="https://cdn.shopify.com/s/files/1/1691/5741/files/z_large.png?v=1489005198" width="100%" height="100%">

                          </div>

</div>




  </div>

        </div>

      </div>
        {/foreach}
    </div>
  </div>
</body>
