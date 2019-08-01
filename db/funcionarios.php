<?php
require_once("connection.php");

function listar_funcionarios(){
	$connection = db_connect();
	$funcionarios  = array();
	$command = "SELECT f.siap,f.nome,f.sobrenome,f.senha,f.email,c.descricao FROM funcionarios f
	INNER JOIN categorias c
	on c.id = f.cod_categoria;";
	$result = mysqli_query($connection,$command);
	
	while($data = mysqli_fetch_assoc($result)){
		array_push($funcionarios, $data);		
	}
	
	return $funcionarios;	
}

function inserir_funcionario($siap,$nome,$sobrenome,$senha,$email,$categoria){
	$connection = db_connect();
	$command = "INSERT INTO funcionarios VALUES('$siap','$nome','$sobrenome','$senha','$email',$categoria);";
	$result = mysqli_query($connection,$command);
}

function delete_funcionario ($siap){
	$connection = db_connect();
	$command = "Delete
	From funcionarios
	WHERE siap = '$siap'";
	
	//Executa o comando SQL
	$result = mysqli_query($connection,$command);
	
	$row = mysqli_affected_rows($connection);
	
	if ($row == 1) {
		return true;

	} else {

		return false;
	}
	
}

function listar_funcionario_unico($siap){
	$connection = db_connect();
	$command = "SELECT f.siap,f.nome,f.sobrenome,f.senha,f.email,f.cod_categoria AS cod_categoria,c.descricao AS descricao  FROM funcionarios f
	INNER JOIN categorias c
	on c.id = f.cod_categoria
	WHERE siap = '$siap';";
	$result = mysqli_query($connection,$command);
	$data = mysqli_fetch_array($result);
	return $data;	
}

function atualiza_funcionario($siap,$siapNovo,$nome,$sobrenome,$senha,$email,$categoria){

	$connection = db_connect();
	
	$command ="UPDATE funcionarios SET
	siap = 	'$siapNovo', nome = '$nome', sobrenome = '$sobrenome',
	senha = '$senha', email = '$email',cod_categoria = $categoria
	WHERE siap = '$siap';";

	$result = mysqli_query($connection,$command);
	if($result>=1){
		return true;
	}else{
		return 0;
	}
}

?>