<?php
require_once("conecta.php");	

function listaAdministradoras($conexao) {
	$administradoras = array();
	$resultado = mysqli_query($conexao, "select * from administradoras");
	while($administradora = mysqli_fetch_assoc($resultado)) {
		array_push($administradoras, $administradora);
	}
	return $administradoras;
}

function insereAdm($conexao, $razaoSocial, $CNPJ, $endereco, $complemento, $numero,$bairro) {
    $query = "insert into administradoras (razaoSocial, CNPJ, endereco, complemento, numero,bairro)
        values ('$razaoSocial','$CNPJ','$endereco','$complemento','$numero','$bairro')";
    return mysqli_query($conexao, $query);
}

function deletaAdm($conexao,$idAdmin){
	$query = "delete from administradoras where idAdmin = '$idAdmin'";
	 return mysqli_query($conexao, $query);
}