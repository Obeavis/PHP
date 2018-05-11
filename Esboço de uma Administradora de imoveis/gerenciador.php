<?php header("Content-type: text/html; charset=utf-8"); ?>
<?php require_once ("cabecalho.php");
      require_once("banco-adm.php");
      require_once("banco-pessoas.php");
      require_once("banco-condominios.php");
      require_once("banco-lotes.php");

?>

<div id="accordion" role="tablist" class="text-center">
  <div class="card">
    <div class="card-header" role="tab" id="headingOne">
      <h5 class="mb-0">
        <a data-toggle="collapse" href="#collapseadministradora" aria-expanded="true">
          Gerenciar Administradoras
        </a>
      </h5>
    </div>

    <div id="collapseadministradora" class="collapse show" role="tabpanel" data-parent="#accordion">
      <div class="card-body">
         <table class="table table-striped table-bordered">
         <tr>
          <td><b>Razão Social</td>
          <td><b>CNPJ</td>
          <td><b>Endereço</td>
          <td><b>Número</td>
          <td><b>Bairro</td>
          <td><b>Complemento</td>
        </tr>
         <?php
            $administradoras = listaAdministradoras($conexao);
            foreach($administradoras as $administradora) :
          ?>
            <tr>
              <td><?= $administradora['razaoSocial'] ?></td>
              <td><?= $administradora['CNPJ'] ?></td>
              <td><?= $administradora['endereco'] ?></td>
              <td><?= $administradora['numero'] ?></td>
              <td><?= $administradora['bairro']?></td>
              <td><?= $administradora['complemento']?></td>
              <td><a class="btn btn-primary" href="">alterar</a></td>
              <td>
                <form action="remove-adm.php" method="post">
                  <input type="hidden" name="idAdmin" value="<?=$administradora['idAdmin']?>">
                  <button class="btn btn-danger">remover</button>
                </form>
              </td>
            </tr>
            <?php
              endforeach
            ?>
          </table>  
      </div>
    </div>
  </div>
  <div class="card">
    <div class="card-header" role="tab" id="headingTwo">
      <h5 class="mb-0">
        <a class="collapsed" data-toggle="collapse" href="#collapsepessoas" aria-expanded="false">
          Gerenciar Pessoas
        </a>
      </h5>
    </div>
    <div id="collapsepessoas" class="collapse" role="tabpanel" data-parent="#accordion">
      <div class="card-body">
        <table class="table table-striped table-bordered">
         <tr>
          <td><b>Nome</td>
          <td><b>CPF</td>
          <td><b>Data de Nascimento</td>
          <td><b>Endereço</td>
          <td><b>Número</td>
          <td><b>Bairro</td>
          <td><b>Complemento</td>
         <?php
            $pessoas = listaPessoas($conexao);
            foreach($pessoas as $pessoa) :
          ?>
            <tr>
              <td><?= $pessoa['nome'] ?></td>
              <td><?= $pessoa['cpf'] ?></td>
              <td><?= $pessoa['dataNasc'] ?></td>
              <td><?= $pessoa['endereco'] ?></td>
              <td><?= $pessoa['numero'] ?></td>
              <td><?= $pessoa['bairro']?></td>
              <td><?= $pessoa['complemento']?></td>
              <td><a class="btn btn-primary" href="">alterar</a></td>
              <td>
                <form action="remove-pessoa.php" method="post">
                  <input type="hidden" name="idPessoa" value="<?=$pessoa['idPessoa']?>">
                  <button class="btn btn-danger">remover</button>
                </form>
              </td>
            </tr>
            <?php
              endforeach
            ?>
          </table>  
      </div>
    </div>
  </div>
  <div class="card">
    <div class="card-header" role="tab" id="headingThree">
      <h5 class="mb-0">
        <a class="collapsed" data-toggle="collapse" href="#collapsecondominios" aria-expanded="false" aria-controls="collapsecondominios">
          Gerenciar Condominios
        </a>
      </h5>
    </div>
    <div id="collapsecondominios" class="collapse" role="tabpanel" data-parent="#accordion">
      <div class="card-body">
       <table class="table table-striped table-bordered">
         <tr>
          <td><b>Endereço</td>
          <td><b>Número</td>
          <td><b>Bairro</td>
          <td><b>Complemento</td>
         <?php
            $condominios = listaCondominios($conexao);
            foreach($condominios as $condominio) :
          ?>
            <tr>
              <td><?= $condominio['endereco'] ?></td>
              <td><?= $condominio['numero'] ?></td>
              <td><?= $condominio['bairro']?></td>
              <td><?= $condominio['complemento']?></td>
              <td><a class="btn btn-primary" href="">alterar</a></td>
              <td>
                <form action="remove-condominios.php" method="post">
                  <input type="hidden" name="idCondominio" value="<?=$condominio['idCondominio']?>">
                  <button class="btn btn-danger">remover</button>
                </form>
              </td>
            </tr>
            <?php
              endforeach
            ?>
          </table>  
      </div>
    </div>
  </div>
    <div class="card">
    <div class="card-header" role="tab">
      <h5 class="mb-0">
        <a class="collapsed" data-toggle="collapse" href="#collapselote" aria-expanded="false">
          Gerenciar Lotes
        </a>
      </h5>
    </div>
    <div id="collapselote" class="collapse" role="tabpanel" data-parent="#accordion">
      <div class="card-body">
       <table class="table table-striped table-bordered">
         <tr>
          <td><b>Descrição</td>
          <td><b>Tamanho</td>
         <?php
            $lotes = listaLotes($conexao);
            foreach($lotes as $lote) :
          ?>
            <tr>
              <td><?= $lote['descricao'] ?></td>
              <td><?= $lote['tamanho'] ?></td>
              <td><a class="btn btn-primary" href="">alterar</a></td>
              <td>
                <form action="remove-lotes.php" method="post">
                  <input type="hidden" name="idLote" value="<?=$lote['idLote']?>">
                  <button class="btn btn-danger">remover</button>
                </form>
              </td>
            </tr>
            <?php
              endforeach
            ?>
          </table>  
      </div>
    </div>
  </div>
</div>