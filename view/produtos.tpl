

<body>

  <div class="container">

    <div class="row" id="corpo">
            {foreach from=$PRO item=P}

            {if isset($smarty.session.adm) != 9}
            {if $P.pro_ativo == 's'}

          <div class="col-lg-4 col-md-6 mb-4">
            <div class="card h-100 ">

              <div class="topo-item">
              <a href="{$PRO_INFOR}/{$P.pro_id}/{$P.pro_slug}">{$P.pro_nome}</a>
              </div>

                <a href="{$PRO_INFOR}/{$P.pro_id}/{$P.pro_slug}"><img class="card-img-top" src= "{$P.pro_img}" alt="" width="350px" height="300px"></a>
              <div class="card-body">
                <h4 class="card-title">

                </h4>
                <h5 class="card-price">R${$P.pro_valor}</h5>
                <p class="card-text">{$P.pro_descricao}</p>
              </div>

              <div class="card-footer rodape-item" onclick="location.href='{$PRO_INFOR}/{$P.pro_id}/{$P.pro_slug}';" style="cursor: pointer;">
              <p>Mais Detalhes</p>
              </div>
            </div>
          </div>
          {/if}
          {elseif $smarty.session.adm == 9}
          {if $P.pro_ativo == 's' or $P.pro_ativo == 'n'}
          <div class="col-lg-4 col-md-6 mb-4">
            <div class="card h-100 ">
{if $P.pro_ativo == 'n'}
              <div class="topo-item topo-cinza">
              <a href="{$PRO_INFOR}/{$P.pro_id}/{$P.pro_slug}">{$P.pro_nome}</a>
              </div>
{else}
            <div class="topo-item">
            <a href="{$PRO_INFOR}/{$P.pro_id}/{$P.pro_slug}">{$P.pro_nome}</a>
            </div>
{/if}
                <a href="{$PRO_INFOR}/{$P.pro_id}/{$P.pro_slug}"><img class="card-img-top" src= "{$P.pro_img}" alt="" width="350px" height="300px"></a>
              <div class="card-body">
                <h4 class="card-title">

                </h4>
                <h5 class="card-price">R${$P.pro_valor}</h5>
                <p class="card-text">{$P.pro_descricao}</p>
              </div>
{if $P.pro_ativo == 'n'}
              <div class="card-footer rodape-item topo-cinza" onclick="location.href='{$PRO_INFOR}/{$P.pro_id}/{$P.pro_slug}';" style="cursor: pointer;">
              <p>Indisponível</p>
              </div>
{else}
            <div class="card-footer rodape-item" onclick="location.href='{$PRO_INFOR}/{$P.pro_id}/{$P.pro_slug}';" style="cursor: pointer;">
            <p>Mais Detalhes</p>
            </div>
{/if}
            </div>
          </div>
          {/if}
          {/if}
             {/foreach}


    </div>
    <!-- /.row -->

  </div>
  <!-- /.container -->

  <!-- Bootstrap core JavaScript -->


</body>

</html>
