<?php require_once("cabecalho.php");
      require_once("banco-adm.php");

$idAdmin = $_POST['idAdmin'];

if(deletaAdm($conexao, $idAdmin))
Echo "
<div class='text-center'>
<h1>Administradora removido com sucesso.</h1>
</div>
";
else
echo "deu ruim";
die();
?>
