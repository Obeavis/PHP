<?php
require_once("conecta.php");	

function listaLotes($conexao) {
	$lotes = array();
	$resultado = mysqli_query($conexao, "select * from lotes");
	while($lote = mysqli_fetch_assoc($resultado)) {
		array_push($lotes, $lote);
	}
	return $lotes;
}

function deletaLotes($conexao,$idLote){
	$query = "delete from lotes where idLote = '$idLote'";
	 return mysqli_query($conexao, $query);
}