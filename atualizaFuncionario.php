<?php 
require_once("db/funcionarios.php");
	$siap=$_POST['siap'];
	$siapNovo=$_POST['novo'];
	$nome=$_POST['nome'];
	$sobrenome=$_POST['sobrenome'];
	$senha=$_POST['senha'];
	$senha=str_replace("\"","",$senha);
	$senha=str_replace("=","",$senha);
	$senha=str_replace(";","",$senha);
	$senha=str_replace("\'","",$senha);
	$email=$_POST['email'];
	$categoria=$_POST['categoria'];

	atualiza_funcionario($siap,$siapNovo,$nome,$sobrenome,$senha,$email,$categoria);
	header ("Location:gerfuncionarios.php");

 ?>