<?php
	
	if ((empty($_POST['siap']) OR empty($_POST['senha']))) {
        echo "error"; 
    }
    else{
    	$siap = $_POST["siap"];
		$senha = $_POST["senha"];

	//tratamento de sql injection
		$siap = preg_replace('/[^[:alnum:]_.-]/','',$siap);
		$senha = addslashes($senha);

		require_once("db/login.php");
		

		$funcionario = login_funcionario($siap,$senha);

		if(isset($funcionario)){
		session_start();
		$_SESSION['siap'] = $funcionario['siap'];
		$_SESSION['senha'] = $funcionario['senha'];
		$_SESSION['nome'] = $funcionario['nome'];
		header ("Location:geramostras.php");
		}
		else{
			header ("Location:login.html");
		}
    }


?>