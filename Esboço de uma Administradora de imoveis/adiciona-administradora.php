<?php require_once("cabecalho.php");
?>

<h1 class="text-center">Adicionar Administradora</h1>
<div class="col-7 mx-auto mt-4">
<form id="form">
    <div class="form-group row">
        <label  class="col-sm-2 col-form-label">CNPJ</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" name="CNPJ" placeholder="xx.xxx.xxx/xxxx-xx" id="cnpj">
        </div>
    </div>
     <div class="form-group row">
        <label class="col-sm-2 col-form-label">Razão Social</label>
        <div class="col-sm-10">
            <input class="form-control" type="text" name="Razao" placeholder="Ex: Casa Bonita" id="razao">
        </div>
    </div>
    <div class="form-group row">
        <label class="col-sm-2 col-form-label">Endereço</label>
        <div class="col-sm-10">
            <input class="form-control" type="text" name="Endereco" placeholder="Ex: Rua da Esperança" id="endereco">
        </div>
    </div>
    <div class="form-group row">
        <label class="col-sm-2 col-form-label">Número</label>
        <div class="col-sm-10">
            <input class="form-control" type="number" name="Numero" placeholder="xxxx" id="numero">
        </div>
    </div>
    <div class="form-group row">
        <label class="col-sm-2 col-form-label">Complemento</label>
        <div class="col-sm-10">
            <input class="form-control" type="text" name="Complemento" placeholder="Ex: Apto 4" id="complemento">
        </div>
    </div>
    <div class="form-group row">
        <label class="col-sm-2 col-form-label">Bairro</label>
        <div class="col-sm-10">
            <input class="form-control" type="text" name="Bairro" placeholder="Ex: Hell's Kitchen" id="bairro">
        </div>
    </div>


          <div class="form-group row">
            <div class="col-sm-10">
              <button type="submit" class="btn btn-primary">Cadastrar</button>
            </div>
            </form>
</form>
</div>
</div>

<script type="text/javascript">
    $(function(){
        $('#form').submit(function(){
            var dados = $(this).serialize();

            url = 'logica-adm.php'

        $.ajax({
            
            url: url,
            type: 'POST',
            data: dados,
            cache : false,
            error: function(){
                alert('Erro: Inserir Registo!!');
            },
            success : function(retorno){
                if(retorno ==1){
                swal(
                    'OPA!',
                    'Campo CNPJ não pode ser nulo',
                    'error'
                )

                }else if(retorno ==2){
                    swal(
                    'OPA!',
                    'Campo Razão Social não pode ser nulo',
                    'error'
                )
                    
                }else if(retorno ==3){
                    swal(
                    'OPA!',
                    'Campo Endereço não pode ser nulo',
                    'error'
                )
                    
                }else if(retorno ==4){
                    swal(
                    'OPA!',
                    'Campo Número não pode ser nulo',
                    'error'
                )
                    
                }else if(retorno ==5){
                    swal(
                    'OPA!',
                    'Campo Bairro não pode ser nulo',
                    'error'
                )

                }else{
                    $('input[name="Razao"]').val('');
                    $('input[name="CNPJ"]').val('');
                    $('input[name="Endereco"]').val('');
                    $('input[name="Numero"]').val('');
                    $('input[name="Complemento"]').val('');
                    $('input[name="Bairro"]').val(''); 

                    swal(
                         retorno,
                        ' ',
                        'success'
                        );

                }
            }

                
        });
            return false;
        });

    });
</script>