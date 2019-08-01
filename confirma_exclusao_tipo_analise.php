<?php 
require_once("db/tipoAnalise.php");
$codigo = $_GET['id'];

require_once("mensagem.php");

$titulo = 'EXCLUSÃO DE AMOSTRAS';
$link = 'gertipoanalise.php';

$res=delete_tipo_analise($codigo);

if($res == 0){
	$texto = 'Os dados não foram excluidos do sistema.';
	erro($titulo,$texto,$link);
}else{
	$texto = 'Os dados foram excluidos do sistema.';
	sucesso($titulo,$texto,$link);
}

 ?>