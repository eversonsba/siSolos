<?php 
require_once("db/funcionarios.php");
$siap = $_GET['siap'];

require_once("mensagem.php");

$titulo = 'EXCLUSÃO DE FUNCIONÁRIO';
$link = 'gerfuncionarios.php';
$res=delete_funcionario($siap);

if($res == 0){
	$texto = 'Os dados não foram excluidos do sistema.';
	erro($titulo,$texto,$link);
}else{
	$texto = 'Os dados foram excluidos do sistema.';
	sucesso($titulo,$texto,$link);
}

 ?>