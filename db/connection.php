<?php
function db_connect(){
	//configuracao do banco de dados

	//local que está rodando o php
	$server = "localhost";

	//Nome de usuário que tem acesso
	$user_db ="root";

	//Senha do usuário, que tem acesso ao banco de dados
	$password_db ="";

	//Banco de dados que deseja estabelecer a conexão
	$database ="sistema_solos";

	//Abre uma conexão com o servisor MySQL 
	$connection = mysqli_connect($server, $user_db, $password_db, $database);
    
	//Com a variável $connection definida, podemos fazer um teste usando o IF, se der falso, a conexão com o servidor falhou.
	if(mysqli_connect_errno($connection))
	{
		echo "Erro ao conectar ao banco de dados!";
		die();
	}else{
		mysqli_query($connection,"SET NAMES 'utf8'");
		mysqli_query($connection,'SET character_set_connection=utf8');
		mysqli_query($connection,'SET character_set_client=utf8');
		mysqli_query($connection,'SET character_set_results=utf8');
	}
	return $connection;
}


?> 
