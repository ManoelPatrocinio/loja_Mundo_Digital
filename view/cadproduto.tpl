<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->
<!-- Font Awesome -->
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">


    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>


<div class="container">
      <div class="card">
          <div class="card-header text-white bg-dark mb-3"><i class="fas fa-plus"></i> Cadastro de Produto.

          </div>
  <form action="addprod" class="new-product" method="POST">


    <div class="form-row">
      <div class="form-group col-md-6">
        <label for="nome">Nome</label>
        <input type="text" name="nome" class="form-control" id="inputEmail4" placeholder="Nome">
      </div>
      <div class="form-group col-md-6">
        <label for="Apelido">Apelido</label>
                <input name ="apelido" type="text" class="form-control" placeholder="Apelido">
      </div>
      <div class="form-group col-md-2">
        <label for="categoria">Categoria</label>
                <input name ="categoria" type="text" class="form-control" placeholder="Categoria">
      </div>
      <div class="form-group col-md-2">
        <label for="peso">Peso</label>
                <input name ="peso" type="text" class="form-control" placeholder="Peso">
      </div>
      <div class="form-group col-md-2">
        <label for="altura">Altura</label>
                <input name ="altura" type="text" class="form-control" placeholder="Altura">
      </div>
      <div class="form-group col-md-2">
        <label for="largura">Largura</label>
                <input name ="largura" type="text" class="form-control" placeholder="Largura">
      </div>
      <div class="form-group col-md-2">
        <label for="comprimento">Comprimento</label>
                <input name ="comprimento" type="text" class="form-control" placeholder="Comprimento">
      </div>
      <div class="form-group col-md-2">
        <label for="referencia">Referência</label>
                <input name ="referencia" type="text" class="form-control" placeholder="Referência">
      </div>
      <div class="form-group col-md-2">
        <label for="fabricante">Fabricante</label>
                <input name ="fabricante" type="text" class="form-control" placeholder="Fabricante">
      </div>
      <div class="form-group col-md-2">
        <label for="modelo">Modelo</label>
                <input name ="modelo" type="text" class="form-control" placeholder="Modelo">
      </div>
      <div class="form-group col-md-2">
        <label for="valor">Valor</label>

        <div class="input-group">
          <div class="input-group-prepend">
            <span class="input-group-text">BRL</span>
          </div>
          <input type="number" min="0.00" step="1.00" value="1.00" id="exampleInputAmount" class="form-control" placeholder="Preço" name="valor">
        </div>
      </div>

      <div class="form-group col-md-2">
        <label for="estoque">Nº em Estoque</label>
                <input name ="estoque" type=" number" class="form-control" placeholder="Nº em Estoque" maxlength="4">
      </div>

    </div>
    <div class="form-group form-check">
      <input class="form-check-input" type="checkbox" value="" id="defaultCheck1" name="frete">
      <label for="frete">Frete Gratis</label>
    </div>
    <div class="form-group form-check">
      <input class="form-check-input" type="checkbox" value="" id="defaultCheck1" name="status">
      <label for="status">Ativo para exibição</label>
    </div>
    <div class="form-group">
      <label for="url">URL Imagem</label>
              <input name ="url" type="text" class="form-control" placeholder="http://example.com/imagem">
    </div>
    <div class="form-group">
      <label for="descricao">Descrição</label>
              <textarea name="descricao" class="form-control" maxlength="500"></textarea>
    </div>

  <button type="submit" class="btn btn-light hblue">ENVIAR</button>
  </form>

</div>
</div>
