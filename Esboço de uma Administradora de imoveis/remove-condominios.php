<?php require_once("cabecalho.php");
      require_once("banco-condominios.php");

$idCondominio = $_POST['idCondominio'];

if(deletaCondominios($conexao, $idCondominio))
Echo "
<div class='text-center'>
<h1>Condominio removido com sucesso.</h1>
</div>
";
else
echo "deu ruim";
die();
?>
