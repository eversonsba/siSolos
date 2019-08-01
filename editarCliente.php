<?php 
require_once("db/Clientes.php");
	$identificadorNovo=$_POST['novo'];
	$identificador=$_POST['identificador'];
	$nome=$_POST['nome'];
	$sobrenome=$_POST['sobrenome'];
	$senha=$_POST['senha'];
	$senha=str_replace("\"","",$senha);
	$senha=str_replace("=","",$senha);
	$senha=str_replace(";","",$senha);
	$senha=str_replace("\'","",$senha);
	$endereco=$_POST['endereco'];
	atualiza_cliente($identificador,$identificadorNovo,$nome,$sobrenome,$senha,$endereco);
	header ("Location:gerclientes.php");
 ?>