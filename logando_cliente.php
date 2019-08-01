<?php
	
	if ((empty($_POST['identificador']) OR empty($_POST['senha']))) {
        echo "error"; 
    }
    else{
    	$identificador = $_POST["identificador"];
		$senha = $_POST["senha"];
		
		//tratamento de sql injection
		$identificador = preg_replace('/[^[:alnum:]_.-]/','',$identificador);
		$senha = addslashes($senha);

		
		require_once("db/login.php");

		$cliente = login_cliente($identificador,$senha);

		if(isset($cliente)){
		session_start();
		$_SESSION['identificador'] = $cliente['identificador'];
		$_SESSION['senha'] = $cliente['senha'];
		$_SESSION['nome'] = $cliente['nome'];
		header ("Location:resultados.php");
		}
		else{
			header ("Location:login_cliente.html");
		}
    }


?>