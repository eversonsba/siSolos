<?php
require_once("connection.php");

function listar_situacao(){
	$connection = db_connect();
	$situacao  = array();
	$command = "SELECT * FROM situacao;";
	$result = mysqli_query($connection,$command);
	
	while($data = mysqli_fetch_assoc($result)){
			array_push($situacao, $data);		
	}
	
	return $situacao;	
}

function inserir_situacao($situacao){
	$connection = db_connect();
	$command = "INSERT INTO situacao VALUES(DEFAULT,'$situacao');";
    $result = mysqli_query($connection,$command);
}

function delete_situacao ($id){
	$connection = db_connect();
	$command = "Delete
				From situacao
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

function listar_situacao_unica($id){
	$connection = db_connect();
	$command = "SELECT * FROM situacao WHERE id = $id;";
	$result = mysqli_query($connection,$command);
	$data = mysqli_fetch_array($result);
	return $data;	
}

function atualizar_situacao($id,$descricao){

$connection = db_connect();
	
	$command ="UPDATE situacao SET descricao = '$descricao' WHERE id = $id;";

	$result = mysqli_query($connection,$command);
	if($result>=1){
		return true;
	}else{
		return 0;
	}
}

?>