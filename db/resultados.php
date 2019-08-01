<?php
require_once("connection.php");

function listar_resultados(){
	$connection = db_connect();
	$resultados  = array();
	$command = "SELECT r.identificador_amostra, r.id,r.observacao, r.pdf as arquivo, r.data,c.identificador,c.sobrenome, c.nome as cliente FROM
resultados r 
INNER JOIN clientes c
ON r.identificador_cliente_resultados = c.identificador;";
	$result = mysqli_query($connection,$command);
	
	while($data = mysqli_fetch_assoc($result)){
			array_push($resultados, $data);		
	}
	
	return $resultados;	
}
function inserir_resultados($observacao,$arquivo,$cliente,$amostra){
	$connection = db_connect();
	$command = "INSERT INTO resultados VALUES (DEFAULT,$amostra,'$observacao','$arquivo',NOW(),'$cliente');";
    $result = mysqli_query($connection,$command);

    $command = "UPDATE amostras set id_situacao = 6 where identificador = $amostra;";
    $result = mysqli_query($connection,$command);
}

function delete_resultado($id){
	$connection = db_connect();
	$command = "Delete
				From resultados
				WHERE id = $id;";
			
	//Executa o comando SQL
	$result = mysqli_query($connection,$command);
			
	$row = mysqli_affected_rows($connection);
					
	if ($row == 1) {
		return true;

	} else {

		return false;
	}
				
}

function lista_resultados_cliente($identificador){
	$connection = db_connect();
	$resultados  = array();
	$command = "SELECT r.id,r.observacao, r.pdf as arquivo, r.data, c.nome as cliente FROM
				resultados r 
				INNER JOIN clientes c
				ON r.identificador_cliente_resultados = c.identificador
				WHERE c.identificador = '$identificador' ;";
	$result = mysqli_query($connection,$command);
	
	while($data = mysqli_fetch_assoc($result)){
			array_push($resultados, $data);		
	}
	
	return $resultados;	
}
?>