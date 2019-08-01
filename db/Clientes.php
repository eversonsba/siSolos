<?php
require_once("connection.php");

function listar_clientes(){
	$connection = db_connect();
	$clientes  = array();
	$command = "SELECT * FROM clientes;";
	$result = mysqli_query($connection,$command);
	
	while($data = mysqli_fetch_assoc($result)){
			array_push($clientes, $data);		
	}
	
	return $clientes;	
}

function inserir_cliente($identificador,$nome,$sobrenome,$senha,$endereco){
	$connection = db_connect();
	$command = "INSERT INTO clientes VALUES('$identificador', '$nome','$sobrenome','$senha',$endereco);";
    $result = mysqli_query($connection,$command);
}

function delete_cliente ($identificador){
	$connection = db_connect();
	$command = "Delete
				From clientes
				WHERE identificador = '$identificador'";
			
	//Executa o comando SQL
	$result = mysqli_query($connection,$command);
			
	$row = mysqli_affected_rows($connection);
					
	if ($row == 1) {
		return true;

	} else {

		return false;
	}
				
}
function listar_cliente_unico($identificador){
	$connection = db_connect();
	$command = "SELECT c.identificador,c.senha, c.nome, c.sobrenome,e.propriedade, e.id FROM clientes c iNNER JOIN enderecos e ON c.cod_endereco = e.id WHERE c.identificador = '$identificador'";
	$result = mysqli_query($connection,$command);
	$data = mysqli_fetch_array($result);
	return $data;	
}

function atualiza_cliente($identificador,$identificadorNovo,$nome,$sobrenome,$senha,$endereco){

	$connection = db_connect();
	
	$command ="UPDATE clientes SET
identificador = '$identificadorNovo',nome = '$nome', sobrenome = '$sobrenome',
senha = '$senha', cod_endereco = $endereco
WHERE identificador = '$identificador';";

	$result = mysqli_query($connection,$command);
	if($result>=1){
		return true;
	}else{
		return 0;
	}
}
?>