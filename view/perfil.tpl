
<div class="container">
	<div class="card">
	<div class="card-header text-white bg-dark mb-3"><i class="far fa-address-card fa-1x" ></i> Perfil

    </div>
 	
     {foreach from=$CLI item=C}
     	<div class="card divisao-item" id="editProd">
     		<div class="itens-editar">
		<form  method="POST" action="perfil">

			<div class="col-md-8 order-md-1">
          


            <div class="mb-3">
              <label for="username">Nome Do Usuário</label>
              <div class="input-group">

                <input type="text" class="form-control text-center" name="nome" id="username"
                        value="{$C.cli_nome}" autocomplete="off" required>
              </div>
            </div>

            <div class="mb-3">
              <label for="email">Email</label>
              <input type="email" class="form-control text-center" name="email" value="{$C.cli_email}" autocomplete="off">

            </div>
              <div class="form-row">
	             <div class="mb-3">
	              <label for="cpf">CPF</label>
	              <input type="text" class="form-control text-center" name="cpf" value="{$C.cli_cpf}" maxlength="14" size="14" autocomplete="off">

	            </div>
	            <div class="mb-3">
	              <label for="pass">Altera Senha de Acesso</label>
	              <input type="text" class="form-control text-center" name="pass" value="" autocomplete="off">

	            </div>
        	</div>

        	<div class="form-row">
        		<input type="number" name="id" value="{$C.cli_id}" style="visibility: hidden;" readonly="">
        	</div>	
            <div class="form-row">
	             <div class="form-group col-md-2">
	              <label for="ddd">DDD</label>
	              <input type="text" class="form-control text-center" name="ddd" value="{$C.cli_ddd}" maxlength="2" size="2" autocomplete="off" required="">

	            </div>
	            <div class="mb-3">
	              <label for="celular">Celular</label>
	              <input type="text" class="form-control text-center" name="celular" maxlength="9" size="9"value="{$C.cli_celular}" autocomplete="off" required="">

	            </div>
        	</div>
            <div class="form-row">
            	<div class="form-group col-md-2">
	        		<label for="uf">UF</label>
	            	<input name ="uf" type="text" class="form-control"  maxlength="2" size="2"value="{$C.cli_uf}" >
	      		</div>
             	 <div class="form-group col-md-2">
	        		<label for="cidade">Cidade</label>
	            	<input name ="cidade" type="text" class="form-control" maxlength="20" size="20" value="{$C.cli_cidade}" >
	      		</div>

	      		<div class="form-group col-md-2">
	        		<label for="bairro">Bairro</label>
	            	<input name ="bairro" type="text" class="form-control" maxlength="14" size="14" value="{$C.cli_bairro}" required="" >
	      		</div>
	      		<div class="form-group col-md-2">
	        		<label for="rua">Rua</label>
	            	<input name ="rua" type="text" class="form-control" maxlength="25" size="25" value="{$C.cli_endereco}" >
	      		</div>
	      		<div class="form-group col-md-2">
	        		<label for="numero">Número</label>
	            	<input name ="numero" type="text" class="form-control" maxlength="5" size="5"  value="{$C.cli_numero}" >
	      		</div>
            </div>



            </div>

			<input type="submit" class="btn btn-light hblue" name="Atualizar" value="Confirmar Alteração">
		</form>
		</div>
		</div>
	{/foreach}
	</div>
</div>
