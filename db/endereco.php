<?php
require_once("connection.php");

function listar_enderecos(){
	$connection = db_connect();
	$endereco  = array();
	$command = "SELECT * FROM enderecos;";
	$result = mysqli_query($connection,$command);
	
	while($data = mysqli_fetch_assoc($result)){
			array_push($endereco, $data);		
	}
	
	return $endereco;	
}

function inserir_endereco ($cidade,$propriedade,$estado,$cep){
	$connection = db_connect();
	$command = "INSERT INTO enderecos VALUES(DEFAULT,'$cidade','$propriedade','$estado', '$cep');";
    $result = mysqli_query($connection,$command);
}

function delete_endereco ($id){
	$connection = db_connect();
	$command = "Delete
				From enderecos
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

function listar_endereco_unico($id){
	$connection = db_connect();
	$command = "SELECT * FROM enderecos WHERE id = $id;";
	$result = mysqli_query($connection,$command);
	$data = mysqli_fetch_array($result);
	return $data;	
}

function atualizar_endereco($id,$cidade,$propriedade,$estado,$cep){

$connection = db_connect();
	
	$command =
	 "UPDATE enderecos SET cidade = '$cidade',propriedade='$propriedade', estado = '$estado', cep = '$cep' WHERE id = $id;";

	$result = mysqli_query($connection,$command);
	if($result>=1){
		return true;
	}else{
		return 0;
	}
}

?>