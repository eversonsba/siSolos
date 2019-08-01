<?php
require_once("connection.php");

function listar_categorias(){
	$connection = db_connect();
	$categorias  = array();
	$command = "SELECT * FROM categorias;";
	$result = mysqli_query($connection,$command);
	
	while($data = mysqli_fetch_assoc($result)){
			array_push($categorias, $data);		
	}
	
	return $categorias;	
}

function inserir_categoria($descricao){
	$connection = db_connect();
	$command = "INSERT INTO categorias VALUES(DEFAULT,'$descricao');";
    $result = mysqli_query($connection,$command);
}

function delete_categoria ($id){
	$connection = db_connect();
	$command = "Delete
				From categorias
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

function listar_categoria_unica($id){
	$connection = db_connect();
	$command = "SELECT * FROM categorias WHERE id = $id;";
	$result = mysqli_query($connection,$command);
	$data = mysqli_fetch_array($result);
	return $data;	
}

function atualizar_categoria($id,$descricao){

$connection = db_connect();
	
	$command ="UPDATE categorias SET descricao = '$descricao' WHERE id = $id;";

	$result = mysqli_query($connection,$command);
	if($result>=1){
		return true;
	}else{
		return 0;
	}
}

?>