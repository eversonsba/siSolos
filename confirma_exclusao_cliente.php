<?php 
require_once("db/Clientes.php");
$identificador = $_GET['identificador'];

require_once ("mensagem.php");

$titulo = 'EXCLUSÃO DE CLIENTE';
$link = 'gerclientes.php';
$res=delete_cliente($identificador);

if($res == 0){
	$texto = 'Os dados não foram excluidos do sistema.';
	erro($titulo,$texto,$link);
}else{
	$texto = 'Os dados foram excluidos do sistema.';
	sucesso($titulo,$texto,$link);
}

 ?>