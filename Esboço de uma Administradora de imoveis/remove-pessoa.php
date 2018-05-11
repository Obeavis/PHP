<?php require_once("cabecalho.php");
      require_once("banco-pessoas.php");

$idPessoa = $_POST['idPessoa'];

if(deletaPessoa($conexao, $idPessoa))
Echo "
<div class='text-center'>
<h1>Pessoa removido com sucesso.</h1>
</div>
";
else
echo "deu ruim";
die();
?>
