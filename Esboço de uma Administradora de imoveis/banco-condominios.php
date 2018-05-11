<?php
require_once("conecta.php");	

function listaCondominios($conexao) {
	$condominios = array();
	$resultado = mysqli_query($conexao, "select * from condominios");
	while($condominio = mysqli_fetch_assoc($resultado)) {
		array_push($condominios, $condominio);
	}
	return $condominios;
}

function insereCondominios($conexao, $razaoSocial, $CNPJ, $endereco, $complemento, $numero,$bairro) {
    $query = "insert into condominios (razaoSocial, CNPJ, endereco, complemento, numero,bairro)
        values ('$razaoSocial','$CNPJ','$endereco','$complemento','$numero','$bairro')";
    return mysqli_query($conexao, $query);
}

function deletaCondominios($conexao,$idCondominio){
	$query = "delete from condominios where idCondominio = '$idCondominio'";
	 return mysqli_query($conexao, $query);
}