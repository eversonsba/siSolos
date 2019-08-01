<?php 
require_once("db/funcionarios.php");
	$siap=$_POST['siap'];
	$nome=$_POST['nome'];
	$sobrenome=$_POST['sobrenome'];
	$senha=$_POST['senha'];
	$senha=str_replace("\"","",$senha);
	$senha=str_replace("=","",$senha);
	$senha=str_replace(";","",$senha);
	$senha=str_replace("\'","",$senha);
	$email=$_POST['email'];
	$categoria=$_POST['categoria'];

	inserir_funcionario($siap,$nome,$sobrenome,$senha,$email,$categoria);
	header ("Location:gerfuncionarios.php");

 ?>