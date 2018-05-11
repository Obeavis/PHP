<html>
<head>
<title>Dados alterados!</title>
<meta charset="UTF-8" />
</head>
<body>
<?php
	$id=$_GET['id'];
	$cnpj_alter=$_GET['cnpj_alter'];
	$end_alter=$_GET['end_alter'];
	$compl_alter=$_GET['compl_alter'];
	$num_alter=$_GET['num_alter'];
	$raz_alter=$_GET['raz_alter'];
	$bairro_alter=$_GET['bairro_alter'];
	require("conecta.php");
	$ok = conecta_bd() or die ("Não é possível conectar-se ao servidor.");
	print("Alteração realizada:<p>");
	print("$cnpj_alter, 
	$end_alter,
	$compl_alter,
	$num_alter,
	$raz_alter,
	$bairro_alter");
	mysqli_query($ok, "update administradoras set CNPJ='$cnpj_alter', endereco='$end_alter', complemento='$compl_alter', numero='$num_alter', razaoSocial='$raz_alter',bairro='$bairro_alter' where idAdmin='$id'") or die ("Não é possível alterar dados do amigo!");
	print("Dados alterados com sucesso!");
?>
<p><a href="mostrar.php">Mostrar</a>
</body>
</html>