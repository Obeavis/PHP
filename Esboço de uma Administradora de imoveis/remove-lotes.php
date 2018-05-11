<?php require_once("cabecalho.php");
      require_once("banco-lotes.php");

$idLote = $_POST['idLote'];

if(deletaLotes($conexao, $idLote))
Echo "
<div class='text-center'>
<h1>Lote removido com sucesso.</h1>
</div>
";
else
echo "deu ruim";
die();
?>
