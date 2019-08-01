<?php 
require_once("db/situacao.php");
$codigo = $_GET['id'];

require_once ("mensagem.php");

$titulo = 'EXCLUSÃO DE SITUAÇÃO';
$link = 'gersituacao.php';

$res=delete_situacao($codigo);
if($res == 0){
	$texto = 'Os dados não foram excluidos do sistema.';
	erro($titulo,$texto,$link);
}else{
	$texto = 'Os dados foram excluidos do sistema.';
	sucesso($titulo,$texto,$link);
}



 ?>