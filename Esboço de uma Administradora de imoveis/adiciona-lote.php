<?php require_once("cabecalho.php");
?>

<h1 class="text-center">Adicionar Lote</h1>
<div class="col-7 mx-auto mt-4">
<form action="" method="post">
    <div class="form-group row">
        <label class="col-sm-2 col-form-label">Tamanho</label>
        <div class="col-sm-10">
            <input class="form-control" type="number" name="Tamanho" placeholder="Em M²">
        </div>
    </div>
    <div class="form-group row">
        <label class="col-sm-2 col-form-label">Descrição</label>
        <div class="col-sm-10">
            <textarea class="form-control" name="Descricao" placeholder="Um lote bem muito bonito"></textarea>
        </div>
    </div>
    <div class="form-group row">
         <label class="col-sm-2 col-form-label">Condominio</label>
        <div class="col-sm-10">
            <select class="form-control" name="Condominio"> 
                <option></option>
            </select>
        </div>
    </div>
    <div class="form-group row">
         <label class="col-sm-2 col-form-label">Dono</label>
        <div class="col-sm-10">
            <select class="form-control" name="Dono"> 
                <option></option>
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
