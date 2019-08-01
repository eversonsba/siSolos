<?php
	
	if ((empty($_POST['siap']) OR empty($_POST['senha']))) {
        echo "error"; 
    }
    else{
    	$siap = $_POST["siap"];
		$senha = $_POST["senha"];

		require_once("db/login.php");

		$funcionario = login_funcionario($siap,$senha);

		if(isset($funcionario)){
		echo $funcionario['siap'];
		echo $funcionario['senha'];}
		else{
			echo "Erro";
		}
    }


?>