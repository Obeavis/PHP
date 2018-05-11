<?php
require_once("conecta.php");	

function listaPessoas($conexao) {
	$pessoas = array();
	$resultado = mysqli_query($conexao, "select * from pessoas");
	while($pessoa = mysqli_fetch_assoc($resultado)) {
		array_push($pessoas, $pessoa);
	}
	return $pessoas;
}

function inserePessoa($conexao, $nome, $cpf, $endereco, $complemento, $numero,$bairro, $dataNasc) {
    $query = "insert into pessoas (nome, cpf, endereco, complemento, numero,bairro,dataNasc)
        values ('$nome','$cpf','$endereco','$complemento','$numero','$bairro','$dataNasc')";
    return mysqli_query($conexao, $query);
}

function deletaPessoa($conexao,$idPessoa){
	$query = "delete from pessoas where idPessoa = '$idPessoa'";
	 return mysqli_query($conexao, $query);
}