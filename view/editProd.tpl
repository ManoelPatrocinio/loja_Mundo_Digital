
<div class="container">
	<div class="card">
	<div class="card-header text-white bg-dark mb-3"> <i class="fas fa-edit"></i>Editar Produto

    </div>

     {foreach from=$PRO item=P}
     	<div class="card divisao-item" id="editProd">
				<div class="itens-editar">


		<form  method="POST" action="editarProd">

			<div class="form-row">
				<div class="form-group col-md-1 mt-5 mb-5 ml-5">
	        		<label for="id">ID</label>
	            	<input name ="id" type="text" class="form-control"  value="{$P.pro_id}" readonly="">
	      		</div>

	      		<div class="form-group col-md-4  mt-5 mb-5">
	        		<label for="nome">Nome</label>
	            	<input name ="nome" type="text" class="form-control"  value="{$P.pro_nome}" readonly="">
	      		</div>

		        <div class="form-group col-md-2 mt-5 mb-5">
		           	<label for="estoque">Nº em Estoque</label>
		            <input name ="estoque" type="number" class="form-control" value="{$P.pro_estoque}" maxlength="4" size="8">
		      	</div>

		      	<div class="form-group col-md-2 mt-5">
	        		<label for="valor">Valor</label>
	            	<input name ="valor" type="number" class="form-control"  value="{$P.pro_valor}" >
	      		</div>

						<div class="form-group col-md-2 mt-5">
	        		<label for="valor">Produto</label>
	            	  <img name="valor"class="img-fluid" src="{$P.pro_img}" alt="Imagem de exemplo genérica" width="100" height="100" style="border-radius: 5px;">
	      		</div>
			</div>
			<input type="submit" class="btn btn-light hblue  mb-5  ml-5" name="enviar" value="Confirmar Alteração">
		</form>
		</div>
		</div>
	{/foreach}
	</div>
</div>
