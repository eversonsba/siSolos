<?php 
require_once("db/amostras.php");
$identificador = $_GET['identificador'];

require_once ("mensagem.php");

$titulo = 'EXCLUSÃO DE AMOSTRAS';
$link = 'geramostras.php';
$res=delete_amostras($identificador);


if($res == 0){
	$texto = 'Os dados não foram excluidos do sistema.';
	erro($titulo,$texto,$link);
}else{
	$texto = 'Os dados foram excluidos do sistema.';
	sucesso($titulo,$texto,$link);
}
 ?>