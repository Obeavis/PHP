<?php require_once("cabecalho.php");
      require_once("banco-condominios.php");
      require_once("banco-pessoas.php");
?>

<h1 class="text-center">Adicionar Condominio</h1>
<div class="col-7 mx-auto mt-4">
<form action="" method="post">
    <div class="form-group row">
        <label class="col-sm-2 col-form-label">Endereço</label>
        <div class="col-sm-10">
            <input class="form-control" type="text" name="Endereco" placeholder="Ex: Rua da Esperança">
        </div>
    </div>
    <div class="form-group row">
        <label class="col-sm-2 col-form-label">Número</label>
        <div class="col-sm-10">
            <input class="form-control" type="number" name="Numero" placeholder="xxxx">
        </div>
    </div>
    <div class="form-group row">
        <label class="col-sm-2 col-form-label">Complemento</label>
        <div class="col-sm-10">
            <input class="form-control" type="text" name="Complemento" placeholder="Ex: Apto 4">
        </div>
    </div>
    <div class="form-group row">
        <label class="col-sm-2 col-form-label">Bairro</label>
        <div class="col-sm-10">
            <input class="form-control" type="text" name="Bairro" placeholder="Ex: Hell's Kitchen">
        </div>
    </div>
    <div class="form-group row">
         <label class="col-sm-2 col-form-label">Síndico</label>
        <div class="col-sm-10">
            <select class="form-control" name="idPessoa"> 
            <?php foreach($pessoas as $pessoa) :
                $essaPessoa = $condominio['idPessoa'] == $pessoa['idPessoa'];
                $selecao = $essaPessoa ? "selected='selected'" : "";
            ?>
                <option value="<?=$pessoa['idPessoa']?>" <?=$selecao?>>
                    <?=$pessoa['nome']?>
                </option>
            <?php endforeach ?>
        </select>
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
