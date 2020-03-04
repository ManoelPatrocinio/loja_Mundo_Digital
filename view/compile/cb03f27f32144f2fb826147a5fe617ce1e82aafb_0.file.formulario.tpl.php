<?php
/* Smarty version 3.1.34-dev-7, created on 2020-02-10 17:07:22
  from 'C:\xampp\htdocs\loja\view\formulario.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5e417fba577c76_88120729',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'cb03f27f32144f2fb826147a5fe617ce1e82aafb' => 
    array (
      0 => 'C:\\xampp\\htdocs\\loja\\view\\formulario.tpl',
      1 => 1581350838,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e417fba577c76_88120729 (Smarty_Internal_Template $_smarty_tpl) {
?><html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">



  </head>
  <body>
    <div class="col">
        <div class="card">
            <div class="card-header text-white bg-dark mb-3"><i class="fa fa-calendar-plus-o" aria-hidden="true"></i> Agendamento de Serviços.

            </div>
            <div class="card-body">
                <form id="formContato" method="POST" action="formulario">
                    <div class="form-group">
                        <label for="name">Nome</label>
                        <input type="text" class="form-nome form-control" id="name" name="nome" aria-describedby="emailHelp" placeholder="Nome completo" required>
                    </div>
                    <div class="form-group">
                        <label for="email">Email </label>
                        <input type="email" class="form-email form-control" id="email" name="email"aria-describedby="emailHelp" placeholder="email@serv.com" required>
                    </div>
                    <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="form-telefone">Telefone</label>
                        <input type="text" class="form-telefone form-control" maxlength="14" size="14" name="telefone"placeholder="(00)9-0000-0000" maxlenght="15" size="15" onkeydown="javascript: fMasc( this, mTel );" required="">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="form-telefone">CPF</label>
                        <input type="text" class="form-cpf form-control" maxlength="14" size="14" id="cpf" name="cpf" placeholder="XXX.XXX.XXX-XX" maxlenght="14"size="14" onkeydown="javascript: fMasc( this, mCPF );" required="">
                    </div>
                  </div>
                  <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="form-endereco">Endereço</label>
                        <input type="text" class="form-endereco form-control" name="endereco"  placeholder="Av Mundo digital 122" required="">
                    </div>
                     <div class="form-group form-horario col-md-6">
                    <label for="form-horario">Serviços:</label>
                        <select class="form-control" name="servico" id="idservico" required=""> 
                           <optgroup label="Instalação"> 
                                <option value="">Escolher..</option>
                                <option value="manutencao,camera"> Câmera de Segurança</option>
                                <option value="manutencao,Sensores">Sensores</option>
                                <option value="manutencao,Cerca Elétrica">Cerca Elétrica</option>

                            </optgroup>
                            <optgroup label="Manutenção">

                                <option value="manutencao,camera"> Câmera de Segurança</option>
                                <option value="manutencao,Sensores">Sensores</option>
                                <option value="manutencao,Cerca Elétrica">Cerca Elétrica</option>
                            </optgroup>
                            
                        </select>                      
  
                    </div>

                  </div>
                    <div class="form-row">
                     <div class="form-group  col-md-6">
                        <label for="form-data">Data Para Visita</label>
                        <input type="text" class="form-data form-control" name="data" required="">    
  
                    </div>
                    <div class="form-group form-horario col-md-6">
                        <label for="form-horario">Horário:</label>
                        <select class="form-horario form-control" name="horario" required="">
                          <option>Escolher...</option>
                          <option  selected value="Manha">Manhã</option>
                          <option value="Tarde">Tarde</option>
                        </select>
                    </div>
                  </div>
                    <div class="mx-auto">
                    <button type="submit" class="btn btn-light hblue">ENVIAR</button>
                  </div>
                </form>
            </div>
        </div>
    </div>
</body>
<?php echo '<script'; ?>
 type="text/javascript">

function fMasc(objeto,mascara) {
  obj=objeto
  masc=mascara
  setTimeout("fMascEx()",1)
}
function fMascEx() {
  obj.value=masc(obj.value)
}
function mTel(tel) {
  tel=tel.replace(/\D/g,"")
  tel=tel.replace(/^(\d)/,"($1")
  tel=tel.replace(/(.{3})(\d)/,"$1)$2")
  if(tel.length == 9) {
    tel=tel.replace(/(.{1})$/,"-$1")
  } else if (tel.length == 10) {
    tel=tel.replace(/(.{2})$/,"-$1")
  } else if (tel.length == 11) {
    tel=tel.replace(/(.{3})$/,"-$1")
  } else if (tel.length == 12) {
    tel=tel.replace(/(.{4})$/,"-$1")
  } else if (tel.length > 12) {
    tel=tel.replace(/(.{4})$/,"-$1")
  }
  return tel;
}
function mCNPJ(cnpj){
  cnpj=cnpj.replace(/\D/g,"")
  cnpj=cnpj.replace(/^(\d{2})(\d)/,"$1.$2")
  cnpj=cnpj.replace(/^(\d{2})\.(\d{3})(\d)/,"$1.$2.$3")
  cnpj=cnpj.replace(/\.(\d{3})(\d)/,".$1/$2")
  cnpj=cnpj.replace(/(\d{4})(\d)/,"$1-$2")
  return cnpj
}
function mCPF(cpf){
  cpf=cpf.replace(/\D/g,"")
  cpf=cpf.replace(/(\d{3})(\d)/,"$1.$2")
  cpf=cpf.replace(/(\d{3})(\d)/,"$1.$2")
  cpf=cpf.replace(/(\d{3})(\d{1,2})$/,"$1-$2")
  return cpf
}
function mCEP(cep){
  cep=cep.replace(/\D/g,"")
  cep=cep.replace(/^(\d{2})(\d)/,"$1.$2")
  cep=cep.replace(/\.(\d{3})(\d)/,".$1-$2")
  return cep
}
function mNum(num){
  num=num.replace(/\D/g,"")
  return num
}

<?php echo '</script'; ?>
>
</html>
<?php }
}
