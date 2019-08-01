<?php 

	require_once("connection.php");

	function login_funcionario($siap,$senha){

		$connection = db_connect();
		$command = "SELECT f.siap,f.nome,f.sobrenome,f.senha,f.email,c.descricao FROM funcionarios f
					INNER JOIN categorias c
					on c.id = f.cod_categoria
					WHERE siap = '$siap' AND senha = '$senha';";
	$result = mysqli_query($connection,$command);
	$data = mysqli_fetch_array($result);
	return $data;	
	}

	function login_cliente($identificador,$senha){

		$connection = db_connect();
		$command = "SELECT * FROM clientes WHERE identificador = '$identificador' AND senha = '$senha'";
	$result = mysqli_query($connection,$command);
	$data = mysqli_fetch_array($result);
	return $data;	
	}

 ?>