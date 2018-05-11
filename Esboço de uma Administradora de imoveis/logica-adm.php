<?php require_once("conecta.php");
	  require_once("banco-adm.php");

$razaoSocial = $_POST["Razao"];
$CNPJ = $_POST["CNPJ"];
$endereco = $_POST["Endereco"];
$complemento = $_POST['Complemento'];
$numero = $_POST['Numero'];
$bairro = $_POST['Bairro'];

if(isset($_POST['CNPJ'])){
	if ($_POST['CNPJ']=='') {
 		echo  1;
 	}elseif ($_POST['Razao']=='') {
 		echo  2;
 	}elseif ($_POST['Endereco']=='') {
 		echo  3;
 	}elseif ($_POST['Numero']=='') {
 		echo  4;
 	}elseif ($_POST['Bairro']=='') {
 		echo  5;
 	}else{


         
 		if (insereAdm($conexao, $razaoSocial, $CNPJ, $endereco, $complemento, $numero,$bairro))
		  echo "Administradora adicionada com sucesso!";
		else
		  echo "Insertion Failed";

 	}
 }

?>