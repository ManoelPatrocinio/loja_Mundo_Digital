
<body>
    
    <div class="col">
        <div class="card">
            <div class="card-header text-white bg-dark mb-3"><i class="fa fa-calendar-plus-o" aria-hidden="true"></i> Serviços Solicitados

            </div>
            {foreach from=$PRE item=P}
            <div class="card-body">
                
                    <div class="form-group">
                        <label for="name">Nome</label>
                        <input type="text" class="form-nome form-control" id="name" name="nome" aria-describedby="emailHelp" value="{$P.cli_nome}">
                    </div>
                    <div class="form-group">
                        <label for="email">Email </label>
                        <input type="text" class="form-email form-control" id="email" name="email"aria-describedby="emailHelp" value="{$P.cli_email}" required>
                    </div>
                    <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="form-telefone">Telefone</label>
                        <input type="text" class="form-telefone form-control" maxlength="14" size="14" name="telefone" value="{$P.cli_telefone}" onkeydown="javascript: fMasc( this, mTel );">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="form-telefone">CPF</label>
                        <input type="text" class="form-cpf form-control" maxlength="14" size="14" id="cpf" name="cpf" value="{$P.cli_cpf}" onkeydown="javascript: fMasc( this, mCPF );">
                    </div>
                  </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="form-endereco">Endereço</label>
                            <input type="text" class="form-endereco form-control" name="endereco" value="{$P.cli_endereco}">
                        </div>

                        <div class="form-group  col-md-6">
                        <label for="form-endereco">Serviço(s)</label>
                        <input type="text" class="form-endereco form-control" name="servico" value="{$P.cli_servico}">    
  
                    </div>
                    </div>
                    <div class="form-row">
                    <div class="form-group  col-md-6">
                        <label for="form-endereco">Data Solicitada</label>
                        <input type="text" class="form-endereco form-control" name="servico" value="{$P.cli_data}">    
  
                    </div>
                    <div class="form-group form-horario col-md-6">
                        <label for="form-horario">Horário</label>
                        <input type="text" class=" form-control" name="horaio" value="{$P.cli_horario}">  
                    </div>
                  </div>
               
            </div>
             <div class="card-header text-white bg-dark mb-3"> 

            </div>
            {/foreach}
        </div>
    </div>
    
</body>
