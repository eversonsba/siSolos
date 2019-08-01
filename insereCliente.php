<?php 
require_once("db/Clientes.php");
	$identificador=$_POST['identificador'];
	$nome=$_POST['nome'];
	$sobrenome=$_POST['sobrenome'];
	$senha=$_POST['senha'];
	$senha=str_replace("\"","",$senha);
	$senha=str_replace("=","",$senha);
	$senha=str_replace(";","",$senha);
	$senha=str_replace("\'","",$senha);
	$endereco=$_POST['endereco'];

	inserir_cliente($identificador,$nome,$sobrenome,$senha,$endereco);

	header ("Location:gerclientes.php");

 ?>