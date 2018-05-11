<?php header("Content-type: text/html; charset=utf-8"); ?>
<?php require_once ("cabecalho.php");
		require_once("banco-adm.php");
?>
<html>
<head>
<title>Alterar Administradora</title>
<meta charset="UTF-8" />
</head>
<body>
<?php
	require_once("conecta.php");
	$cod=$_GET['cod'];
	$ok = conecta_bd() or die ("Não é possível conectar-se ao servidor.");
	$result=mysqli_query($ok, "select * from administradoras where idAdmin='$cod'") or die ("Não é possível retornar dados do amigo!");
	$linha=mysqli_fetch_array($result);
	$idAdmin=$linha["idAdmin"];
	$CNPJ=$linha["CNPJ"];
	$endereco=$linha["endereco"];
	$complemento=$linha["complemento"];
	$numero=$linha["numero"];
	$razaoSocial=$linha["razaoSocial"];
	$bairro=$linha["bairro"];
?>
<form action="confirma_alterar.php" method="get">
<br>idAdmin: <input type="text" name="id" value="<?php print($idAdmin)?>">
<br>CNPJ: <input type="text" name="cnpj_alter" value="<?php print($CNPJ)?>">
<br>Endereço: <input type="text" name="end_alter" value="<?php print($endereco)?>">
<br>Complemento: <input type="text" name="compl_alter" value="<?php print($complemento)?>">
<br>Número: <input type="text" name="num_alter" value="<?php print($numero)?>">
<br>Razão Social: <input type="text" name="raz_alter" value="<?php print($razaoSocial)?>">
<br>Bairro: <input type="text" name="bairro_alter" value="<?php print($bairro)?>">
<p><input type="submit" value="Alterar Dados">
</form>
<p><a href="gerenciador.php">Cancelar e voltar</a>
</body>
</html>