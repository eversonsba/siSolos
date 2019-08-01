<?php
require_once("connection.php");

function listar_amostras(){
	$connection = db_connect();
	$amostras  = array();
	$command = "SELECT a.data_entrada,a.identificador,ta.valor, s.descricao AS situacao,c.nome,c.identificador as ccliente,ta.descricao AS tipo from amostras a
INNER JOIN situacao s
ON s.id = a.id_situacao
INNER JOIN clientes c
ON c.identificador = a.identificador_cliente_amostras
INNER JOIN tipo_analise ta
on ta.id = a.id_tipo_analise
order by a.data_entrada DESC;";
	$result = mysqli_query($connection,$command);
	
	while($data = mysqli_fetch_assoc($result)){
			array_push($amostras, $data);		
	}
	
	return $amostras;	
}

function listar_amostras_resultado(){
	$connection = db_connect();
	$amostras  = array();
	$command = "SELECT * FROM amostras where id_situacao=2;";
	$result = mysqli_query($connection,$command);
	
	while($data = mysqli_fetch_assoc($result)){
			array_push($amostras, $data);		
	}
	
	return $amostras;	
}

function inserir_amostras($identificador,$situacao,$cliente,$tipo){
	$connection = db_connect();
	$command = "INSERT INTO amostras VALUE('$identificador',NOW(),$situacao,'$cliente',$tipo);";
    $result = mysqli_query($connection,$command);
}

function delete_amostras ($identificador){
	$connection = db_connect();
	$command = "Delete
				From amostras
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

function listar_amostra_unica($identificador){
	$connection = db_connect();
	$command = "SELECT a.identificador,s.id AS id_situacao, s.descricao AS situacao,c.nome, c.sobrenome,c.identificador AS id_cliente,ta.id AS id_tipo, ta.descricao AS tipo from amostras a
		INNER JOIN situacao s
		ON s.id = a.id_situacao
		INNER JOIN clientes c
		ON c.identificador = a.identificador_cliente_amostras
		INNER JOIN tipo_analise ta
		on ta.id = a.id_tipo_analise
		WHERE a.identificador = $identificador;";
	$result = mysqli_query($connection,$command);
	$data = mysqli_fetch_array($result);
	return $data;	
}
 
function atualizar_amostra($identificador,$identificadorNovo,$situacao,$cliente,$tipo){

$connection = db_connect();
	
	$command ="UPDATE amostras SET
identificador = $identificadorNovo, id_situacao = $situacao, identificador_cliente_amostras = '$cliente', id_tipo_analise = $tipo
WHERE identificador = $identificador;";

	$result = mysqli_query($connection,$command);
	if($result>=1){
		return true;
	}else{
		return 0;
	}
}

?>