<?php require_once("conecta.php");
	  require_once("banco-pessoas.php");

$nome = $_POST["nome"];
$cpf = $_POST["cpf"];
$endereco = $_POST["Endereco"];
$complemento = $_POST['Complemento'];
$numero = $_POST['Numero'];
$bairro = $_POST['Bairro'];
$data = $_POST['Nascimento'];


$phpdate = strtotime( $data );
$dataNasc = date( 'Y-m-d', $phpdate );
	

if(isset($_POST['nome'])){
	if ($_POST['nome']=='') {
 		echo  1;
 	}elseif ($_POST['cpf']=='') {
 		echo  2;
 	}elseif ($_POST['Nascimento']=='') {
 		echo  3;
 	}elseif ($_POST['Endereco']=='') {
 		echo  4;
 	}elseif ($_POST['Numero']=='') {
 		echo  5;
 	}elseif ($_POST['Bairro']=='') {
 		echo  6;
 	}else{


         
 		if(inserePessoa($conexao, $nome, $cpf, $endereco, $complemento, $numero,$bairro, $dataNasc))
		  echo "Pessoa adicionada com sucesso!";
		else
		  echo "Insertion Failed";

 	}
 }

?>