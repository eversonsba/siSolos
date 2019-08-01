<?php
require_once("connection.php");

function listar_tipo_analise(){
	$connection = db_connect();
	$analise  = array();
	$command = "SELECT * FROM tipo_analise;";
	$result = mysqli_query($connection,$command);
	
	while($data = mysqli_fetch_assoc($result)){
			array_push($analise, $data);		
	}
	
	return $analise;	
}

function inserir_tipo_analise($descricao,$valor){
	$connection = db_connect();
	$command = "INSERT INTO tipo_analise VALUE(DEFAULT,'$descricao',$valor);";
    $result = mysqli_query($connection,$command);
}

function delete_tipo_analise ($id){
	$connection = db_connect();
	$command = "Delete
				From tipo_analise
				WHERE id = $id";
			
	//Executa o comando SQL
	$result = mysqli_query($connection,$command);
			
	$row = mysqli_affected_rows($connection);
					
	if ($row == 1) {
		return true;

	} else {

		return false;
	}
				
}
function listar_tipo_analise_unica($id){
	$connection = db_connect();
	$command = "SELECT * FROM tipo_analise WHERE id = $id;";
	$result = mysqli_query($connection,$command);
	$data = mysqli_fetch_array($result);
	return $data;	
}

function atualizar_tipo_analise($id,$descricao,$valor){

$connection = db_connect();
	
	$command ="UPDATE tipo_analise SET descricao = '$descricao', valor = $valor WHERE id = $id;
";

	$result = mysqli_query($connection,$command);
	if($result>=1){
		return true;
	}else{
		return 0;
	}
}

?>